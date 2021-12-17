<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin', 'admin\AdminController@login');
Route::get('/contact', 'HomeController@contact');
Route::get('/about-us', 'HomeController@about_us');
Route::post('/contact/save', 'HomeController@contactSave');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/admission', 'HomeController@admission');
Route::post('/admission', 'HomeController@admissionStore');
Route::get('/admission/success', 'HomeController@admissionSuccess');

Route::get('/program-video', 'HomeController@programVideo');
Route::get('/ajax-program-video', 'HomeController@ajax_program_video');

Route::post('/login_check', 'admin\AdminController@loginCheck');

Route::get('/dashboard', 'admin\DashboardController@index');

/****=============== admin section    =====================  ******/

Route::get('admin/users', 'admin\AdminController@index');
Route::get('admin/user/create', 'admin\AdminController@create');
Route::post('admin/user/store', 'admin\AdminController@store');
Route::post('admin/user/update/{id}', 'admin\AdminController@update');
Route::get('admin/user/{id}', 'admin\AdminController@edit');
Route::get('/admin/user/delete/{id}', 'admin\AdminController@delete');
Route::get('logout', 'admin\AdminController@logout');

/****=============== category section    =====================  ******/
Route::get('admin/categories', 'admin\CategoryController@index');
Route::post('category-urlcheck', 'admin\CategoryController@urlCheck');
Route::get('admin/category/create', 'admin\CategoryController@create');
Route::post('admin/category/store', 'admin\CategoryController@store');
Route::post('admin/category/update/{id}', 'admin\CategoryController@update');
Route::get('admin/category/{id}', 'admin\CategoryController@edit');
Route::get('/admin/category/delete/{id}', 'admin\CategoryController@delete');
Route::get('category/pagination/fetch_data', 'admin\CategoryController@fetch_data');


/****=============== admin page section    =====================  ******/
Route::get('admin/pages', 'admin\PageController@index');
Route::get('admin/page/create', 'admin\PageController@create');
Route::post('admin/page/store', 'admin\PageController@store');
Route::post('admin/page/update/{id}', 'admin\PageController@update');
Route::get('admin/page/{id}', 'admin\PageController@edit');
Route::get('/admin/page/delete/{id}', 'admin\PageController@delete');


/****=============== home page setting section    =====================  ******/
Route::get('admin/homepage/setting', 'admin\SettingController@homePageSetting');
Route::post('admin/homepage/setting', 'admin\SettingController@homePageSetting');

Route::get('admin/default/setting', 'admin\SettingController@defaultSetting');
Route::post('admin/default/setting', 'admin\SettingController@defaultSetting');
Route::get('admin/social/setting', 'admin\SettingController@socialSetting');
Route::post('admin/social/setting', 'admin\SettingController@socialSetting');



/****=============== admin contact section    =====================  ******/
Route::get('admin/inquery', 'admin\ContactController@index');
Route::post('/contact/message/show', 'admin\ContactController@messageShow');
Route::get('admin/inquery/pagination', 'admin\ContactController@inquery_pagination');
Route::get('admin/inquery/delete/{id}', 'admin\ContactController@inquery_destroy');




/****=============== service section    =====================  ******/
Route::get('admin/service', 'admin\ServiceController@index');
Route::get('admin/service/create', 'admin\ServiceController@create');
Route::post('admin/service/store', 'admin\ServiceController@store');
Route::post('admin/service/update/{id}', 'admin\ServiceController@update');
Route::get('admin/service/update/{id}', 'admin\ServiceController@date_update');
Route::get('/admin/service/{id}', 'admin\ServiceController@edit');
Route::get('/admin/service/delete/{id}', 'admin\ServiceController@destroy');




/****=============== Teams section    =====================  ******/
Route::get('admin/teams', 'admin\TeamController@index');
Route::get('admin/teams/create', 'admin\TeamController@create');
Route::post('admin/teams/store', 'admin\TeamController@store');
Route::post('admin/teams/update/{id}', 'admin\TeamController@update');
Route::get('admin/teams/update/{id}', 'admin\TeamController@date_update');
Route::get('/admin/teams/{id}', 'admin\TeamController@edit');
Route::get('/admin/teams/delete/{id}', 'admin\TeamController@destroy');





/****=============== event section    =====================  ******/
Route::get('admin/event', 'admin\EventController@index');
Route::get('admin/event/create', 'admin\EventController@create');
Route::post('admin/event/store', 'admin\EventController@store');
Route::post('admin/event/update/{id}', 'admin\EventController@update');
Route::get('admin/event/update/{id}', 'admin\EventController@date_update');
Route::get('/admin/event/{id}', 'admin\EventController@edit');
Route::get('/admin/event/delete/{id}', 'admin\EventController@destroy');



/****=============== event section    =====================  ******/
Route::get('admin/gelary', 'admin\GelaryController@index');
Route::get('admin/gelary/create', 'admin\GelaryController@create');
Route::post('admin/gelary/store', 'admin\GelaryController@store');
Route::post('admin/gelary/update/{id}', 'admin\GelaryController@update');
Route::get('admin/gelary/update/{id}', 'admin\GelaryController@date_update');
Route::get('/admin/gelary/{id}', 'admin\GelaryController@edit');
Route::get('/admin/gelary/delete/{id}', 'admin\GelaryController@destroy');





/****=============== income expense section    =====================  ******/
Route::get('admin/income/expense', 'admin\IncomeExpenseController@index');
Route::get('admin/income/expense/create', 'admin\IncomeExpenseController@create');
Route::post('admin/income/expense/store', 'admin\IncomeExpenseController@store');
Route::post('admin/income/expense/update/{id}', 'admin\IncomeExpenseController@update');
Route::get('admin/income/expense/update/{id}', 'admin\IncomeExpenseController@date_update');
Route::get('/admin/income/expense/{id}', 'admin\IncomeExpenseController@edit');
Route::get('/admin/income/expense/delete/{id}', 'admin\IncomeExpenseController@destroy');
Route::get('/admin/income/profite', 'admin\IncomeExpenseController@profite');
Route::get('/admin/report', 'admin\IncomeExpenseController@report');
Route::get('/getCategory', 'admin\IncomeExpenseController@getCategory');


/****=============== event section    =====================  ******/
Route::get('admin/category', 'admin\CategoryController@index');
Route::get('admin/category/create', 'admin\CategoryController@create');
Route::post('admin/category/store', 'admin\CategoryController@store');
Route::post('admin/category/update/{id}', 'admin\CategoryController@update');
Route::get('admin/category/update/{id}', 'admin\CategoryController@date_update');
Route::get('/admin/category/{id}', 'admin\CategoryController@edit');
Route::get('/admin/category/delete/{id}', 'admin\CategoryController@destroy');



/****=============== admission section    =====================  ******/

Route::get('admin/admission', 'admin\AdmissionController@index');
Route::get('/admin/admission/delete/{id}', 'admin\AdmissionController@destroy'); 
Route::get('/admin/admission/{id}', 'admin\AdmissionController@show'); 
Route::get('/admin/admission/active/{id}', 'admin\AdmissionController@active'); 



/****=============== media section    =====================  ******/
Route::get('admin/sliders', 'admin\SliderController@index');
Route::get('admin/slider/create', 'admin\SliderController@create');
Route::post('admin/slider/store', 'admin\SliderController@store');
Route::post('admin/slider/update/{id}', 'admin\SliderController@update');
Route::get('admin/slider/{id}', 'admin\SliderController@edit');
Route::get('/admin/slider/delete/{id}', 'admin\SliderController@destroy');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return redirect('dashboard');
});


/****=============== customer font section    =====================  ******/

Route::get('customer/login', 'CustomerController@login');
Route::get('customer/form', 'CustomerController@sign_up_form');
Route::get('customer/logout', 'CustomerController@logout');
Route::post('customer/login', 'CustomerController@login_check');
 Route::get('/{name}', 'HomeController@page');






