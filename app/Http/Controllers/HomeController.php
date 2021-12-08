<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  Cart;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {



    }

    public function index()
    {

        $data['services']=DB::table('services')
            ->select('service_text','service_name','service_link','service_icon')
            ->orderBy('order_by','asc')->paginate(4);

        $data['sliders']=DB::table('homeslider')
            ->select('homeslider_title','target_url','homeslider_picture','homeslider_text')
            ->where('status',1)->get();
         $data['fesured_scoler']='';
         $data['event_gelary']=DB::table('gelary')
             ->get();
        $data['teams']=DB::table('teams')
            ->orderBy('order_by','asc')->get();
         $data['events']=DB::table('events')
            ->get();
         $data['bookcorner']='';

        return view('website.home',$data);
    }

    public function contact(){
        $data['ggg']='';
        return view('website.contact',$data);
    }
    public function about_us(){
        $data['ggg']='';
        return view('website.about',$data);
    }

    function news_events()
    {
        $data['class']="home page-template page-template-pages page-template-home page-template-pageshome-php page page-id-5 wp-embed-responsive";

        $data['services']=DB::table('services')
            ->select('service_image','service_text','service_name','service_link','order_by','service_icon')
            ->orderBy('order_by','asc')->get();
        $data['news']=DB::table('news_event')
            ->orderBy('order_by','asc')->get();
        return view('website.news_events',$data);
    }
    function single_news_events($news_link)
    {
        $data['class']="home page-template page-template-pages page-template-home page-template-pageshome-php page page-id-5 wp-embed-responsive";
        $data['services']=DB::table('services')
            ->select('service_image','service_text','service_name','service_link','order_by','service_icon')
            ->orderBy('order_by','asc')->get();

        $data['news']=DB::table('news_event')
            ->where('news_link',$news_link)
            ->orderBy('order_by','asc')->first();


        return view('website.single_news_events',$data);
    }

    function services()
    {

        $data['services']=DB::table('services')
            ->select('service_image','service_text','service_name','service_link','order_by','service_icon')
            ->orderBy('order_by','asc')->get();
        return view('website.services',$data);
    }
    function page($page_link)
    {

        $data['page']=DB::table('page')->where('page_link',$page_link)->first();
        if(empty($data['page'])){
        return redirect('/');
        }
        return view('website.single_page',$data);
    }

    function singlea_service($service_name)
    {
        $data['class']="service-template-default single single-service postid-167 wp-embed-responsive";

        $data['services']=DB::table('services')->select('service_image','service_text','service_name','service_link','order_by','service_icon')->orderBy('order_by','asc')->get();

        $data['service_row']=DB::table('services')
            ->select('service_image','service_text','service_name','service_link','order_by','service_icon')
            ->where('service_link','=',$service_name)
            ->orderBy('order_by','asc')->first();

        return view('website.single_service',$data);
    }

    function contactSave(Request $request)
    {

        $row_data['name']=$request->name;
        $row_data['message']=$request->message;
        $row_data['email']=$request->email;
        $row_data['phone']=$request->phone;
        $row_data['created_time']=date("Y-m-d");
        $row_data['modified_time']=date("Y-m-d");
        $result= DB::table('inquiry')->insert($row_data);
        if($result){
           echo 'yes';
        } else {

        }
    }



    public function admission(){
        return view('website.admission');

    }


    public function admissionStore(Request $request){


     $data['name_bn']=$request->name_bn;
     $data['name_en']=$request->name_en;
     $data['birth_day']=$request->birth_day;
     $data['blood_group']=$request->blood_group;
     $data['present_address']=$request->present_address;
     $data['post_office']=$request->post_office;
     $data['thana']=$request->thana;
     $data['district']=$request->district;
     $data['parmanent_address']=$request->parmanent_address;
     $data['father_name']=$request->father_name;
     $data['fahter_education']=$request->fahter_education;
     $data['father_ocupation']=$request->father_ocupation;
     $data['nid']=$request->nid;
     $data['father_mobile']=$request->father_mobile;
     $data['mother_name']=$request->mother_name;
     $data['mother_ocupation']=$request->mother_ocupation;
     $data['mother_mobile']=$request->mother_mobile;
     $data['gardian_name']=$request->gardian_name;
     $data['gardian_relation']=$request->gardian_relation;
     $data['gardian_address']=$request->gardian_address;
     $data['gardian_mobile']=$request->gardian_mobile;
     $data['student_hall']=$request->student_hall;
     $data['madrasah_division']=$request->madrasah_division;
     $data['school_division']=$request->school_division;
     $data['student_picture']=$request->student_picture;
     $data['created_at']=date("Y-m-d");

         DB::table('admission')->insert($data);

    }


    public function programVideo(){

        //$play_list_row =  Youtube::getPlaylistById('PLUb--DPKJ7SR2OL-SorX9BM__5nBaZbdK');

       
        return view('website.program_video');

    }

    public function ajax_program_video(){

        //   $data['videoLists'] = Youtube::listChannelVideos('UCv_oQ-sRZoJdEX4K5fQ6q6w', 12);
         $apiKey = 'AIzaSyCp4SZRkiWxc5LfXap9MDqkCyej2OvSXRw';
        $channelId = 'UCGOCKHpVbdVKHJEismFMWqg';
        $resultsNumber = 1000;
        $requestUrl = 'https://www.googleapis.com/youtube/v3/search?key=' . $apiKey . '&channelId=' . $channelId . '&part=snippet,id&maxResults=' . $resultsNumber .'&order=date';

        $response = file_get_contents($requestUrl);
        $data['videoLists'] = json_decode( $response, TRUE );

        return view('website.ajax_program_video',$data);
    }





}
