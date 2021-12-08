<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?php echo get_option('site_title')->site_title;?></title>

	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
	<link rel="icon" type="image/png" sizes="196x196" href="{{asset('/')}}uploads/<?php echo get_option('icon')->icon;?>"
	<link rel="apple-touch-icon" href="{{asset('/')}}assets/font_end/images//favicon-57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('/')}}assets/font_end/images//favicon-114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('/')}}assets/font_end/images//favicon-72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('/')}}assets/font_end/images//favicon-144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('/')}}assets/font_end/images//favicon-60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('/')}}assets/font_end/images//favicon-120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}assets/font_end/images//favicon-76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('/')}}assets/font_end/images//favicon-152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}assets/font_end/images//favicon-180.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="{{asset('/')}}assets/font_end/images//favicon-144.png">
	<meta name="msapplication-config" content="{{asset('/')}}assets/font_end/images//browserconfig.xml">

    <link rel="stylesheet" href="{{asset('/')}}assets/font_end/css/icons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/font_end/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/font_end/css/plugins.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/font_end/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/font_end/css/responsive.css">
    <script src="{{asset('/')}}assets/font_end/js/jquery.min.js"></script>

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{asset('/')}}assets/font_end/css/colors/color5.css" title="color" /><!-- Color -->
</head>
<body itemscope>
    <main>
        <header class="style2">
            <div class="topbar">
                <div class="container">
                    <ul class="float-left tp-lnks">
                        <li><i class="far fa-map theme-clr"></i><?php echo get_option('header_name')->header_name;?></li>
                        <li><i class="far fa-clock theme-clr"></i>Mon - Sat 8:00 AM - 18:00 PM</li>
                    </ul>
                    <div class="scl1 float-right">
                        <span>Follow us:</span>
                        <a href="<?php echo get_social('facebook')->facebook;?>" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>

                        <a href="<?php echo get_social('twitter')->twitter;?>" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo get_social('linked')->linked;?>" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php echo get_social('instagram')->instagram;?>" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo get_social('youtube')->youtube;?>" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="logo-inf-sec">
                <div class="container">
                    <div class="logo"><a href="{{url('/')}}" title="Logo" itemprop="url"><img src="{{asset('/')}}uploads/<?php echo get_option('logo')->logo;?>" alt="logo2.png" itemprop="image"></a></div><!-- Logo -->
                    <div class="float-right cnt-inf-btn">
                        <ul class="inf-lst">
                            <li><i class="flaticon-phone-volume theme-clr brd-rd50"></i>Call us: <span class="theme-clr">  <?php echo get_option('phone')->phone;?></span></li>
                            <li><i class="fas fa-envelope theme-clr brd-rd50"></i><a href="#" title="" itemprop="url">  <?php echo get_option('email')->email;?></a></li>
                        </ul>
                        <a class="theme-btn theme-bg brd-rd5" href="{{url('/')}}/curriculum" title="" itemprop="url">Our Curriculum </a>
                    </div>
                </div>
            </div><!-- Logo Menu Sec -->
            <div class="menu-sec theme-bg">
                <div class="container">
                    <nav>
                        <div>
                            <ul>
                                <li><a href="{{url('/')}}" title="" itemprop="url">Home</a></li>
                                <li><a href="{{url('/program-video')}}" title="" itemprop="url">Video</a></li>


                                <li><a href="{{url('/')}}/about-us" title="" itemprop="url">About Us</a></li>
                                <li><a href="{{url('/')}}/contact" title="" itemprop="url">Contact</a></li>
                            </ul>
                            <div class="hdr-srch">
                                <form>
                                    <input type="text" placeholder="Search Here">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="mnu-btm-shp">
                    <i class="theme-bg crl1"></i>
                    <i class="theme-bg crl2"></i>
                    <i class="theme-bg crl3"></i>
                    <i class="theme-bg crl4"></i>
                    <i class="theme-bg crl5"></i>
                    <i class="theme-bg crl6"></i>
                    <i class="theme-bg crl7"></i>
                    <i class="theme-bg crl8"></i>
                    <i class="theme-bg crl9"></i>
                    <i class="theme-bg crl10"></i>
                    <i class="theme-bg crl11"></i>
                    <i class="theme-bg crl12"></i>
                    <i class="theme-bg crl13"></i>
                    <i class="theme-bg crl14"></i>
                    <i class="theme-bg crl15"></i>
                    <i class="theme-bg crl16"></i>
                    <i class="theme-bg crl17"></i>
                    <i class="theme-bg crl18"></i>
                    <i class="theme-bg crl19"></i>
                    <i class="theme-bg crl20"></i>
                    <i class="theme-bg crl21"></i>
                    <i class="theme-bg crl22"></i>
                    <i class="theme-bg crl23"></i>
                    <i class="theme-bg crl24"></i>
                    <i class="theme-bg crl24"></i>
                    <i class="theme-bg crl24"></i>
                    <i class="theme-bg crl25"></i>
                    <i class="theme-bg crl26"></i>
                    <i class="theme-bg crl27"></i>
                    <i class="theme-bg crl27"></i>
                    <i class="theme-bg crl27"></i>
                    <i class="theme-bg crl28"></i>



                </div>
            </div>
        </header><!-- Header -->
        <div class="header-search">
            <span class="srch-cls-btn brd-rd5"><i class="fas fa-times"></i></span>
            <form>
                <input type="text" placeholder="Search here...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div><!-- Header Search -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
                <ul class="rspn-scil">
                    <li><a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
                <form class="rspn-srch">
                    <input type="text" placeholder="Enter Your Keyword" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="index.html" title="Logo" itemprop="url"><img src="{{asset('/')}}uploads/<?php echo get_option('logo')->logo;?>" alt="logo2.png" itemprop="image"></a></div>
                <div class="rspn-cnt">
                    <span><i class="fas fa-envelope theme-clr"></i><a href="#" title="" itemprop="url">info@bismillah.com</a></span>
                    <span><i class="flaticon-phone-volume theme-clr"></i>+(00) 123-345-11</span>
                </div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul>



                    <li><a href="{{url('/')}}" title="" itemprop="url">Home</a></li>
                    <li><a href="{{url('/program-video')}}" title="" itemprop="url">Video</a></li>

                    <li><a href="{{url('/')}}/about-us" title="" itemprop="url">About Us</a></li>
                    <li><a href="{{url('/')}}/contact" title="" itemprop="url">Contact</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->


