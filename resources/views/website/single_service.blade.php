@extends('website.master')
@section('mainContent')








    <div class="row banner-fluid">

        <div class="container-fluid banner-col">
            <img width="1920" height="542"
                 src="https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services.jpg"
                 class="attachment-full size-full wp-post-image" alt=""
                 srcset="https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services.jpg 1920w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-300x85.jpg 300w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1024x289.jpg 1024w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-768x217.jpg 768w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1536x434.jpg 1536w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1200x339.jpg 1200w"
                 sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px">
            <div class="caption wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><h2>Services</h2>
            </div>
        </div>
        <div class="row crumb">
            <p><a href="{{url('/')}}">Home</a><b>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> </b> <a href="{{url('/')}}/services">Services</a>
                <b>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> </b> {{$service_row->service_name}}</p>

        </div>
    </div>


    <div class="row serv-d-row">
        <div class="col-lg-9 col-md-8 col-sev-d">
            <div class="col-md-12 col-12-ser"><h3 class="wow fadeInUp"
                                                  style="visibility: visible; animation-name: fadeInUp;"> {{$service_row->service_name}}</h3>
                <p> <?php echo $service_row->service_text ?></p>

                <img width="700" height="325"
                     src="{{url('/public/uploads')}}/service/{{$service_row->service_image}}"
                     class="attachment-full size-full wp-post-image" alt=""
                     srcset="{{url('/public/uploads')}}/service/{{$service_row->service_image}} 700w, {{url('/public/uploads')}}/service/{{$service_row->service_image}} 300w"
                     sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px">
                <h3 class="wow fadeInUp" style="visibility: hidden; animation-name: none;"></h3>
                <div class="row col-med-row"></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-form-d">
            <div class="col-md-12 look-col wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><h3>
                    Looking For Study Abroad?</h3>
                <div role="form" class="wpcf7" id="wpcf7-f140-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                    <form action="/service/scholarship-support/#wpcf7-f140-o1" method="post" class="wpcf7-form init"
                          novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="140">
                            <input type="hidden" name="_wpcf7_version" value="5.2.2">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f140-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value=""></div>
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
                                <input type="submit" value="Speak to an expert"
                                       class="wpcf7-form-control wpcf7-submit btn btn-lead"><span
                                        class="ajax-loader"></span></div>
                        </div>
                        <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
