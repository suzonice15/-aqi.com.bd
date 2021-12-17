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

class CategoryController extends Controller
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
        $data['main'] = 'Category';
        $data['active'] = 'All Category';
        $data['title'] = '  ';
        $categories = DB::table('category')
            ->orderBy('category.id', 'desc')->get();
        return view('admin.category.index', compact('categories'), $data);
    }

    
    public function create()
    {




        $data['main'] = 'Category ';
        $data['active'] = 'Add New Category ';
        $data['title'] = '  ';

        return view('admin.category.create', $data);

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

        $data['status'] = $request->status;
        $data['name'] = $request->name;
        $data['amount'] = 0;
        $data['before_amount'] = 0;
        $data['created']   = date('Y-m-d');

        $category_id = DB::table('category')->insertGetId($data);
        if ($category_id) {
            return redirect('admin/category')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/category/create')
                ->with('error', 'No successfully.');
        }

    }



     
    public function edit($id)
    {

        $data['category'] = DB::table('category')
            ->where('id', $id)->first();
        $data['main'] = 'Category';
        $data['active'] = 'Update Category';

        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {


        date_default_timezone_set('Asia/Dhaka');
        $orginalpath = public_path() . '/uploads/gelary';

        $data['status'] = $request->status;
        $data['name'] = $request->name;

        
        $category_id= DB::table('category')->where('id',$category_id)->update($data);


        if ($category_id) {
            return redirect('admin/category')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/category')
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

        $result = DB::table('category')->where('id', $id)->delete();

        if ($result) {
            return redirect('admin/category')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/category')
                ->with('error', 'No successfully.');
        }

    }


}
