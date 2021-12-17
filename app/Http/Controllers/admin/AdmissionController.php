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

class AdmissionController extends Controller
{


    public function __construct()
    {


        date_default_timezone_set('Asia/Dhaka');

    }

    public function index()
    {
        $data['main'] = 'Admission';
        $data['active'] = 'All Admission';
        $data['title'] = '  ';
        $admission = DB::table('admission')
            ->orderBy('admission.id', 'desc')->get();
        return view('admin.admission.index', compact('admission'), $data);
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




        $data['main'] = 'Admission ';
        $data['active'] = 'Add New Admission ';
        $data['title'] = '  ';

        return view('admin.Admission.create', $data);

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
        $orginalpath = public_path() . '/uploads/Admission';
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


        $product_id = DB::table('Admission')->insertGetId($data);


        if ($product_id) {
            return redirect('admin/Admission')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/Admission/create')
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
        $data['admission'] = DB::table('admission')
            ->where('id', $id)->first();
        $data['main'] = 'Admission';
        $data['active'] = 'View Admission';

        return view('admin.admission.show', $data);  
    }




    public function edit($id)
    {

        $data['Admission'] = DB::table('Admission')
            ->where('gelary_id', $id)->first();
        $data['main'] = 'Admission';
        $data['active'] = 'Update Admission';

        return view('admin.Admission.edit', $data);
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
        $orginalpath = public_path() . '/uploads/Admission';

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
        $service_id= DB::table('Admission')->where('gelary_id',$service_id)->update($data);


        if ($service_id) {
            return redirect('admin/Admission')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/Admission')
                ->with('error', 'No successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $result= DB::table('admission')
            ->where('id', $id)->update(['status'=>1]);


        if ($result) {
            return redirect('admin/admission')
                ->with('success', 'Admission successfully.');
        } else {
            return redirect('admin/admission')
                ->with('error', 'Admission No successfully.');
        }
    }

    public function destroy($id)
    {

        $result = DB::table('admission')->where('id', $id)->delete();

        if ($result) {
            return redirect('admin/admission')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/admission')
                ->with('error', 'No successfully.');
        }

    }


}
