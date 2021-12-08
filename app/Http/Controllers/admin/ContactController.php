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

class ContactController extends Controller
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



        $data['main'] = 'Inquiry';
        $data['active'] = 'All Inquiry';
        $data['title'] = '  ';
        $inquiry = DB::table('inquiry')
            ->orderBy('inquiry.inquiry_id', 'desc')->paginate(10);
        return view('admin.contact.index', compact('inquiry'), $data);
    }

    public function inquery_pagination(Request $request)
    {
        if ($request->ajax()) {


            $inquiry = DB::table('inquiry')
                ->orderBy('inquiry.inquiry_id', 'desc')->paginate(10);
            return view('admin.contact.pagination', compact('inquiry'));
        }

    }

    public function contact_index()
    {



        $data['main'] = 'Contacts';
        $data['active'] = 'All Contacts';
        $data['title'] = '  ';
        $inquiry = DB::table('contact')
            ->orderBy('contact.contact_id', 'desc')->paginate(10);
        return view('admin.contact.contact_index', compact('inquiry'), $data);
    }

    public function contact_pagination(Request $request)
    {
        if ($request->ajax()) {


            $inquiry = DB::table('contact')
                ->orderBy('contact.contact_id', 'desc')->paginate(10);
            return view('admin.contact.contact_pagination', compact('inquiry'));
        }

    }
    public function inquery_destroy($id)
    {

        $result = DB::table('inquiry')->where('inquiry_id', $id)->delete();

        if ($result) {
            return redirect('admin/inquery')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/inquery')
                ->with('error', 'No successfully.');
        }

    }

    public function contact_destroy($id)
    {

        $result = DB::table('contact')->where('contact_id', $id)->delete();

        if ($result) {
            return redirect('admin/contacts')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/contacts')
                ->with('error', 'No successfully.');
        }

    }
    
    public  function messageShow(Request $request){
        
        
         $inqury=$request->inquery;
         $data['status']=1;//=$request->inquery;

        DB::table('inquiry')->where('inquiry_id',$inqury)->update($data);
       $result= DB::table('inquiry')->where('inquiry_id',$inqury)->first();
        if($result){
            return response()->json(['message'=>$result->message]);
        }

        
    }
}
