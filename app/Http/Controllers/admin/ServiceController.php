<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Image;
use URL;

use  Session;
use Webp;
use AdminHelper;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        //echo Admin::SayHello();
        date_default_timezone_set('Asia/Dhaka');

    }

    public function index()
    {
        $data['main'] = 'Services';
        $data['active'] = 'All Services';
        $data['title'] = '  ';
        $services = DB::table('services')
            ->orderBy('services.service_id', 'desc')->get();
        return view('admin.service.index', compact('services'), $data);
    }

    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $products = DB::table('product')->join('product_relation','product_relation.product_id','=','product.product_id')->where('sku', 'LIKE', '%' . $query . '%')
                ->orWhere('product_title', 'LIKE', '%' . $query . '%')
                ->orderBy('product.product_id', 'desc')->paginate(10);
            return view('admin.product.pagination', compact('products'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {




        $data['main'] = 'Services';
        $data['active'] = 'Add New Service';
        $data['title'] = '  ';

        return view('admin.service.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Dhaka');
        $orginalpath = public_path() . '/uploads/service';
        $data['order_by'] = $request->order_by;
        $data['service_link'] = $request->service_link;
        $data['service_name'] = $request->service_name;
        $data['service_text'] = $request->service_text;
        $data['service_icon'] = $request->service_icon;
        $data['created_at']   = date('Y-m-d');
        $featured_image_orgianal = $request->file('service_image');
         if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->resize(560, 336, function ($constraint) {

            })->save($destinationPath . '/' . $featured_image);
            $data['service_image'] = $featured_image;
        }


        $product_id = DB::table('services')->insertGetId($data);


        if ($product_id) {
            return redirect('admin/service')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/service/create')
                ->with('error', 'No successfully.');
        }

    }



    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['service'] = DB::table('services')
            ->where('service_id', $id)->first();
        $data['main'] = 'Services';
        $data['active'] = 'Update Services';

        return view('admin.service.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_id)
    {


        date_default_timezone_set('Asia/Dhaka');
        $orginalpath = public_path() . '/uploads/service';

        $data['service_link'] = $request->service_link;
        $data['order_by'] = $request->order_by;
        $data['service_name'] = $request->service_name;
        $data['service_text'] = $request->service_text;
        $data['created_at']   = date('Y-m-d');
        $data['service_icon'] = $request->service_icon;

        $featured_image_orgianal = $request->file('service_image');
         if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->resize(560, 336, function ($constraint) {

            })->save($destinationPath . '/' . $featured_image);
            $data['service_image'] = $featured_image;
        }

       

        $service_id= DB::table('services')->where('service_id',$service_id)->update($data);


        if ($service_id) {
            return redirect('admin/service')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/service')
                ->with('error', 'No successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public  function date_update($product_id){
        $data['modified_time'] = date('Y-m-d H:i:s');

        DB::table('product')->where('product_id', $product_id)->update($data);
        if ($product_id) {
            return redirect('admin/products')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/product/create')
                ->with('error', 'No successfully.');
        }

    }
    public function destroy($id)
    {

        $result = DB::table('services')->where('service_id', $id)->delete();

        if ($result) {
            return redirect('admin/service')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/service')
                ->with('error', 'No successfully.');
        }

    }

    public function urlCheck(Request $request)
    {
        $product_name = $request->get('url');
        $result = DB::table('product')->where('product_name', $product_name)->first();
        if ($result) {
            echo 'This product exit';
        } else {
            echo '';
        }
    }

    public function foldercheck(Request $request)
    {
        //  $product_name = $request->get('url');
        $result = DB::table('product')->orderby('product_id', 'desc')->first();
        if ($result) {
            $product_id = $result->product_id;
            $product_id = $product_id + 1;
            echo $product_id;
        } else {
            echo '1';
        }
    }
}
