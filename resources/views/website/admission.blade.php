@extends('website.master')
@section('mainContent')

    <section>
        <div class="gap" >

            <div class="container">
                <form action="/admission" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-6 col-12 col-xl-8">
                            <div class="form-group">
                                <label for="name_bn">Name(Bangla)</label>
                                <input type="text" required class="form-control" id="name_bn" name="name_bn"
                                       placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="name_en">Name(English)</label>
                                <input type="text" required class="form-control" id="name_en" name="name_en"
                                       placeholder="Enter Name">
                            </div>
                        </div>


                        <div class="col-lg-6 col-12 col-xl-4">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Birth Day</label>
                                <input type="date" required class="form-control" name="birth_day" id="birth_day"
                                        placeholder="Enter Birth day">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blood group</label>
                                <select name="blood_group" class="form-control">
                                    <option>---Select---</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="AB">AB</option>
                                </select>

                            </div>

                        </div>

                        <div class="col-lg-6 col-12 col-xl-4">
                            <div class="form-group">
                                <label for="name_bn">Present Address</label>
                                <input required  type="text" class="form-control" id="present_address" name="present_address" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Post Office</label>
                                <input required type="text" class="form-control" id="post_office" name="post_office" placeholder="Enter Post Office">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Thana</label>
                                <input type="text" class="form-control" id="thana" name="thana" placeholder="Enter Thana Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-2">
                            <div class="form-group">
                                <label for="name_bn">District</label>
                                <input  required type="text" class="form-control" id="district" name="district" placeholder="Enter District">
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 col-xl-12">
                            <div class="form-group">
                                <label for="name_bn">Parmanent Address</label>
                                <input type="text" class="form-control" id="parmanent_address" name="parmanent_address" placeholder="Enter Parmanent Address">
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">Father Name</label>
                                <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter Father Name">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Education</label>
                                <input type="text" class="form-control" id="fahter_education" name="fahter_education" placeholder="Enter Education">
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Ocupation</label>
                                <input type="text" class="form-control" id="father_ocupation" name="father_ocupation" placeholder="Enter Ocupation">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">NID</label>
                                <input required type="text" class="form-control" id="nid" name="nid" placeholder="Enter National ID">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">Mobile</label>
                                <input type="text" class="form-control" id="father_mobile" name="father_mobile" placeholder="Enter Mobile">
                            </div>
                        </div>


                        <div class="col-lg-4 col-4 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">Mother</label>
                                <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Ocupation</label>
                                <input type="text" class="form-control" id="mother_ocupation" name="mother_ocupation" placeholder="Enter Ocupation">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Mobile</label>
                                <input type="text" class="form-control" id="mother_mobile" name="mother_mobile" placeholder="Enter Mobile Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-8">
                            <div class="form-group">
                                <label for="name_bn">Gardian Name</label>
                                <input type="text" class="form-control" id="gardian_name" name="gardian_name" placeholder="Enter Gardian Name">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-4">
                            <div class="form-group">
                                <label for="name_bn">Relation</label>
                                <input type="text" class="form-control" id="gardian_relation" name="gardian_relation" placeholder="Enter Relation">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-8">
                            <div class="form-group">
                                <label for="name_bn">Address  </label>
                                <input type="text" class="form-control" id="gardian_address" name="gardian_address" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-4">
                            <div class="form-group">
                                <label for="name_bn">Mobile</label>
                                <input type="text" class="form-control" id="gardian_mobile" name="gardian_mobile" placeholder="Enter Mobile">
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 col-xl-12">

                            <div class="form-check-inline">
                                <label for="name_bn">Where  to admit</label>
                            </div>

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="student_hall" value="abasic">abasic
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="student_hall" value="onabasic">onabasic
                                </label>
                            </div>
                            <div class="form-check-inline disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="student_hall" value="day" >day Care</label>
                            </div>

                        </div>


                        <div class="col-lg-3 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">School Type  </label>

                             </div>
                        </div>
                        <div class="col-lg-3 col-12 col-xl-3">
                            <div class="form-group">

                                <select name="vortir_bisoi" id="vortir_bisoi" required class="form-control">
                                    <option value="">----select-----</option>
                                    <option value="madrasah">madrasah</option>
                                    <option  value="school">scholl</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-6" id="madrasha_div">

                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="madrasah_division" value="tagbid">tagbid </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="madrasah_division" value="hibjo">hibjo                                     </label>
                                </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-6" id="school_div">

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="school_division" value="one">one  </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="school_division" value="two">tow                                     </label>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 col-xl-2">
                            <div class="form-group">
                                <label for="name_bn">Picture</label>

                            </div>
                        </div>

                        <div class="col-lg-4 col-6 col-xl-4">
                            <div class="form-group">

                                <input type="file" name="student_picture" class="form-control-file border">

                            </div>
                        </div>
                        <div class="col-lg-4 col-6 col-xl-4">
                        <div class="form-group">

                            <button type="submit" class="btn btn-success" >Submit</button>
                        </div>
                            </div>



                    </div>

                </form>
            </div>

        </div>
    </section>

    <script>

        $("#school_div").hide();
        $("#vortir_bisoi").change(function(){

            if(($(this).val())=="madrasah"){
                $("#school_div").hide();
                $("#madrasha_div").show();
            }else if(($(this).val())=="school"){
                $("#madrasha_div").hide();
                $("#school_div").show();
            }else{

            }
        })

    </script>



@endsection
