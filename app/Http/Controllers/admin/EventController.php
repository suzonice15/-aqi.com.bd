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

class EventController extends Controller
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
        $data['main'] = 'Events';
        $data['active'] = 'All Events';
        $data['title'] = '  ';
        $events = DB::table('events')
            ->orderBy('events.event_id', 'desc')->get();
        return view('admin.event.index', compact('events'), $data);
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
        



        $data['main'] = 'Events';
        $data['active'] = 'Add New Service';
        $data['title'] = '  ';

        return view('admin.event.create', $data);

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
        $orginalpath = public_path() . '/uploads/event';
        $data['order_by'] = $request->order_by;
        $data['event_name'] = $request->event_name;
        $data['event_link'] = $request->event_link;
        $data['event_location'] = $request->event_location;
        $data['event_description'] = $request->event_description;
        $data['event_start_date'] = date('Y-m-d',strtotime($request->event_start_date));
        $data['event_start_time'] = date('H:i',strtotime($request->event_start_time));
        $data['event_end_time'] = date('H:i',strtotime($request->event_end_time));
        $data['created_at']   = date('Y-m-d');
        $featured_image_orgianal = $request->file('event_picture');
         if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->save($destinationPath . '/' . $featured_image);
            $data['event_picture'] = $featured_image;
        }


        $product_id = DB::table('events')->insertGetId($data);


        if ($product_id) {
            return redirect('admin/event')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/event/create')
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

        $data['event'] = DB::table('events')
            ->where('event_id', $id)->first();
        $data['main'] = 'Events';
        $data['active'] = 'Update Events';

        return view('admin.event.edit', $data);
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
        $orginalpath = public_path() . '/uploads/event';
        $data['order_by'] = $request->order_by;
        $data['event_name'] = $request->event_name;
        $data['event_link'] = $request->event_link;
        $data['event_location'] = $request->event_location;
        $data['event_description'] = $request->event_description;
        $data['event_start_date'] = date('Y-m-d',strtotime($request->event_start_date));
        $data['event_start_time'] = date('H:i',strtotime($request->event_start_time));
        $data['event_end_time'] = date('H:i',strtotime($request->event_end_time));
        $data['created_at']   = date('Y-m-d');
        $featured_image_orgianal = $request->file('event_picture');
         if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->resize(560, 336, function ($constraint) {

            })->save($destinationPath . '/' . $featured_image);
            $data['event_picture'] = $featured_image;
        }

       

        $service_id= DB::table('events')->where('event_id',$service_id)->update($data);


        if ($service_id) {
            return redirect('admin/event')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/event')
                ->with('error', 'No successfully.');
        }

    }
 
    public function destroy($id)
    {

        $result = DB::table('events')->where('event_id', $id)->delete();

        if ($result) {
            return redirect('admin/event')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/event')
                ->with('error', 'No successfully.');
        }

    }

     
}
