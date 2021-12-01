<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
<main>
	<?= $this->include('templates/includes/right-side-menu') ?>

    			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="<?= base_url('/assets/images/breadcrumb/bg.jpg') ?>">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">T-shirt Printing</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li>T-shirt Printing</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- details_section - start
			================================================== -->
			<section class="details_section service_details sec_ptb_130 bg_gray clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-8 col-md-8">
							<div class="details_content">
								<div class="wow fadeInUp2" data-wow-delay=".1s">
									<h2 class="item_title mb_15">T-shirt Printing</h2>
								</div>

								<div class="details_image mb_30 wow fadeInUp2" data-wow-delay=".3s">
									<img src="<?= base_url('/assets/images/services/t-shirts.jpg') ?>" alt="image_not_found">
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-8">
							<aside class="sidebar_section clearfix">								

								<div class="widget wow fadeInUp2 sb_service_category" data-wow-delay=".1s">
									<h4 class="item_title mb_15">We Offer;</h4>
									<ul class="ul_li_block clearfix">
										<li><i class="fa fa-chevron-right"></i> Screen Printing</li>
										<li><i class="fa fa-chevron-right"></i> Sublimation Printing</li>
										<li><i class="fa fa-chevron-right"></i> DTF Printing</li>
										<li><i class="fa fa-chevron-right"></i> Silk Printing</li>
										<li><i class="fa fa-chevron-right"></i> Heat Transfer</li>
										<li><i class="fa fa-chevron-right"></i> Caps Printing</li>
										<li><i class="fa fa-chevron-right"></i> Hoods Printing</li>
										<li><i class="fa fa-chevron-right"></i> School Uniforms</li>								
									</ul>
								</div>								
							</aside>
						</div>
						
					</div>
				</div>
			</section>
			<!-- details_section - end
			================================================== -->
</main>
<?= $this->endSection() ?>
    
    