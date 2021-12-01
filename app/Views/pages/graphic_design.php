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
							<h1 class="page_title mb-0">Graphic Design</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li>Graphic Design</li>
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
									<h2 class="item_title mb_15">Graphic Design</h2>
								</div>

								<div class="details_image mb_30 wow fadeInUp2" data-wow-delay=".3s">
									<img src="<?= base_url('/assets/images/services/graphic.jpg') ?>" alt="image_not_found">
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-8">
							<aside class="sidebar_section clearfix">								

								<div class="widget wow fadeInUp2 sb_service_category" data-wow-delay=".1s">
									<h4 class="item_title mb_15">We Offer;</h4>
									<ul class="ul_li_block clearfix">
										<li><i class="fa fa-chevron-right"></i> Logo Design</li>
										<li><i class="fa fa-chevron-right"></i> Corporate Identity</li>
										<li><i class="fa fa-chevron-right"></i> Business Cards</li>
										<li><i class="fa fa-chevron-right"></i> Letterhead and Envelopes</li>
										<li><i class="fa fa-chevron-right"></i> Brochures & Flyers</li>
										<li><i class="fa fa-chevron-right"></i> Product Labels & Packaging</li>
										<li><i class="fa fa-chevron-right"></i> Catalogues</li>
										<li><i class="fa fa-chevron-right"></i> Magazine Adverts</li>
										<li><i class="fa fa-chevron-right"></i> Newspaper Adverts</li>
										<li><i class="fa fa-chevron-right"></i> Posters</li>
										<li><i class="fa fa-chevron-right"></i> Calendars</li>
										<li><i class="fa fa-chevron-right"></i> Folders</li>
										<li><i class="fa fa-chevron-right"></i> Wedding Invitations</li>
										<li><i class="fa fa-chevron-right"></i> Diaries</li>
										<li><i class="fa fa-chevron-right"></i> Stickers</li>
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
    
    