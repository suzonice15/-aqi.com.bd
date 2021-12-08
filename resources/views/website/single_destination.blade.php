@extends('website.master')
@section('mainContent')








    <div class="row banner-fluid">

        <div class="container-fluid banner-col">
            <img width="1920" height="542"
                 src="https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services.jpg"
                 class="attachment-full size-full wp-post-image" alt=""
                 srcset="https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services.jpg 1920w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-300x85.jpg 300w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1024x289.jpg 1024w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-768x217.jpg 768w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1536x434.jpg 1536w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1200x339.jpg 1200w"
                 sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px">
            <div class="caption wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><h2>
                    Destinations</h2>
            </div>
        </div>
        <div class="row crumb">
            <p><a href="{{url('/')}}">Home</a><b>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> </b> <a href="{{url('/')}}/destinations">Destinations</a>
                <b>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </b> {{$destination_row->destination_name}}</p>

        </div>
    </div>
    <div class="row dest-det">
        <div class="col-md-5 col-dest-det">
            <div class="col-md-12 look-col wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img width="1200" height="800"
                     src="{{ url('/public/uploads') }}/destination/{{ $destination_row->destination_picture }}"
                     class="attachment-full size-full wp-post-image" alt=""
                     srcset="{{ url('/public/uploads') }}/destination/{{ $destination_row->destination_picture }} 1200w, {{ url('/public/uploads') }}/destination/{{ $destination_row->destination_picture }} 300w, {{ url('/public/uploads') }}/destination/{{ $destination_row->destination_picture }} 1024w"
                     sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px">
                <h3>Register for Free Counselling</h3>
                <div role="form" class="wpcf7" id="wpcf7-f141-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                    <form action="/destination/germany/#wpcf7-f141-o1" method="post" class="wpcf7-form init"
                          novalidate="novalidate">


                        <div class="row row-control">
                            <div class="col-md-6">
                                <span class="wpcf7-form-control-wrap names"><input type="text" name="names" value=""
                                                                                   size="40"
                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                   aria-required="true"
                                                                                   aria-invalid="false"
                                                                                   placeholder="First Name *"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="wpcf7-form-control-wrap lname"><input type="text" name="lname" value=""
                                                                                   size="40"
                                                                                   class="wpcf7-form-control wpcf7-text form-control"
                                                                                   aria-invalid="false"
                                                                                   placeholder="Last Name"></span></div>
                            <div class="col-md-12">
                                <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value=""
                                                                                   size="40"
                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                                                   aria-required="true"
                                                                                   aria-invalid="false"
                                                                                   placeholder="Email *"></span></div>
                            <div class="col-md-12">
                                <span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value=""
                                                                                   size="40"
                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control"
                                                                                   aria-required="true"
                                                                                   aria-invalid="false"
                                                                                   placeholder="Phone Number *"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="wpcf7-form-control-wrap msg"><textarea name="msg" cols="40" rows="4"
                                                                                    class="wpcf7-form-control wpcf7-textarea form-control"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Message"></textarea></span>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Submit"
                                       class="wpcf7-form-control wpcf7-submit btn btn-lead"><span
                                        class="ajax-loader"></span></div>
                        </div>
                        <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-acc-det">
            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link text-dark" data-toggle="collapse" href="#collapse1"><h3>About {{$destination_row->destination_name}}<span
                                        class="float-right"><i class="fa fa-angle-down"></i></span></h3>
                        </a></div>
                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                        <div class="card-body"><p><?php echo $destination_row->destination_text ?></p></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="card-link text-dark" data-toggle="collapse" href="#collapse2"><h3>Documents
                                Needed<span class="float-right"><i class="fa fa-angle-down"></i></span></h3>
                        </a></div>
                    <div id="collapse2" class="collapse " data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $destination_row->destination_document ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row dets-last-row">
        <div class="col-md-4">
            <div class="col-md-12 col-tab-dest">
                <div class="pos-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link  active" href="#tab1" role="tab" data-toggle="tab"
                               aria-selected="true"><i class="fa fa-globe" aria-hidden="true"></i> <span>{{$destination_row->destination_name}} for International Students</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#tab2" role="tab" data-toggle="tab" aria-selected="true"><i
                                        class="fa fa-question-circle-o" aria-hidden="true"></i> <span>Why Study in {{$destination_row->destination_name}}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#tab3" role="tab" data-toggle="tab" aria-selected="true"><i
                                        class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Universities and courses</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#tab4" role="tab" data-toggle="tab" aria-selected="true"><i
                                        class="fa fa-id-badge" aria-hidden="true"></i> <span>Qualifying Exams and Coaching</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#tab5" role="tab" data-toggle="tab" aria-selected="true"><i
                                        class="fa fa-usd" aria-hidden="true"></i>
                                <span>Cost of Studying in {{$destination_row->destination_name}}</span></a></li>
                    </ul>
                    <h4> <?php echo $destination_row->destination_bottom ?></h4></div>
            </div>
        </div>
        <div class="col-md-8 col-tab-cnt-dest">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1"><p><?php echo $destination_row->destination_about ?></p>
                </div>
                <div role="tabpanel" class="tab-pane " id="tab2"><p>

                        <?php echo $destination_row->destination_why ?>
                    </p></div>
                <div role="tabpanel" class="tab-pane " id="tab3"><h3 class="western" lang="en-US">Reputed
                        Instituitions</h3>
                    <?php echo $destination_row->university_course ?>

                </div>
                <div role="tabpanel" class="tab-pane " id="tab4">



                    <?php echo $destination_row->qualify_coacing ?>
                </div>
                <div role="tabpanel" class="tab-pane " id="tab5"> <?php echo $destination_row->cost_of_study ?>

                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
