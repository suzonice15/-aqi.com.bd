@extends('layouts.master')
@section('pageTitle')
    Add New Service
@endsection
@section('mainContent')
    <style>
        .required {
            color: red;font-size: 16px;padding-top: 19px;
        }
    </style>
    <div class="box-body">


        <form action="{{ url('admin/service/store') }}" class="form-horizontal" method="post"
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
                                   value="" autocomplete="off">
                        </div>





                        <div class="form-group ">
                            <label for="product_name"> Service Permalink<span class="required">*</span></label>
                            <input required type="text" class="form-control the_name"
                                   name="service_link" id="service_link"
                                   value="" autocomplete="off">

                        </div>
                                <div class="form-group featured-image">
                                    <label>Icon <span class="required"></span></label>
                                    <input  required type="text" class="form-control" name="service_icon"/>

                                </div>

                                <div class="form-group featured-image">
                                    <label>Featured Image<span class="required">* Size(700*700)</span></label>
                                    <input  required type="file" class="form-control" name="service_image"/>

                                </div>
                                <div class="form-group ">
                                    <label for="product_name"> Description <span class="required">*</span></label>

                <textarea   class="form-control ckeditor" rows="10" name="service_text"
                            id="service_text"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="product_title">Order By<span
                                                class="required">*</span></label>
                                    <input required type="text" class="form-control order_by"
                                           name="order_by" id="order_by"
                                           value="" autocomplete="off">
                                </div>



                    </div>


                        </div>


                    </div>



                </div>


   <div class="box-footer">

                    <button type="submit" class="btn btn-success pull-right">Service Save</button>
                </div>
            </div>


        </form>

    </div>


    <script>
        $(document).ready(function () {
            $("#service_name").on('input click', function () {
                var text = $("#service_name").val();


                var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $("#service_link").val(word);


            });


        });
    </script>




@endsection


