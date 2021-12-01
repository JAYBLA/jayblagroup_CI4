<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
	<style>
		.contact_content a{
			color: #000 !important;
		}
	</style>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<main>

		<?= $this->include('templates/includes/right-side-menu') ?>

    
			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="<?= base_url('/assets/images/breadcrumb/bg.jpg') ?>">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">Contact Us</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li>Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- contact_section - start
			================================================== -->
			<section class="contact_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_content">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">Contact Us</h4>
									<h2 class="big_title mb-0">
										Have Anything to Discuss with US?, Contact Now!
									</h2>
									<span class="biggest_title">Contact</span>
								</div>
								<ul class="contact_information_list ul_li_block clearfix">
									<li class="wow fadeInUp2" data-wow-delay=".3s">
										<div class="item_icon bg_red"><i class="fa fa-map-marker text-light"></i></div>
										<div class="item_content">
											<h4>Locations</h4>
											<p>P.O. Box 2124 Morogoro-Tanzania</p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".4s">
										<div class="item_icon bg_red"><i class="fa fa-envelope text-light"></i></div>
										<div class="item_content">
											<h4>Email Us</h4>
											<p>info@jayblagroup.com</p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".5s">
										<div class="item_icon bg_red"><i class="fa fa-phone text-light"></i></div>
										<div class="item_content">
											<h4>Phone Us</h4>
											<p><a href="tel:+255786511891">+255786511891</a></p>
											<p><a href="tel:+255768284698">+255768284698</a></p>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 shadow p-4">
							<div class="contact_form">
							<?= service('validation')->listErrors() ?>
								<form id="Contact-Form" action="/contact" method="POST">
								<?= csrf_field() ?>
									<div class="form_item wow fadeInUp2" data-wow-delay=".1s">
										<span class="input_title">Full Name</span>
										<div class="position-relative">											
											<input type="text" name="full_name"  placeholder="Write Full Name" class="form-control">                                       
											<label class="input_icon" for="input_user"><i class="fa fa-user"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".2s">
										<span class="input_title">Email Address</span>
										<div class="position-relative">
											<input type="text" name="email"  placeholder="Email Address" class="form-control">
											<label class="input_icon" for="input_email"><i class="fa fa-envelope"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".3s">
										<span class="input_title">Phone Number</span>
										<div class="position-relative">
											<input type="text" name="phone"  placeholder="Phone Number" class="form-control">
											<label class="input_icon" for="input_phone"><i class="fa fa-phone"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".4s">
										<span class="input_title">Leave A Message</span>
										<textarea name="message" placeholder="Leave your message" class="form-control"></textarea>
									</div>

									<button type="submit" class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".5s">
										send message 
										<span><i class="fa fa-arrow-right"></i></span>
									</button>					
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- contact_section - end
			================================================== -->
</main>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
	
<?= $this->endSection() ?>
    
    