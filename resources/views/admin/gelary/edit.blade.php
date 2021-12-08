@extends('layouts.master')
@section('pageTitle')
    Update Gelary
@endsection
@section('mainContent')
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">


        <div class="col-sm-offset-0 col-md-12">


            <form  name="product" action="{{ url('admin/gelary/update') }}/{{ $gelary->gelary_id }}" class="form-horizontal"
                   method="post"
                   enctype="multipart/form-data">
                @csrf




                    <div class="box-body">


                        <div class="box box-primary" style="border: 2px solid #ddd;">
                            <div class="box-header" style="background-color: #bdbdbf;">
                                <h3 class="box-title">Basic Gelary Information</h3>
                            </div>
                            <div class="box-body" style="padding: 22px;">

                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="product_title">Gelary Name<span
                                                        class="required">*</span></label>
                                            <input required type="text" class="form-control event_name"
                                                   name="gelary_name" id="gelary_name"
                                                   value="{{$gelary->gelary_name}}" autocomplete="off">
                                        </div>
                                        <div class="form-group featured-image">
                                            <label>Featured Image<span class="required"></span></label>
                                            <input   type="file" class="form-control" name="gelary_picture"/>

                                            <?php

                                            if($gelary->gelary_picture){

                                            ?>

                                            <img  width="200" src="{{ asset('/uploads') }}/gelary/{{ $gelary->gelary_picture }}">
                                            <?php } ?>

                                        </div>

                                        <div class="form-group">
                                            <label for="product_title">Order By<span
                                                        class="required">*</span></label>
                                            <input required type="text" class="form-control order_by"
                                                   name="order_by" id="order_by"
                                                   value="{{$gelary->order_by}}" autocomplete="off">
                                        </div>



                                    </div>


                                </div>

                            </div>



                        </div>


                        <div class="box-footer">

                            <button type="submit" class="btn btn-success pull-right">Gelary Update</button>
                        </div>
                    </div>




            </form>

        </div>
    </div>





@endsection


