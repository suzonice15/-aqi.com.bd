<footer>
    <div class="gap no-gap" >
        <img class = "vector-bg-footer" style="position:relative !important;"  >
        <div class="container">
            <div class="footer-data brd-rd20 overlap-220">
                <div class="footer-data-inr">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget">
                                <h5 itemprop="headline">About Us</h5>
                                <p itemprop="description">
                                    <?php
                                    echo    get_single_page('about-us')->page_content;

                                    ?>

                                </p>


                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget">
                                <h5 itemprop="headline">Follow Us on</h5>
                                <ul class="social-link">
                                    <li>
                                        <a href="<?php echo get_social('facebook')->facebook;?>" class="round2">
                                            <img width="20" src="https://www.qurancampus.com/images/social/fb.png" class="fb-icon">
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_social('twitter')->twitter;?>" class="round1">
                                            <img width="20" src="https://www.qurancampus.com/images/social/tw.png" class="tweet-icon">
                                            Twitter
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo get_social('linked')->linked;?>" class="round4">
                                            <img width="20" src="https://www.qurancampus.com/images/social/in.png" class="link-icon">
                                            LinkedIn
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_social('youtube')->youtube;?>" class="round5">
                                            <img width="20" src="https://www.qurancampus.com/images/social/yt.png" class="you-icon">
                                            Youtube
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget">
                                <h5 itemprop="headline">Contact Info</h5>
                                <ul class="cnt-inf">
                                    <li><i class="far fa-envelope theme-clr"></i><a href="#" title="" itemprop="url"><?php echo get_option('email')->email;?></a></li>
                                    <li><i class="fas fa-phone theme-clr"></i><span><?php echo get_option('phone')->phone;?></span></li>
                                    <li><i class="fas fa-map-marker-alt theme-clr"></i><?php echo get_option('address')->address;?></li>
                                    <li><i class="fas fa-map-marker-alt theme-clr"></i><?php echo get_option('bangla_address')->bangla_address;?></li>
                                 </ul>

                            </div>
                        </div>

                    </div>
                </div>
                <p class="text-center"> © <?=date('Y')?> All Rights Reserved by Al-Quran Institute Developed by isolutions </p>

            </div>




        </div>




    </div>
</footer>


</main><!-- Main Wrapper -->



<script src="{{asset('/')}}assets/font_end/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/font_end/js/plugins.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcavdONRtu_0BfV63xiQX1LiJpX1ZJ2N0"></script>
<script src="{{asset('/')}}assets/font_end/js/google-map-int.js"></script>
<script src="{{asset('/')}}assets/font_end/js/custom-scripts.js"></script>
</body>
</html>
