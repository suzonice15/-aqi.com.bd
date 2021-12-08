@extends('layouts.master')
@section('pageTitle')
    Add New Event
@endsection
@section('mainContent')
    <style>
        .required {
            color: red;font-size: 16px;padding-top: 19px;
        }
    </style>
    <div class="box-body">


        <form action="{{ url('admin/event/store') }}" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            @csrf

            <div class="box-body">


                <div class="box box-primary" style="border: 2px solid #ddd;">
                    <div class="box-header" style="background-color: #bdbdbf;">
                        <h3 class="box-title">Basic Event Information</h3>
                    </div>
                    <div class="box-body" style="padding: 22px;">

                        <div class="row">
                            <div class="col-sm-12">

                        <div class="form-group">
                            <label for="product_title">Event Name<span
                                    class="required">*</span></label>
                            <input required type="text" class="form-control event_name"
                                   name="event_name" id="event_name"
                                   value="" autocomplete="off">
                        </div>





                        <div class="form-group ">
                            <label for="product_name">Event Permalink <span class="required">*</span></label>
                            <input required type="text" class="form-control the_name"
                                   name="event_link" id="event_link"
                                   value="" autocomplete="off">

                        </div>

                                <div class="form-group ">
                                    <label for="product_name">Event Location <span class="required">*</span></label>
                                    <input required type="text" class="form-control the_name"
                                           name="event_location" id="event_location"
                                           value="" autocomplete="off">

                                </div>
                                <div class="form-group ">
                                    <label for="product_name">Event Date <span class="required">*</span></label>
                                    <input required type="date" class="form-control the_name"
                                           name="event_start_date" id="event_start_date"
                                           value="" autocomplete="off">

                                </div>
                                <div class="form-group ">
                                    <label for="product_name">Event Start Time<span class="required">*</span></label>
                                    <input required type="time" class="form-control the_name"
                                           name="event_start_time" id="event_start_time"
                                           value="" autocomplete="off">

                                </div>
                                <div class="form-group ">
                                    <label for="product_name">Event End Time<span class="required">*</span></label>
                                    <input required type="time" class="form-control the_name"
                                           name="event_end_time" id="event_end_time"
                                           value="" autocomplete="off">
                                </div>


                                <div class="form-group featured-image">
                                    <label>Featured Image<span class="required">* Size(350*280)</span></label>
                                    <input  required type="file" class="form-control" name="event_picture"/>

                                </div>
                                <div class="form-group ">
                                    <label for="product_name">Event Description <span class="required">*</span></label>

                <textarea   class="form-control ckeditor" rows="10" name="event_description"
                            id="event_description"></textarea>
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

                    <button type="submit" class="btn btn-success pull-right">Event Save</button>
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


