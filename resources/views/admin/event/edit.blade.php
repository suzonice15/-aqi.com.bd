@extends('layouts.master')
@section('pageTitle')
    Update Event
@endsection
@section('mainContent')
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">


        <div class="col-sm-offset-0 col-md-12">


            <form  name="product" action="{{ url('admin/event/update') }}/{{ $event->event_id }}" class="form-horizontal"
                   method="post"
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
                                                   value="{{$event->event_name}}" autocomplete="off">
                                        </div>





                                        <div class="form-group ">
                                            <label for="product_name">Event Permalink <span class="required">*</span></label>
                                            <input required type="text" class="form-control the_name"
                                                   name="event_link" id="event_link"
                                                   value="{{$event->event_link}}" autocomplete="off">

                                        </div>

                                        <div class="form-group ">
                                            <label for="product_name">Event Location <span class="required">*</span></label>
                                            <input required type="text" class="form-control the_name"
                                                   name="event_location" id="event_location"
                                                   value="{{$event->event_location}}" autocomplete="off">

                                        </div>
                                        <div class="form-group ">
                                            <label for="product_name">Event Date <span class="required">*</span></label>
                                            <input required type="date" class="form-control the_name"
                                                   name="event_start_date" id="event_start_date"
                                                   value="{{$event->event_start_date}}" autocomplete="off">

                                        </div>
                                        <div class="form-group ">
                                            <label for="product_name">Event Start Time<span class="required">*</span></label>
                                            <input required type="time" class="form-control the_name"
                                                   name="event_start_time" id="event_start_time"
                                                   value="{{$event->event_start_time}}" autocomplete="off">

                                        </div>
                                        <div class="form-group ">
                                            <label for="product_name">Event End Time<span class="required">*</span></label>
                                            <input required type="time" class="form-control the_name"
                                                   name="event_end_time" id="event_end_time"
                                                   value="{{$event->event_end_time}}" autocomplete="off">
                                        </div>


                                        <div class="form-group featured-image">
                                            <label>Featured Image<span class="required">* Size(350*280)</span></label>
                                            <input   type="file" class="form-control" name="event_picture"/>

                                            <?php

                                            if($event->event_picture){

                                            ?>

                                            <img  width="200" src="{{ asset('/uploads') }}/event/{{ $event->event_picture }}">
                                            <?php } ?>

                                        </div>
                                        <div class="form-group ">
                                            <label for="product_name">Event Description <span class="required">*</span></label>

                <textarea   class="form-control ckeditor" rows="10" name="event_description"
                            id="event_description">{{$event->event_description}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="product_title">Order By<span
                                                        class="required">*</span></label>
                                            <input required type="text" class="form-control order_by"
                                                   name="order_by" id="order_by"
                                                   value="{{$event->order_by}}" autocomplete="off">
                                        </div>



                                    </div>


                                </div>


                            </div>



                        </div>


                        <div class="box-footer">

                            <button type="submit" class="btn btn-success pull-right">Event Update</button>
                        </div>
                    </div>




            </form>

        </div>
    </div>





@endsection


