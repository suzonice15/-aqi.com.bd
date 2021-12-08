@extends('website.master')
@section('mainContent')

    <section>
        <div class="gap">

            <div class="container">
                <form>
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
                                        placeholder="Enter Name">
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
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Post Office</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Thana</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 col-xl-2">
                            <div class="form-group">
                                <label for="name_bn">District</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 col-xl-12">
                            <div class="form-group">
                                <label for="name_bn">Parmanent Address</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-12 col-6 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">Father Name</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Education</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Ocupation</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">NID</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">Mobile</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>


                        <div class="col-lg-4 col-4 col-xl-6">
                            <div class="form-group">
                                <label for="name_bn">Mother</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Ocupation</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">Mobile</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-8">
                            <div class="form-group">
                                <label for="name_bn">Gardian Name</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-4">
                            <div class="form-group">
                                <label for="name_bn">Relation</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-8">
                            <div class="form-group">
                                <label for="name_bn">Address  </label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-4">
                            <div class="form-group">
                                <label for="name_bn">Mobile</label>
                                <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Mobile">
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 col-xl-12">


                            <div class="form-check-inline">
                                <label for="name_bn">Where  to admit</label>
                            </div>

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio">Option 1
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio">Option 2
                                </label>
                            </div>
                            <div class="form-check-inline disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio" >Option 3
                                </label>
                            </div>

                        </div>


                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">
                                <label for="name_bn">School Type  </label>

                             </div>
                        </div>
                        <div class="col-lg-4 col-4 col-xl-3">
                            <div class="form-group">

                                <select name="vortir bisoi" class="form-control">
                                    <option>madrasah</option>
                                    <option>scholl</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-4 col-xl-6">

                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optradio">Option 1
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optradio">Option 2
                                    </label>
                                </div>
                                <div class="form-check-inline ">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optradio" >Option 3
                                    </label>
                                </div>

                        </div>

                        <div class="col-lg-4 col-6 col-xl-4">
                            <div class="form-group">
                                <label for="name_bn">Picture</label>

                            </div>
                        </div>

                        <div class="col-lg-4 col-6 col-xl-4">
                            <div class="form-group">

                                <input type="file" class="form-control-file border">

                            </div>
                        </div>




                    </div>

                </form>
            </div>

        </div>
    </section>



@endsection
