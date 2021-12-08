@extends('layouts.master')
@section('pageTitle')
    Update Service
@endsection
@section('mainContent')
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">
        @if (count($errors) > 0)
            <div class=" alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <ul>

                    @foreach ($errors->all() as $error)

                        <li style="list-style: none">{{ $error }}</li>

                    @endforeach

                </ul>
            </div>
        @endif

        <div class="col-sm-offset-0 col-md-12">


            <form  name="product" action="{{ url('admin/service/update') }}/{{ $service->service_id }}" class="form-horizontal"
                   method="post"
                   enctype="multipart/form-data">
                @csrf




                    <div class="box-body">


                        <div class="box box-primary" style="border: 2px solid #ddd;">
                            <div class="box-header" style="background-color: #bdbdbf;">
                                <h3 class="box-title">Basic Service Information</h3>
                            </div>
                            <div class="box-body" style="padding: 22px;">

                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="product_title">Service Name<span
                                                        class="required">*</span></label>
                                            <input required type="text" class="form-control service_name"
                                                   name="service_name" id="service_name"
                                                   value="{{$service->service_name}}" autocomplete="off">
                                        </div>

                                        <div class="form-group ">
                                            <label for="product_name"> Service Permalink<span class="required">*</span></label>
                                            <input required type="text" class="form-control the_name"
                                                   name="service_link" id="service_link"
                                                   value="{{$service->service_link}}" autocomplete="off">

                                        </div>

                                        <div class="form-group featured-image">
                                            <label>Icon <span class="required"></span></label>
                                            <input    type="text" class="form-control" value="{{$service->service_icon}}" name="service_icon"/>
                                            <br>


                                        </div>

                                        <div class="form-group featured-image">
                                            <label>Featured Image<span class="required">* Size(700*700)</span></label>
                                            <input    type="file" class="form-control" name="service_image"/>
                                            <br>
                                            <?php

                                            if($service->service_image){
                                            $image=asset('uploads/service').'/'.$service->service_image;
                                            ?>
                                            <img    width="50" src="{{$image}}">

                                            <?php } ?>

                                        </div>
                                        <div class="form-group ">
                                            <label for="product_name"> Description <span class="required">*</span></label>

                                <textarea   class="form-control ckeditor" rows="10" name="service_text"
                            id="service_text">{{$service->service_text}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="product_title">Order By<span
                                                        class="required"> *</span></label>
                                            <input required type="text" class="form-control order_by"
                                                   name="order_by" id="order_by"
                                                   value="{{$service->order_by}}" autocomplete="off">
                                        </div>



                                    </div>


                                </div>


                            </div>



                        </div>


                        <div class="box-footer">

                            <button type="submit" class="btn btn-success pull-right">Service Update</button>
                        </div>
                    </div>




            </form>

        </div>
    </div>





@endsection


