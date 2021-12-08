<?php

function get_option($key)
{
    $result =DB::table('deafult_seating')->select($key)->where('default_setting_id', 1)->first();
    if ($result) {
        return $result;
    }
}


function get_social($key)
{
    $result =DB::table('social_setting')->select($key)->where('social_id', 1)->first();
    if ($result) {
        return $result;
    }
}


function get_category_info($category_id)
{
    $result=DB::table('category')->select('category_title','category_name')->where('category_id',$category_id)->first();

    if($result){
        return $result;

    }
}

function get_single_page($page_link)
{
    $result=DB::table('page')->where('page_link',$page_link)->first();

    if($result){
        return $result;

    }
}

function read_more($data,$limit){
    return $new_data= substr($data,0,$limit).'.....';
}


?>
