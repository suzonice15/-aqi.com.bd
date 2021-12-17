@extends('layouts.master')
@section('pageTitle')
   @if($status==1) Income @else Expense  @endif Report
@endsection
@section('mainContent')
    <div class="box-body">
        <div class="row">

                <form action="{{url('/')}}/admin/report" method="get">

                    <input required type="hidden" class="form-control"
                           name="status"
                           value="{{$status}}" autocomplete="off">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="product_title">  Category Name<span
                                        class="required"></span></label>

                            <select name="category_id" id="category_id" class="form-control select2">
                                <option value="">------Select----- </option>
                                @foreach($categories as $category)
                                <option @if($category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="product_title"> Starting Date<span
                                        class="required">*</span></label>
                            <input required type="text" class="form-control datepicker"
                                   name="start_date" id="start_date"
                                   value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-3">
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
        <br/>
        <div class="table-responsive">

            <table  class="table table-bordered table-striped   ">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th style="text-align: center">Status</th>
                    <th style="text-align: right">Amount</th>
                    <th style="text-align: right">Note</th>
                    <th style="text-align: center">date</th>
                </tr>
                </thead>
                <tbody>
                @include('admin.income.report_pagination')
                </tbody>

            </table>

        </div>

        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

    </div>

@endsection

