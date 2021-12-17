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

class IncomeExpenseController extends Controller
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
        $data['main'] = 'Income & Expense';
        $data['active'] = 'Income & Expense';
        $data['title'] = '  ';
        $incomes = DB::table('income_expense')
            ->select('income_expense.*','category.name')
            ->join('category','category.id','income_expense.category_id')
            ->orderBy('income_expense.id', 'desc')->paginate(10);
        return view('admin.income.index', compact('incomes'), $data);
    }


    public function create()
    {




        $data['main'] = 'Income & Expense ';
        $data['active'] = 'Add New Income & Expense ';
        $data['title'] = '  ';

        return view('admin.income.create', $data);

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
        $data['category_id'] = $request->category_id;
        $data['amount'] = $request->amount;
        $data['note'] = $request->note;
        $data['created_at']   = date("Y-m-d",strtotime($request->created_at));
        $category_id = DB::table('income_expense')->insertGetId($data);
        if ($category_id) {

                $categoryData= DB::table('category')->where('id',$request->category_id)->first();
           // $before_amount=$categoryData->before_amount;
            $amount=$categoryData->amount;
           // if($request->status==1){
                $row_data['amount']=$amount+$request->amount;
                $row_data['before_amount']=$amount;


//            }else{
//                $row_data['amount']=$amount+$request->amount;
//                $row_data['before_amount']=$amount;
//            }

            DB::table('category')->where('id',$request->category_id)->update($row_data);
            return redirect('admin/income/expense')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/income/expense')
                ->with('error', 'No successfully.');
        }

    }




    public function edit($id)
    {

        $data['income_expense'] = DB::table('income_expense')
            ->where('id', $id)->first();
        $data['main'] = 'Income & Expense';
        $data['active'] = 'Update Income & Expense';

        return view('admin.income.edit', $data);
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


        $category_id= DB::table('income_expense')->where('id',$category_id)->update($data);


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


    public function getCategory (Request $request)
    {

        $status=$request->status;
        $categories = DB::table('category')->where('status', $status)->get();
        $html='<select name="category_id" id="category_id" class="form-control select2">
                            <option value=""> ------ Select Status -----  </option>';
        foreach($categories as $category) {

            $html .= ' <option value="' . $category->id . '">' . $category->name . '</option>';

        }
        $html .='</select>';
        echo $html;



    }


    public function profite(Request $request)
    {
        $data['main'] = 'Income & Expense Profit';
        $data['active'] = 'Income & Expense Profit';
        $data['title'] = '  ';

          if($request->start_date || $request->end_date){
              $start_date=date("Y-m-d",strtotime($request->start_date));
              $end_date=date("Y-m-d",strtotime($request->end_date));

              $incomes = DB::table('income_expense')->where('status',1)
                  ->where(function($query) use ($start_date,$end_date){
                      $query->whereBetween('created_at',array($start_date,$end_date));
                  })
                  ->sum('amount');
              $expenses = DB::table('income_expense')->where('status',0)
                  ->where(function($query) use ($start_date,$end_date){
                      $query->whereBetween('created_at',array($start_date,$end_date));
                  })->sum('amount');
          }else{
              $incomes = DB::table('income_expense')->where('status',1)->sum('amount');
              $expenses = DB::table('income_expense')->where('status',0)->sum('amount');

          }



        return view('admin.income.profite_index', compact('incomes','expenses'), $data);
    }

    public function report(Request $request)
    {
        $data['main'] = '  Report';
        $data['active'] = ' Report';
        $data['title'] = '  ';
        $category_id=0;
      

       $categories= DB::table('category')
           ->where('status',$request->status)
            ->orderBy('category.id', 'desc')->get();

        if($request->start_date &&  $request->end_date && $request->category_id){
            $start_date=date("Y-m-d",strtotime($request->start_date));
            $end_date=date("Y-m-d",strtotime($request->end_date));
            $reports = DB::table('income_expense')
                ->join('category','category.id','income_expense.category_id')
                ->where('income_expense.status',$request->status)
                ->where('category_id',$request->category_id)
                ->where(function($query) use ($start_date,$end_date){
                    $query->whereBetween('created_at',array($start_date,$end_date));
                })->get();


        } else   if($request->start_date &&  $request->end_date){
            $start_date=date("Y-m-d",strtotime($request->start_date));
            $end_date=date("Y-m-d",strtotime($request->end_date));
            $reports = DB::table('income_expense')
                ->join('category','category.id','income_expense.category_id')
                ->where('income_expense.status',$request->status)
                ->where(function($query) use ($start_date,$end_date){
                    $query->whereBetween('created_at',array($start_date,$end_date));
                })->get();


        } else   {
          $reports = DB::table('income_expense')
              ->join('category','category.id','income_expense.category_id')
              ->where('income_expense.status',$request->status)
              ->where('category_id',$request->category_id)
              ->get();

      }

        $status= $request->status;
        $category_id= $request->category_id;

        return view('admin.income.report', compact('reports','categories','status','category_id'), $data);
    }




    public function destroy($id)
    {

        $result = DB::table('income_expense')->where('id', $id)->delete();

        if ($result) {
            return redirect('admin/category')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/category')
                ->with('error', 'No successfully.');
        }

    }


}
