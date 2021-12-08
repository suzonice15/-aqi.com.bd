@extends('layouts.master')
@section('pageTitle')
    Add New Team Member
@endsection
@section('mainContent')
    <style>
        .required {
            color: red;
            font-size: 16px;
            padding-top: 19px;
        }
    </style>
    <div class="box-body">


        <form action="{{ url('admin/teams/store') }}" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            @csrf

            <div class="box-body">


                <div class="box box-primary" style="border: 2px solid #ddd;">
                    <div class="box-header" style="background-color: #bdbdbf;">
                        <h3 class="box-title">Basic Team Information</h3>
                    </div>
                    <div class="box-body" style="padding: 22px;">

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="product_title">Team Member Name<span
                                                class="required">*</span></label>
                                    <input required type="text" class="form-control service_name"
                                           name="team_title" id="team_title"
                                           value="" autocomplete="off">
                                </div>


                                <div class="form-group ">
                                    <label for="product_name"> Team Member Qualification<span class="required">*</span></label>
                                    <input type="text" class="form-control the_name"
                                           name="team_name" id="team_name"
                                           value="" autocomplete="off">

                                </div>

                                <div class="form-group">
                                    <label for="product_title">Facebook<span
                                                class="required">*</span></label>
                                    <input   type="text" class="form-control service_name"
                                           name="team_facebook" id="team_facebook"
                                           value="" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="product_title">Youtube<span
                                                class="required">*</span></label>
                                    <input   type="text" class="form-control service_name"
                                           name="team_youtube" id="team_youtube"
                                           value="" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="product_title">Instagram<span
                                                class="required">*</span></label>
                                    <input   type="text" class="form-control service_name"
                                           name="team_instagram" id="team_instagram"
                                           value="" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="product_title">Linkind<span
                                                class="required">*</span></label>
                                    <input   type="text" class="form-control service_name"
                                           name="team_linkind" id="team_linkind"
                                           value="" autocomplete="off">
                                </div>

                                <div class="form-group featured-image">
                                    <label>Featured Image<span class="required">* Size(700*700)</span></label>
                                    <input required type="file" class="form-control" name="team_picture"/>

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

                    <button type="submit" class="btn btn-success pull-right">Team Save</button>
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


