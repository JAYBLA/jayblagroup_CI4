<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
<main>
	<?= $this->include('templates/includes/right-side-menu') ?>

    <!-- slider_section - start
    ================================================== -->
    <section class="slider_section home_three_slider clearfix">
        <div class="main_slider owl-carousel owl-theme clearfix">

            <div class="item" data-background="<?= base_url('/assets/images/backgrounds/bg_01.jpg') ?>">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                        <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-last">
                            <div class="slider_image">
                                <img src="<?= base_url('/assets/images/slider/img_01.png') ?>" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider_content text-white">
                                <h4 class="small_title">Welcome to  Jaybla Group</h4>
                                <h3 class="item_title text-uppercase text-white mb-0">Corporate Identity Design & Printing</h3>
                                <p>
                                    We offer very creative designs while maintaining quality whenever printing is needed from us!
                                    
                                </p>
                                <ul class="btns_group ul_li clearfix">
                                    <li>
                                        <a class="custom_btn bg_default_yellow" target="_blank" href="<?= base_url('/graphic-design') ?>">
                                            Explore More
                                            <span><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" data-background="<?= base_url('/assets/images/slider/bg_01.jpg') ?>">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                        <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-last">
                            <div class="slider_image">
                                <img src="<?= base_url('/assets/images/slider/promotional_materials.png') ?>" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider_content text-white">
                                <h4 class="small_title">Welcome to  Jaybla Group</h4>
                                <h3 class="item_title text-uppercase text-white mb-0">Promotional Materials</h3>
                                <p>
                                    We provide you with protional materials such as Banners, Tshirts & Caps, Mugs, Key Holders and Pens all printed at best quality.
                                    
                                </p>
                                <ul class="btns_group ul_li clearfix">
                                    <li>
                                        <a class="custom_btn bg_default_yellow" target="_blank" href="<?= base_url('/promotional-materials') ?>">
                                            Explore More
                                            <span><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" data-background="<?= base_url('/assets/images/slider/bg_01.jpg') ?>">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                        <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-last">
                            <div class="slider_image">
                                <img src="<?= base_url('/assets/images/slider/signages.png') ?>" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider_content text-white">
                                <h4 class="small_title">Welcome to  Jaybla Group</h4>
                                <h3 class="item_title text-uppercase text-white mb-0">2D & 3D Signages</h3>
                                <p>
                                    We offer very creative designs while maintaining quality whenever printing is needed from us!
                                    
                                </p>
                                <ul class="btns_group ul_li clearfix">
                                    <li>
                                        <a class="custom_btn bg_default_yellow" target="_blank" href="<?= base_url('/signages') ?>">
                                            Explore More
                                            <span><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" data-background="<?= base_url('/assets/images/slider/bg_01.jpg') ?>">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                        <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-last">
                            <div class="slider_image">
                                <img src="<?= base_url('/assets/images/slider/web.png') ?>" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider_content text-white">
                                <h4 class="small_title">Welcome to  Jaybla Group</h4>
                                <h3 class="item_title text-uppercase text-white mb-0">Web Design and Development</h3>
                                <p>
                                    We offer very creative designs while maintaining quality whenever printing is needed from us!
                                    
                                </p>
                                <ul class="btns_group ul_li clearfix">
                                    <li>
                                        <a class="custom_btn bg_default_yellow" target="_blank" href="https://bafrocodes.co.tz">
                                            Explore More
                                            <span><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section bg_gray clearfix">
        <div class="maxw_1780 container">
            <div class="row no-gutters justify-content-lg-between">

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
                    <div class="feature_listlayout_boxed2 deco_wrap h-100">
                        <div class="item_icon">
                            <img src="<?= base_url('/assets/images/feature/icon_01.png') ?>" alt="image_not_found">
                        </div>
                        <div class="item_content">                
                            <h3 class="item_title">Best Quality Printing</h3>
                            <p>
                                We use high end printing technology as possible to provide you with best quality works.
                            </p>
                        </div>

                        <div class="deco_image shape_1">
                            <img src="<?= base_url('/assets/images/feature/shape_01.png') ?>" alt="image_not_found">
                        </div>
                        <div class="deco_image shape_2">
                            <img src="<?= base_url('/assets/images/feature/shape_02.png') ?>" alt="image_not_found">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                    <div class="feature_listlayout_boxed2 deco_wrap h-100">
                        <div class="item_icon">
                            <img src="<?= base_url('/assets/images/feature/icon_02.png') ?>" alt="image_not_found">
                        </div>
                        <div class="item_content">                            
                            <h3 class="item_title">Creative Designs</h3>
                            <p>
                                We have experienced designers to provide you with unique designs while maintaining a nice look of designs.
                            </p>
                        </div>

                        <div class="deco_image shape_1">
                            <img src="<?= base_url('/assets/images/feature/shape_01.png') ?>" alt="image_not_found">
                        </div>
                        <div class="deco_image shape_2">
                            <img src="<?= base_url('/assets/images/feature/shape_02.png') ?>" alt="image_not_found">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                    <div class="feature_listlayout_boxed2 deco_wrap h-100">
                        <div class="item_icon">
                            <img src="<?= base_url('/assets/images/feature/icon_03.png') ?>" alt="image_not_found">
                        </div>
                        <div class="item_content">                        
                            <h3 class="item_title">Affordable Price</h3>
                            <p>
                                Our Prices are not fixed, we  have a price range that suits every client by providing different service options to make sure we serve everybody.
                            </p>
                        </div>

                        <div class="deco_image shape_1">
                            <img src="<?= base_url('/assets/images/feature/shape_01.png') ?>" alt="image_not_found">
                        </div>
                        <div class="deco_image shape_2">
                            <img src="<?= base_url('/assets/images/feature/shape_02.png') ?>" alt="image_not_found">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- about_section - start
    ================================================== -->
    <section class="about_section sec_ptb_130 clearfix">
        <div class="container">
            <div class="section_title text-center mb_80">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">About Our Company</h4>
                        <h2 class="big_title mb-0">
                            Printing Your Dream Works With Jaybla Group
                        </h2>
                        <span class="biggest_title">About</span>
                    </div>
                </div>
            </div>

            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <div class="about_image_2 wow fadeInUp2" data-wow-delay=".2s">
                        <img src="<?= base_url('/assets/images/about/img_05.jpg') ?>" alt="icon_not_found">
                    </div>
                </div>

                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <div class="about_content">
                        <p class="border_left_orange mb-0 wow fadeInUp2" data-wow-delay=".2s">
                            We at Jaybla Group have a range of products and services for your convenience.
                            Our products and services will provide a solution for your Business, Advertising, Marketing, Branding, Printing Digital & Litho requirements. 
                        </p>

                        <div class="row justify-content-lg-between">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                                <div class="feature_primary_2 clearfix">
                                    <div class="item_icon bg_red">
                                        <i class="fa fa-print"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Screen Printing</h3>
                                        <p>
                                            We print T-shirts and garmets using screen printing which is affordable and durable.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".4s">
                                <div class="feature_primary_2 clearfix">
                                    <div class="item_icon bg_red">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Digital Printing</h3>
                                        <p>
                                            With Digital printing we can print even small detailed artworks which includes small fonts to maintain the quality.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                                <div class="feature_primary_2 clearfix">
                                    <div class="item_icon bg_red">
                                        <i class="fa fa-cube"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Large Format Printing</h3>
                                        <p>
                                            Large format Printing makes as cover all works needed to be presented in very large size such as billboards, large banners, tear drops and Stickers.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".6s">
                                <div class="feature_primary_2 clearfix">
                                    <div class="item_icon bg_red">
                                        <i class="fa fa-cog"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Offest Printing</h3>
                                        <p>
                                            With Offset Printing we ensure you with high quality and high speed printing. For large quantity of printing items in a limited time range, we are here for you to make it possible.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cricle_border">
            <img src="<?= base_url('/assets/images/about/circle_border.png') ?>" alt="icon_not_found">
        </div>
    </section>
    <!-- about_section - end
    ================================================== -->


    <!-- service_section - start
    ================================================== -->
    <section class="service_section sec_ptb_130 bg_gray clearfix" data-background="<?= base_url('/assets/images/backgrounds/bg_03.jpg') ?>">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                        <h2 class="big_title mb-0 text-light">
                            We Provide Lot’s Of Printing & Branding Service
                        </h2>
                        <span class="biggest_title">Services</span>
                    </div>
                </div>
            </div>

            <div class="row mb_80 justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                    <div class="service_card clearfix">
                        <a class="item_image" target="_blank" href="service_details.html">
                            <img src="<?= base_url('/assets/images/services/graphic.jpg') ?>" alt="image_not_found">
                        </a>
                        <div class="item_content">                            
                            <h3 class="item_title mb-0">Graphic Designing</h3>
                            <a class="icon_btn" target="_blank" href="<?= base_url('/graphic-design') ?>"><i class="fa fa-arrow-right text-secondary"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                    <div class="service_card clearfix">
                        <a class="item_image" target="_blank" href="service_details.html">
                            <img src="<?= base_url('/assets/images/services/t-shirts.jpg') ?>" alt="image_not_found">
                        </a>
                        <div class="item_content">                           
                            <h3 class="item_title mb-0">T-shirt Printing</h3>
                            <a class="icon_btn" target="_blank" href="<?= base_url('/tshirt-printing') ?>"><i class="fa fa-arrow-right text-secondary"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                    <div class="service_card clearfix">
                        <a class="item_image" target="_blank" href="service_details.html">
                            <img src="<?= base_url('/assets/images/services/signages.jpg') ?>" alt="image_not_found">
                        </a>
                        <div class="item_content">                            
                            <h3 class="item_title mb-0">2D & 3D Signages</h3>
                            <a class="icon_btn" target="_blank" href="<?= base_url('/signages') ?>"><i class="fa fa-arrow-right text-secondary"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                    <div class="service_card clearfix">
                        <a class="item_image" target="_blank" href="service_details.html">
                            <img src="<?= base_url('/assets/images/services/banners.jpg') ?>" alt="image_not_found">
                        </a>
                        <div class="item_content">                            
                            <h3 class="item_title mb-0">Banners and Stickers</h3>
                            <a class="icon_btn" target="_blank" href="<?= base_url('/banners-stickers') ?>"><i class="fa fa-arrow-right text-secondary"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                    <div class="service_card clearfix">
                        <a class="item_image" target="_blank" href="service_details.html">
                            <img src="<?= base_url('/assets/images/services/promotional.jpg') ?>" alt="image_not_found">
                        </a>
                        <div class="item_content">                            
                            <h3 class="item_title mb-0">Promotional Materials</h3>
                            <a class="icon_btn" target="_blank" href="<?= base_url('/promotional-materials') ?>"><i class="fa fa-arrow-right text-secondary"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                    <div class="service_card clearfix">
                        <a class="item_image" target="_blank" href="service_details.html">
                            <img src="<?= base_url('/assets/images/services/web.jpg') ?>" alt="image_not_found">
                        </a>
                        <div class="item_content">                            
                            <h3 class="item_title mb-0">Web Design and Development</h3>
                            <a class="icon_btn" target="_blank" href="https://bafrocodes.co.tz"><i class="fa fa-arrow-right text-secondary"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- service_section - end
    ================================================== -->
</main>
<?= $this->endSection() ?>
    
    