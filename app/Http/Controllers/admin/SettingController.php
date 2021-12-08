<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use  Session;
use Image;
use AdminHelper;
use URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homePageSetting(Request $request)
    {


//unset($request->_token);
        $all_home_page_data = $request->all();
        if ($all_home_page_data) {
            Arr::forget($all_home_page_data, '_token');
            foreach ($all_home_page_data as $key => $val) {
                $data['option_name'] = $key;
                $data['option_value'] = $val;


                $single_result = DB::table('options')->select('option_name')->where('option_name', $key)->get();

                if (count($single_result) > 0) {
                    DB::table('options')->where('option_name', $key)->update($data);


                } else {
                    DB::table('options')->insert($data);


                }
            }
        }
        $data['main'] = 'Setting';
        $data['active'] = 'Update Setting';
        $data['title'] = '  ';
        return view('admin.setting.home_page_setting', $data);

    }

//    public function defaultSetting(Request $request)
//    {
//        $user_id = AdminHelper::Admin_user_autherntication();
//        $url = URL::current();
//
//        if ($user_id < 1) {
//            //  return redirect('admin');
//            Redirect::to('admin')->with('redirect', $url)->send();
//
//        }
//
//
////unset($request->_token);
//        $all_home_page_data = $request->all();
//        if ($all_home_page_data) {
//            Arr::forget($all_home_page_data, '_token');
//            foreach ($all_home_page_data as $key => $val) {
//                $data['option_name'] = $key;
//                $data['option_value'] = $val;
//
//
//                $single_result = DB::table('options')->select('option_name')->where('option_name', $key)->get();
//
//                if (count($single_result) > 0) {
//                    DB::table('options')->where('option_name', $key)->update($data);
//
//
//                } else {
//                    DB::table('options')->insert($data);
//
//                }
//            }
//        }
//        $data['main'] = 'Setting';
//        $data['active'] = 'Update Setting';
//        $data['title'] = '  ';
//        return view('admin.setting.deafualt_setting', $data);
//
//    }

    public function defaultSetting(Request $request)
    {

        $setting_row = DB::table('deafult_seating')->where('default_setting_id', 1)->first();

        $method = $request->method();


        if ($request->isMethod('post')) {
            $row_data['phone'] = $request->phone;
            $row_data['site_title'] = $request->site_title;
            $row_data['address'] = $request->address;
            $row_data['email'] = $request->email;
            $row_data['phone'] = $request->phone;
            $row_data['header_phone'] = $request->header_phone;
            $row_data['header_name'] = $request->header_name;
            $row_data['mobile'] = $request->mobile;
            $row_data['bangla_address'] = $request->bangla_address;
            $row_data['google_map'] = $request->google_map;
            $row_data['youtube_video'] = $request->youtube_video;

            $image = $request->file('logo');
            if ($image) {

                $old_logo = $setting_row->logo;
                if ($old_logo) {
                    $main_image = public_path() . '/uploads/' . $old_logo;
                    if (file_exists($main_image)) {
                        @unlink($main_image);
                    }

                }

                $image_name = date("d-m-Y") . 'logo' . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/');
                $resize_image = Image::make($image->getRealPath());
                $resize_image->save($destinationPath . '/' . $image_name);
                $row_data['logo'] = $image_name;
            }

            $icon = $request->file('icon');
            if ($icon) {

                $old_logo = $setting_row->icon;
                if ($old_logo) {
                    $main_image = public_path() . '/uploads/' . $old_logo;

                    if (file_exists($main_image)) {

                        @unlink($main_image);

                    }

                }

                $icon_image_name = date("d-m-Y") . '.' . $icon->getClientOriginalExtension();

                $destinationPath = public_path('/uploads/');

                $resize_image = Image::make($icon->getRealPath());

                $resize_image->save($destinationPath . '/' . $icon_image_name);


                $row_data['icon'] = $icon_image_name;
            }

            DB::table('deafult_seating')->where('default_setting_id', 1)->update($row_data);
        }


        $data['setting_row'] = DB::table('deafult_seating')->where('default_setting_id', 1)->first();


      // print_r($setting_row);exit();
        $data['main'] = 'Setting';

        $data['active'] = 'Update Setting';
        $data['title'] = '  ';
        return view('admin.setting.deafualt_setting', $data);

    }


    public function socialSetting(Request $request)
    {

       
        $method = $request->method();


        if ($request->isMethod('post')) {
            $row_data['facebook'] = $request->facebook;
            $row_data['youtube'] = $request->youtube;
            $row_data['twitter'] = $request->twitter;
            $row_data['instagram'] = $request->instagram;
            $row_data['linked'] = $request->linked;

            DB::table('social_setting')->where('social_id', 1)->update($row_data);
        }
        $setting_row = DB::table('social_setting')->where('social_id', 1)->first();
        $data['main'] = 'Setting';
        $data['setting_row'] =$setting_row;
        $data['active'] = 'Update Social Setting';
        $data['title'] = '  ';
        return view('admin.setting.social_media_setting', $data);

    }



}
