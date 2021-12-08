@extends('layouts.master')
@section('pageTitle')
    Update  Team Member
@endsection
@section('mainContent')
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">

        <div class="col-sm-offset-0 col-md-12">


            <form  name="product" action="{{ url('admin/teams/update') }}/{{ $team->team_id }}" class="form-horizontal"
                   method="post"
                   enctype="multipart/form-data">
                @csrf




                    <div class="box-body">


                        <div class="box box-primary" style="border: 2px solid #ddd;">
                            <div class="box-header" style="background-color: #bdbdbf;">
                                <h3 class="box-title">Basic Team Member Information</h3>
                            </div>
                            <div class="box-body" style="padding: 22px;">

                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="product_title">Team Member Name<span
                                                        class="required">*</span></label>
                                            <input required type="text" class="form-control service_name"
                                                   name="team_title" id="team_title"
                                                   value="{{ $team->team_title }}" autocomplete="off">
                                        </div>


                                        <div class="form-group ">
                                            <label for="product_name"> Team Member Qualification<span class="required">*</span></label>
                                            <input type="text" class="form-control the_name"
                                                   name="team_name" id="team_name"
                                                   value="{{ $team->team_name }}" autocomplete="off">

                                        </div>

                                        <div class="form-group">
                                            <label for="product_title">Facebook<span
                                                        class="required">*</span></label>
                                            <input   type="text" class="form-control service_name"
                                                     name="team_facebook" id="team_facebook"
                                                     value="{{ $team->team_facebook }}" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label for="product_title">Youtube<span
                                                        class="required">*</span></label>
                                            <input   type="text" class="form-control service_name"
                                                     name="team_youtube" id="team_youtube"
                                                     value="{{ $team->team_youtube }}" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label for="product_title">Instagram<span
                                                        class="required">*</span></label>
                                            <input   type="text" class="form-control service_name"
                                                     name="team_instagram" id="team_instagram"
                                                     value="{{ $team->team_instagram }}" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label for="product_title">Linkind<span
                                                        class="required">*</span></label>
                                            <input   type="text" class="form-control service_name"
                                                     name="team_linkind" id="team_linkind"
                                                     value="{{ $team->team_linkind }}" autocomplete="off">
                                        </div>

                                        <div class="form-group featured-image">
                                            <label>Featured Image<span class="required">* Size(700*700)</span></label>
                                            <input  type="file" class="form-control" name="team_picture"/>


                                            <?php

                                            if($team->team_picture){
                                            ?>
                                            <img  width="50" src="{{ asset('/uploads') }}/{{ $team->team_picture }}">

                                            <?php } ?>

                                        </div>


                                        <div class="form-group">
                                            <label for="product_title">Order By<span
                                                        class="required">*</span></label>
                                            <input required type="text" class="form-control order_by"
                                                   name="order_by" id="order_by"
                                                   value="{{ $team->order_by }}" autocomplete="off">
                                        </div>


                                    </div>


                                </div>


                            </div>



                        </div>


                        <div class="box-footer">

                            <button type="submit" class="btn btn-success pull-right">Team Update</button>
                        </div>
                    </div>




            </form>

        </div>
    </div>





@endsection


