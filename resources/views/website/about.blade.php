@extends('website.master')
@section('mainContent')

    <section>
        <div class="gap">
            <div class="container">
                <div class="abt-sec-wrp">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-vdo brd-rd5">
                                <img src="https://www.qurancampus.com/uploads/1577517416-5475.png" alt="abt-img.jpg" itemprop="image">

                                <a href="<?php echo get_option('youtube_video')->youtube_video;?>" title="Click To Play" data-fancybox itemprop="url"><i class="flaticon-play-button"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-desc">
                                <div class="sec-tl">
                                    <span class="theme-clr">Our History</span>
                                    <h2 itemprop="headline"><?php      echo    get_single_page('about-us')->page_name;

                                                                                                                                                              ?></h2>
                                </div>
                                <p itemprop="description">  <?php      echo    get_single_page('about-us')->page_content;

                                                                                                  ?></p>

                             </div>
                        </div>
                    </div>
                </div><!-- About Sec Wrap -->
            </div>
        </div>
    </section>
@endsection
