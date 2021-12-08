@extends('website.master')
@section('mainContent')

    <section>
        <div class="gap">
            <div class="container">


                <div class="sec-tl contact-cont text-center">
                    <span class="theme-clr">Contact us</span>
                    <h2 itemprop="headline">Get In Touch</h2>
                    <img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">

                </div>


                <div class="cnt-inf-wrp">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="sec-tl">
                                <span class="theme-clr">Get Information</span>
                                <h3 itemprop="headline">Contact Details</h3>
                            </div>
                            <ul class="cnt-inf-lst">
                                <li><i class="fas fa-envelope theme-clr"></i> <strong>Email</strong><a href="#" title=""
                                                                                                       itemprop="url"> <?php echo get_option('email')->email;?></a></li>
                                <li><i class="fas fa-phone theme-clr"></i>
                                    <strong>Phone</strong><span> <?php echo get_option('phone')->phone;?></span></li>
                                <li><i class="fas fa-map-marker-alt theme-clr"></i> <strong>Address</strong><span> <?php echo get_option('address')->address;?>a</span>
                                </li>
                                <li><i class="fas fa-fax theme-clr"></i>
                                    <strong>Mobile</strong><span><?php echo get_option('mobile')->mobile;?></span></li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">


                                <input  type="text" class="form-control" id="name" placeholder="Name">

                                <input  type="email" class="form-control mt-3"  id="email" placeholder="Email">

                                <input  type="text" class="form-control mt-3"  id="phone" placeholder="Phone">

                                <textarea class="form-control mt-3" id="message" placeholder="Message"></textarea>

                                <button type="button" id="form_submit" class="btn btn-success btn-sm  btn-block mt-3">SUBMIT NOW</button>

<p id="show_message" class="text-success">Thank you for your message. It has been sent.</p>
                        </div>
                    </div>
                </div>


                <div class="cnt-mp brd-rd5" id="cnt-mp">

                    <?php echo get_option('google_map')->google_map;?>
                </div>


            </div>
        </div>
    </section>



    <script>


        $("#show_message").hide();

        $(document).on('click','#form_submit',function () {

            var phone = $('#phone').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();
            if (name   =='') {
                alert("Enter Name field");
                return false;
            }
            if (email =='') {
                alert("Enter Email field");
                return false;
            }

            if (phone =='') {
                alert("The length of the Phone number must be 11 digits");
            } else {
                $.ajax({
                    url: "{{url('/')}}/contact/save",
                    method: "POST",
                    data: {
                        email: email,
                        name:name,
                        phone:phone,
                        message:message,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (result) {
                        $("#show_message").show();
                        var phone = $('#phone').val('');
                        var name = $('#name').val('');
                        var email = $('#email').val('');
                        var message = $('#message').val('');

                        $( "#form_submit" ).prop( "disabled", true );

                        console.log(result)
//                                if (result == 'unique') {
//
//                                }
//                                else {
//
//
//                                }
                    }
                });
            }
        });
    </script>








@endsection
