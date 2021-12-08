@extends('layouts.master')
@section('pageTitle')
    Update Default Website Information
@endsection
@section('mainContent')
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">


        <div class="col-sm-offset-0 col-md-12">
            <form  name="category" action="{{ url('admin/default/setting')  }}" class="form-horizontal"
                  method="post"
                  enctype="multipart/form-data">
                @csrf


                <div class="box" style="border: 2px solid #ddd;">
                    <div class="box-header with-border" style="background-color: green;color:white;">
                        <h3 class="box-title">Default Website  Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding: 28px;">
                        <div class="form-group ">
                            <label for="site_title">Site Title</label>
                            <input type="text" class="form-control" name="site_title" id="site_title"
                                   value="{{$setting_row->site_title}}">
                        </div>

                        <div class="form-group ">
                            <label for="site_title">Header Title</label>
                            <input type="text" class="form-control" name="header_name" id="header_name"
                                   value="{{$setting_row->header_name}}">
                        </div>




                        <div class="form-group">
                            <label>logo size(1300 * 400)</label>

                           <img width="50" src="{{url('/')}}/uploads/{{$setting_row->logo}}">
                            <input type="file" class="form-control" name="logo">

                        </div>


                        <div class="form-group">
                            <label>Icon size(1300 * 400)</label>

                            <img width="50" src="{{url('/')}}/uploads/{{$setting_row->icon}}">
                            <input type="file" class="form-control" name="icon">

                        </div>

                        <div class="form-group ">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                   value="{{$setting_row->phone}}">
                        </div>


                        <div class="form-group ">
                            <label for="phone">Email</label>
                            <input type="text" class="form-control" name="email" id="phone"
                                   value="{{$setting_row->email}}">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Contact Video </label>
                            <input type="text" class="form-control" name="youtube_video" id="phone"
                                   value="{{$setting_row->youtube_video}}">
                        </div>


                        <div  class="form-group ">
                            <label for="footer">Address</label>
                            <textarea class="form-control" rows="2"
                                      name="address">{{$setting_row->address}}</textarea>
                        </div>

                        <div  class="form-group ">
                            <label for="footer">Bangla Address</label>
                            <textarea class="form-control" rows="2"
                                      name="bangla_address">{{$setting_row->bangla_address}}</textarea>
                        </div>
                        <div  class="form-group ">
                            <label for="footer">Google Map </label>
                            <textarea class="form-control" rows="2"
                                      name="google_map">{{$setting_row->google_map}}</textarea>
                        </div>

                        <div  class="form-group ">
                            <label for="footer">Mobile</label>

                            <input type="text" class="form-control" name="mobile" id="phone"
                                   value="{{$setting_row->mobile}}">
                        </div>



                    </div>
                </div>




                <div class="box-footer">
                    <input type="submit" class="btn btn-success pull-left" value="Update">

                </div>
            </form>


            </form>
        </div>
    </div>





@endsection


