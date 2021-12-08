@extends('website.master')
@section('mainContent')


    <div class="row banner-fluid">

        <div class="container-fluid banner-col">
            <img width="1920" height="542"
                 src="https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services.jpg"
                 class="attachment-full size-full wp-post-image" alt=""
                 srcset="https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services.jpg 1920w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-300x85.jpg 300w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1024x289.jpg 1024w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-768x217.jpg 768w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1536x434.jpg 1536w, https://www.globalstudylink.co.uk/wp-content/uploads/2020/03/services-1200x339.jpg 1200w"
                 sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px">
            <div class="caption wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><h2>News & Events</h2>
            </div>
        </div>
        <div class="row crumb"><p><a href="https://www.globalstudylink.co.uk">Home</a> <b> <i
                            class="fa fa-angle-double-right" aria-hidden="true"></i> </b> News & Events</p></div>
    </div>



    <div class="container-fluid news-fluid">


        <?php
        if($news){
            foreach ($news as $new){

            if($new->news_id%2==0){

        ?>


         <div class="row col-rw-news wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-md-8 col-img-new">
                <?php if($new->news_picture) { ?>
                <img src="{{ url('/public/uploads') }}/news/{{ $new->news_picture }}"
                     class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                     srcset="{{ url('/public/uploads') }}/news/{{ $new->news_picture }} 738w, {{ url('/public/uploads') }}/news/{{ $new->news_picture }} 300w"
                     sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px"
                     width="738" height="432">
                <?php } ?>

            </div>
            <div class="col-md-4 div-new-cols">
                <div class="col-md-12 col-cnt-new">
                    <span></span><h4>{{ $new->news_name }}</h4>
                    <p><?php echo read_more($new->news_name,150)?></p>
                    <a href="{{url('/')}}/news_events/{{ $new->news_link }}">Read More</a>

                </div>
            </div>
        </div>

            <?php } else { ?>
        <div class="row col-rw-news wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-md-4 div-new-cols div-new-col-mob">
                <div class="col-cnt-new col-news-oth col-md-12">
                    <span></span><h4>{{ $new->news_name }}</h4>
                    <p><?php echo read_more($new->news_name,150)?></p>
                    <a href="{{url('/')}}/news_events/{{ $new->news_link }}">Read More</a>

                </div>
            </div>
            <div class="col-md-8 col-img-new col-newsimg-oth">

                <?php if($new->news_picture) { ?>
                <img src="{{ url('/public/uploads') }}/news/{{ $new->news_picture }}"
                     class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                     srcset="{{ url('/public/uploads') }}/news/{{ $new->news_picture }} 1334w, {{ url('/public/uploads') }}/news/{{ $new->news_picture }} 300w, {{ url('/public/uploads') }}/news/{{ $new->news_picture }} 1024w, {{ url('/public/uploads') }}/news/{{ $new->news_picture }} 768w, {{ url('/public/uploads') }}/news/{{ $new->news_picture }} 1200w"
                     sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px"
                     width="1334" height="750">
                <?php }?>
            </div>
            <div class="col-md-4 col-mob">
                <div class="col-md-12 col-cnt-new">
                    <span></span><h4>{{ $new->news_name }}</h4>
                    <p><?php echo read_more($new->news_name,150)?></p>
                    <a href="{{url('/')}}/news_events/{{ $new->news_link }}">Read More</a>
                </div>
            </div>
        </div>

            <?php }?>


        <?php } } ?>



          </div>




@endsection
