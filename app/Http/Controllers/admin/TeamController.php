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

class TeamController extends Controller
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
        $data['main'] = 'Teams';
        $data['active'] = 'All Teams';
        $data['title'] = '  ';
        $teams = DB::table('teams')
            ->orderBy('teams.team_id', 'desc')->get();
        return view('admin.team.index', compact('teams'), $data);
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




        $data['main'] = 'Teams';
        $data['active'] = 'Add New Teams';
        $data['title'] = '';
        return view('admin.team.create', $data);

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
        $orginalpath = public_path() . '/uploads';
        $data['team_title'] = $request->team_title;
        $data['team_name'] = $request->team_name;
        $data['team_email'] = $request->team_email;
        $data['team_phone'] = $request->team_phone;
        $data['team_address'] = $request->team_address;
        $data['team_description'] = $request->team_description;
        $data['order_by'] = $request->order_by;
        $data['team_qualification'] = $request->team_qualification;
        $data['team_facebook'] = $request->team_facebook;
        $data['team_youtube'] = $request->team_youtube;
        $data['team_instagram'] = $request->team_instagram;
        $data['team_linkind'] = $request->team_linkind;
        $data['created_at']   = date('Y-m-d');
        $featured_image_orgianal = $request->file('team_picture');
         if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->resize(470, 502, function ($constraint) {

            })->save($destinationPath . '/' . $featured_image);
            $data['team_picture'] = $featured_image;
        }


        $product_id = DB::table('teams')->insertGetId($data);


        if ($product_id) {
            return redirect('admin/teams')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/teams/create')
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

        $data['team'] = DB::table('teams')
            ->where('team_id', $id)->first();
        $data['main'] = 'Teams';
        $data['active'] = 'Update Teams';

        return view('admin.team.edit', $data);
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
        $orginalpath = public_path() . '/uploads';
        $data['team_title'] = $request->team_title;
        $data['team_name'] = $request->team_name;
        $data['team_email'] = $request->team_email;
        $data['team_phone'] = $request->team_phone;
        $data['team_address'] = $request->team_address;
        $data['team_description'] = $request->team_description;
        $data['order_by'] = $request->order_by;
        $data['team_qualification'] = $request->team_qualification;
        $data['team_facebook'] = $request->team_facebook;
        $data['team_youtube'] = $request->team_youtube;
        $data['team_instagram'] = $request->team_instagram;
        $data['team_linkind'] = $request->team_linkind;
        $data['created_at']   = date('Y-m-d');
        $featured_image_orgianal = $request->file('team_picture');
        if ($featured_image_orgianal) {
            $featured_image = $featured_image_orgianal->getClientOriginalName();
            $destinationPath = $orginalpath;
            $resize_image = Image::make($featured_image_orgianal->getRealPath());
            $resize_image->resize(470, 502, function ($constraint) {

            })->save($destinationPath . '/' . $featured_image);
            $data['team_picture'] = $featured_image;
        }

        $service_id= DB::table('teams')->where('team_id',$service_id)->update($data);


        if ($service_id) {
            return redirect('admin/teams')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/teams')
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

        $result = DB::table('teams')->where('team_id', $id)->delete();

        if ($result) {
            return redirect('admin/teams')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/teams')
                ->with('error', 'No successfully.');
        }

    }

    
}
