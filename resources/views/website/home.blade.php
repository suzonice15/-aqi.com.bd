@extends('website.master')
@section('mainContent')


<section>
            <div class="gap no-gap">
                <img class="botm-shp shp-img" src="{{asset('/')}}assets/font_end/images//shp1g.png" alt="shp1.png">
                <div class="featured-area-wrap text-center">
                    <div class="featured-area owl-carousel">
						<?php
						if($sliders){
							foreach($sliders as $slider) {	?>


                        <div class="featured-item" style="background-image: url(<?=asset('uploads/sliders') . '/' . $slider->homeslider_picture;?>);">
                            <div class="featured-cap">
                                 <h3><?=$slider->homeslider_title?></h3>

                                <a class="theme-btn theme-bg brd-rd5" href="<?=$slider->target_url?>" title="">Read More</a>
                            </div>
                        </div>
						<?php } }?>

                    </div>
                </div><!-- Featured Area Wrap -->
            </div>
        </section><!-- Slider Area -->


<?php if($fesured_scoler) {?>
		<section>
            <div class="gap">
                <div class="container">
                    <div class="sec-tl text-center">
                        <span class="theme-clr">This Month's Guest</span>
                        <h2 itemprop="headline">Featured Scholar</h2>
						<img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">
                    </div>
                    <div class="team-sec remove-ext7">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="team-bx text-center">
                                    <div class="team-thmb brd-rd5"><a href="team-detail.html" title="" itemprop="url"><img src="{{asset('/')}}assets/font_end/images//resources/team-img1-3.jpg" alt="team-img1-3.jpg" itemprop="image"></a></div>
                                    <div class="team-inf brd-rd5">
                                        <div class="scl1">
                                            <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#" title="Youtube" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>
                                        </div>
                                        <h5 itemprop="headline"><a href="team-detail.html" title="" itemprop="url">Sharuf Al Hammam</a></h5>
                                        <span>Islamic Scholar</span>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-8 col-sm-12 col-lg-8">
								<div class="remove-ext3 tch-wrp row">
									<div class="col-md-4 col-sm-4 col-lg-4">
										<div class="tch-bx brd-rd5">
											<div class="tch-thmb">
												<img src="{{asset('/')}}assets/font_end/images//resources/tch-ado-img1.jpg" alt="tch-ado-img1.jpg" itemprop="image">
												<a class="fancybox fancybox.iframe" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/128094075&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" data-fancybox="" title="" itemprop="url" rel="gallery"><i class="flaticon-play-button"></i></a>
											</div>
											<div class="tch-inf">
												<span><i class="far fa-user theme-clr"></i>Sharuf Al Hammam</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-lg-4">
										<div class="tch-bx brd-rd5">
											<div class="tch-thmb">
												<img src="{{asset('/')}}assets/font_end/images//resources/tch-ado-img2.jpg" alt="tch-ado-img2.jpg" itemprop="image">
												<a class="fancybox fancybox.iframe" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/128094075&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" data-fancybox="" title="" itemprop="url" rel="gallery"><i class="flaticon-play-button"></i></a>
											</div>
											<div class="tch-inf">
												<span><i class="far fa-user theme-clr"></i>Sharuf Al Hammam</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-lg-4">
										<div class="tch-bx brd-rd5">
											<div class="tch-thmb">
												<img src="{{asset('/')}}assets/font_end/images//resources/tch-ado-img3.jpg" alt="tch-ado-img3.jpg" itemprop="image">
												<a class="fancybox fancybox.iframe" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/128094075&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" data-fancybox="" title="" itemprop="url" rel="gallery"><i class="flaticon-play-button"></i></a>
											</div>
											<div class="tch-inf">
												<span><i class="far fa-user theme-clr"></i>Sharuf Al Hammam</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-lg-4">
										<div class="book-block">
											<img src="{{asset('/')}}assets/font_end/images//book-cover.jpg" alt="book-cover.jpg" itemprop="image">
											<div class="tch-inf">
												<span><i class="far fa-user theme-clr"></i>Sharuf Al</span>
												<div class="tch-dwn-btn">
													<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-pdf-file"></i></a>
													<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-download"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-lg-4">
										<div class="book-block">
											<img src="{{asset('/')}}assets/font_end/images//book-cover.jpg" alt="book-cover.jpg" itemprop="image">
											<div class="tch-inf">
												<span><i class="far fa-user theme-clr"></i>Sharuf Al</span>
												<div class="tch-dwn-btn">
													<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-pdf-file"></i></a>
													<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-download"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-lg-4">
										<div class="book-block">
											<img src="{{asset('/')}}assets/font_end/images//book-cover.jpg" alt="book-cover.jpg" itemprop="image">
											<div class="tch-inf">
												<span><i class="far fa-user theme-clr"></i>Sharuf Al</span>
												<div class="tch-dwn-btn">
													<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-pdf-file"></i></a>
													<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-download"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div><!-- Team Sec -->
                </div>
            </div>
        </section>
<?php } ?>

<?php if($services) {?>

		<section>
            <div class="gap white-layer opc9">
                 <div class="container">
					<div class="sec-tl text-center">
                        <span class="theme-clr">Most Welcome To Our</span>
                        <h2 itemprop="headline">Quranic Sections</h2>
						<img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">
                    </div>
                    <div class="serv-wrp remove-ext3">
                        <div class="row">

							<?php foreach($services as $service) {?>

							<div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="serv-bx text-center">

									<?php echo $service->service_icon;?>
                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url"><?php echo $service->service_name;?></a></h5>
                                    <div class="srv-inf theme-bg brd-rd10">
                                        <p itemprop="description"><?php echo $service->service_text;?></p>
                                    </div>
                                </div>
                            </div>
							<?php }?>

                        </div>
                    </div><!-- Services Wrap -->
                </div>
            </div>
        </section>


<?php } ?>
<section>
	<div class="gap white-layer opc9">
		<div class="container">
			<div class="sec-tl text-center">

				<h2 itemprop="headline">Our Expert Team</h2>
				<img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">
			</div>
			<div class="serv-wrp remove-ext3">

			<div class="row">

				<?php

				if($teams){
				foreach($teams as $team){

				?>
					<div class="col-md-4 col-sm-6 col-lg-4">
						<div class="team-bx text-center">
							<div class="team-thmb brd-rd5"><a href="team-detail.html" title="" itemprop="url"><img src="{{ asset('/uploads') }}/{{ $team->team_picture }}" alt="team-img1-1.jpg" itemprop="image"></a></div>
							<div class="team-inf brd-rd5">
								<div class="scl1">
									<a href="{{ $team->team_instagram }}" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
									<a href="{{ $team->team_facebook }}" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="{{ $team->team_linkind }}" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>

									<a href="{{ $team->team_youtube }}" title="Youtube" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>
								</div>
								<h5 itemprop="headline"><a href="#" title="" itemprop="url">{{ $team->team_title }}</a></h5>
								<span>{{ $team->team_name }}</span>
							</div>
						</div>
					</div>

					<?php } } ?>

				</div>


			</div><!-- Services Wrap -->
		</div>
	</div>
</section>

<br>
<br>
 
<?php if(!$events) {?>
<section>
            <div class="gap">
                <div class="container">
					<div class="sec-tl text-center">
                        <span class="theme-clr">Organizing Events Worldwide</span>
                        <h2 itemprop="headline">Attend Our Events</h2>
						<img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">
                    </div>
                    <div class="event-sec remove-ext5">
                        <div class="row">

							<?php foreach($events as $event ) {

							$first_date=date_create(date('Y-m-d'));
							$end_date=date_create($event->event_start_date);
							$date_result=date_diff($first_date,$end_date);

							?>

							<div class="col-md-4 col-sm-6 col-lg-4">
							<div class="event-bx2 brd-rd5">
								<div class="event-thmb">
									<span> {{date('d',strtotime($event->event_start_date))}} <i>{{date('M',strtotime($event->event_start_date))}}</i></span>
									<a href="#" title="" itemprop="url"><img src="{{ asset('/uploads') }}/event/{{ $event->event_picture }}" alt="event-img1.jpg" itemprop="image"></a>
									<ul  style="display:none" class="countdown text-center">
										<li>
											<span class="days">{{$date_result->days}}</span>
											<p class="days_ref">days</p>
										</li>
										<li>
											<span class="days">{{$date_result->days}}</span>
											<p class="days_ref">days</p>
										</li>
										<li>
											<span class="hours">{{$date_result->h}}</span>
											<p class="hours_ref">hours</p>
										</li>
										<li>
											<span class="minutes">{{$date_result->i}}</span>
											<p class="minutes_ref">minutes</p>
										</li>
										<li>
											<span class="seconds">{{$date_result->s}}</span>
											<p class="seconds_ref">seconds</p>
										</li>
									</ul>
								</div>
								<div class="event-inf">
									<h5 itemprop="headline"><a href="#" title="" itemprop="url">{{$event->event_name}}</a></h5>
									<ul class="pst-mta">
										<li><i class="fas fa-map-marker-alt theme-clr"></i> {{$event->event_location}}</li>
										<li><i class="far fa-clock theme-clr"></i> {{date('h:i a',strtotime($event->event_start_time))}} - {{date('h:i a',strtotime($event->event_end_time))}}</li>
									</ul>
									<p itemprop="description"><?php echo $event->event_description ?></p>
									<a href="3" title="" itemprop="url">Event Details</a>
								</div>
							</div>
						</div>
								<?php } ?>

					 </div>
				   </div>
                </div>
            </div>
        </section>
<?php } ?>


<?php if($event_gelary) { ?>
		<section>
            <div class="gap black-layer opc8 white-testi">
                <div class="container">
					<div class="sec-tl text-center">
                        <span class="theme-clr">Some Good Memories</span>
                        <h2 itemprop="headline">Our Events Gallery</h2>
						<img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">
                    </div>
                    <div class="gallery-wrap">
						<div class="row mrg10">

							<?php

							foreach ($event_gelary as $gelary) {
							?>
							<div class="col-md-3 col-sm-6 col-lg-3">
								<div class="gallery-item brd-rd5">
									<a href="{{ asset('/uploads') }}/gelary/{{ $gelary->gelary_picture }}" data-fancybox="gallery" title="" itemprop="url"><img src="{{ asset('/uploads') }}/gelary/{{ $gelary->gelary_picture }}" alt="gallery-img2-1.jpg" itemprop="image"></a>
								</div>
							</div>

							<?php } ?>


							</div>

					</div><!-- Gallery Wrap -->
                </div>
            </div>
        </section>

      <?php } ?>
	  <?php if($bookcorner) { ?>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="sec-tl text-center">
                        <span class="theme-clr">Free Gift Books</span>
                        <h2 itemprop="headline">Books Corner</h2>
						<img src="{{asset('/')}}assets/font_end/images//pshapeg.png" alt="">
                    </div>
                    <div class="team-sec">
                        <div class="row">
							<div class="col-md-3 col-sm-6 col-lg-3">
								<div class = "book-block">
									<img src="{{asset('/')}}assets/font_end/images//book-cover.jpg" alt="book-cover.jpg" itemprop="image">
									<div class="tch-inf">
										<span><i class="far fa-user theme-clr"></i>Jibran Faiz</span>
										<div class="tch-dwn-btn">
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-pdf-file"></i></a>
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-download"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-lg-3">
								<div class = "book-block">
									<img src="{{asset('/')}}assets/font_end/images//book-cover.jpg" alt="book-cover.jpg" itemprop="image">
									<div class="tch-inf">
										<span><i class="far fa-user theme-clr"></i>Nasir ul Haq</span>
										<div class="tch-dwn-btn">
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-pdf-file"></i></a>
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-download"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-lg-3">
								<div class = "book-block">
									<img src="{{asset('/')}}assets/font_end/images//book-cover.jpg" alt="book-cover.jpg" itemprop="image">
									<div class="tch-inf">
										<span><i class="far fa-user theme-clr"></i>Jamila Faroque</span>
										<div class="tch-dwn-btn">
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-pdf-file"></i></a>
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-download"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-lg-3">
								<div class = "book-block">
									<img src="{{asset('/')}}assets/font_end/images//book-cover.jpg" alt="book-cover.jpg" itemprop="image">
									<div class="tch-inf">
										<span><i class="far fa-user theme-clr"></i>Sharif Haque</span>
										<div class="tch-dwn-btn">
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-pdf-file"></i></a>
											<a href="assets/sample/text.zip" title="" itemprop="url"><i class="flaticon-download"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </section>
<?php } ?>
@endsection
