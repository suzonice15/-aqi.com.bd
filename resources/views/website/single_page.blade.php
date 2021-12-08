@extends('website.master')
@section('mainContent')

    <section>
        <div class="gap black-layer opc9">
            <div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline"><?php echo $page->page_name;?></h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $page->page_name;?></li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <?php echo $page->page_content;?>
            </div>
        </div>
    </section>










@endsection
