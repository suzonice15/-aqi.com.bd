@extends('website.master')
@section('mainContent')


    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl text-center">

                    <h2 itemprop="headline">Video</h2>
                    <img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">
                </div>
                <div class="remove-ext3">

                        <span class="buttom-program-video"></span>
                </div>

            </div>
        </div>
    </section>








    <script defer >
        $.get("{{url('/')}}/ajax-program-video", function(data, status){
            $('.buttom-program-video').html(data);
        });
    </script>

@endsection