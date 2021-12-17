@extends('layouts.master')
@section('pageTitle')
    Income & Expense Profit Report
@endsection
@section('mainContent')
    <div class="box-body">
        <div class="row">
            <form action="{{url('/')}}/admin/income/profite" method="get">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="product_title"> Starting Date<span
                                class="required">*</span></label>
                    <input required type="text" class="form-control datepicker"
                           name="start_date" id="start_date"
                           value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="product_title">Ending Date<span
                                class="required">*</span></label>
                    <input required type="text" class="form-control datepicker"
                           name="end_date" id="end_date"
                           value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <button type="submit" name="filter" class="form-control btn btn-success" >Filter</button>

                </div>
            </div>
            </form>

         </div>


        <div class="col-md-12 col-12 col-lg-12">



            <button type="button"
                    class="btn btn-primary order_status status_active" onclick="location.href='{{url('/')}}/admin/report?status=1'" >Total Incomes <span
                        class="badge badge-light">{{$incomes}}</span></button>
            <button onclick="location.href='{{url('/')}}/admin/report?status=0'" type="button"
                    class="btn btn-primary order_status"> Total Expense <span class="badge badge-light">{{$expenses}}</span>
            </button>
            <button  type="button"
                    class="btn btn-primary order_status"> Profit <span class="badge badge-light">{{$incomes-$expenses}}</span></button>

        </div>
    </div>

    <br/>


    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

    </div>


@endsection

