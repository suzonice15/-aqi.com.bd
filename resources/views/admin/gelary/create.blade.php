@extends('layouts.master')
@section('pageTitle')
    Add New Gelary
@endsection
@section('mainContent')
    <style>
        .required {
            color: red;font-size: 16px;padding-top: 19px;
        }
    </style>
    <div class="box-body">


        <form action="{{ url('admin/gelary/store') }}" class="form-horizontal" method="post"
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
                                           value="" autocomplete="off">
                                </div>
                                <div class="form-group featured-image">
                                    <label>Featured Image<span class="required"></span></label>
                                    <input  required type="file" class="form-control" name="gelary_picture"/>

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

                    <button type="submit" class="btn btn-success pull-right">Gelary Save</button>
                </div>
            </div>


        </form>

    </div>


    <script>
        $(document).ready(function () {
            $("#event_name").on('input click', function () {
                var text = $("#event_name").val();
                var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $("#event_link").val(word);
            });
        });
    </script>




@endsection


