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

class GelaryController extends Controller
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
        $data['main'] = 'Gelary';
        $data['active'] = 'All Gelary';
        $data['title'] = '  ';
        $gelarys = DB::table('gelary')
            ->orderBy('gelary.gelary_id', 'desc')->get();
        return view('admin.gelary.index', compact('gelarys'), $data);
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
        



        $data['main'] = 'Gelary ';
        $data['active'] = 'Add New Gelary ';
        $data['title'] = '  ';

        return view('admin.gelary.create', $data);

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
        $orginalpath = public_path() . '/uploads/gelary';
               $data['order_by'] = $request->order_by;
        $data['gelary_name'] = $request->gelary_name;

        $data['create_at']   = date('Y-m-d');
        $featured_image_orgianal = $request->file('gelary_picture');
         if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->save($destinationPath . '/' . $featured_image);
            $data['gelary_picture'] = $featured_image;
        }


        $product_id = DB::table('gelary')->insertGetId($data);


        if ($product_id) {
            return redirect('admin/gelary')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/gelary/create')
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

        $data['gelary'] = DB::table('gelary')
            ->where('gelary_id', $id)->first();
        $data['main'] = 'Gelary';
        $data['active'] = 'Update Gelary';

        return view('admin.gelary.edit', $data);
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
        $orginalpath = public_path() . '/uploads/gelary';

        $data['order_by'] = $request->order_by;
        $data['gelary_name'] = $request->gelary_name;

        $data['create_at']   = date('Y-m-d');
        $featured_image_orgianal = $request->file('gelary_picture');
         if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->resize(560, 336, function ($constraint) {

            })->save($destinationPath . '/' . $featured_image);
            $data['gelary_picture'] = $featured_image;
        }
        $service_id= DB::table('gelary')->where('gelary_id',$service_id)->update($data);


        if ($service_id) {
            return redirect('admin/gelary')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/gelary')
                ->with('error', 'No successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

     
    public function destroy($id)
    {

        $result = DB::table('gelary')->where('gelary_id', $id)->delete();

        if ($result) {
            return redirect('admin/gelary')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/gelary')
                ->with('error', 'No successfully.');
        }

    }

     
}
