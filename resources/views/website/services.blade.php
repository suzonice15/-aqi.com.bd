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
        <div class="row crumb"><p><a href="https://www.globalstudylink.co.uk">Home</a> <b> <i
                            class="fa fa-angle-double-right" aria-hidden="true"></i> </b> Services</p></div>
    </div>




    <div class="row serv-fluid">

        @if($services)
            @foreach($services as $service)
        <div class="col-lg-3 col-md-4 col-6 col-servi wow fadeInUp"
             style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-md-12 col-ser">
                <img width="768" height="768"
                     src="{{ url('/public/uploads') }}/service/{{ $service->service_image }}"
                     class="attachment-medium_large size-medium_large wp-post-image" alt=""
                     srcset="{{ url('/public/uploads') }}/service/{{ $service->service_image }}, {{ url('/public/uploads') }}/service/{{ $service->service_image }} 150w"
                     sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px">
                <a href="{{url('/')}}/service/{{$service->service_link}}">Read
                    <br><span>More</span></a>
                <b></b><h6> {{$service->service_name}}</h6></div>
            <div class="col-md-12 col-pos">
                <a href="{{url('/')}}/service/{{$service->service_link}}">
                    <b></b><h6> {{$service->service_name}}</h6>
                    <p><?php echo $service->service_text ?></p><h5>Our
                        Services</h5>
                </a></div>
        </div>
        @endforeach
            @endif
    </div>















@endsection
