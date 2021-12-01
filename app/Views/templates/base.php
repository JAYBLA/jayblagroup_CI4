<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title><?=$title?> | Jaybla Group</title>
		<link rel="shortcut icon" href="<?= base_url('/assets/images/logo/favourite_icon_01.png') ?>">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">

		<!-- icon - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/flaticon.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/font-awesome.min.css') ?>">

		<!-- animation - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/animate.css') ?>">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/owl.carousel.min.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/owl.theme.default.min.css') ?>">

		<!-- nice select - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/nice-select.css') ?>">

		<!-- magnific popup - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/magnific-popup.css') ?>">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/style.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/custom.css') ?>">

		<!-- Side Social Icons -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/reset.css') ?>">


		<!-- Sweet alert -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.5/dist/sweetalert2.min.css">
		<?= $this->renderSection('stylesheet') ?>
	</head>


	<body>
		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div id="backtotop">
			<a href="#" id="scroll">
				<i class="fa fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<div class="preloader">
			<div class="animation_preloader">
				<div class="spinner"></div>
				<p class="text-center">Loading..</p>
			</div>
			<div class="loader">
				<div class="row vh-100">
					<div class="col-3 loader_section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader_section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader_section section-right">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader_section section-right">
						<div class="bg"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- preloader - end -->


		<!-- header_section - start
		================================================== -->
		<header class="header_section sticky_header secondary_header clearfix">
			<div class="header_top bg_red clearfix">
				<div class="maxw_1420 container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<ul class="header_contact_info ul_li clearfix">
								<li><i class="fa fa-map-marker text-light"></i> P.O. Box 2124 Morogoro-Tanzania</li>
								<li><i class="fa fa-envelope text-light"></i> info@jayblagroup.com</li>
							</ul>
						</div>

						<div class="col-lg-6">
							<ul class="header_items_list ul_li_right clearfix">
								<li>
									<ul class="header_contact_info ul_li clearfix">
										<li><i class="fa fa-clock-o text-light"></i> Monday - Saturday, 08:00 am - 07:30 pm</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="header_bottom">
				<div class="maxw_1420 container">
					<div class="row align-items-center">

						<div class="col-lg-3">
							<div class="brand_logo">
								<a href="/">
									<img src="<?= base_url('/assets/images/logo/header-logo.png') ?>" alt="logo_not_found">
								</a>

								<ul class="mobilemenu_btns_group ul_li_right clearfix">
									<li>
										<button type="button" class="mobile_menu_btn"><i class="fa fa-bars"></i></button>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									<li class="active">
										<a href="/">Home</a>
									</li>
									<li class="has_child">
										<a href="">Services We Provide</a>
										<ul class="submenu">
											<li><a href="<?= base_url('/graphic-design' ) ?>">Graphic Designing</a></li>
											<li><a href="<?= base_url('/tshirt-printing' ) ?>">T-shirt Printing</a></li>
											<li><a href="<?= base_url('/signages' ) ?>">2D & 3D Signages</a></li>
											<li><a href="<?= base_url('/banners-stickers' ) ?>">Banners and Stickers</a></li>
											<li><a href="<?= base_url('/promotional-materials' ) ?>">Promotion Materials</a></li>
											<li><a href="https://bafrocodes.co.tz" target="_blank">Web Design & Development</a></li>
										</ul>
									</li>
									<li><a href="<?= base_url('/contact') ?>">Contact Us</a></li>									
								</ul>
							</nav>
						</div>

						<div class="col-lg-3">
							<ul class="header_icon_btns ul_li_right clearfix">
								<li>
									<button type="button" class="mobile_menu_btn">
										<img src="<?= base_url('/assets/images/icons/bar_dot_1x.png') ?>" alt="logo_not_found">
									</button>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</header>
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->            
		<?= $this->renderSection('content') ?>
        
		<!-- main body - end
		================================================== -->
		<ul id="social-sidebar">
			<li>
			  <a class="entypo-twitter" href="https://twitter.com/Jaybla_group" target="_blank"><i class="fa fa-twitter"></i><span> Twitter</span></a>
			</li>
			<li>
			  <a class="entypo-facebook" href="https://facebook.com/Jaybla.Group/" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
			</li>
			<li>
			  <a class="entypo-instagram" href="https://www.instagram.com/jaybla_group/" target="_blank"><i class="fa fa-instagram"></i><span>Instagram</span></a>
			</li>
			<li>
			  <a class="entypo-whatsapp" href="https://wa.link/kza0kf" target="_blank"><i class="fa fa-whatsapp"></i><span>WhatsApp</span></a>
			</li>
		  </ul>
		<!-- footer_section - start
		================================================== -->
		<footer class="footer_section bg_gray">
			<div class="container">
				<div class="footer_widget_area clearfix">
					<div class="row justify-content-lg-between">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title">Quick Links</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="/">Home</a></li>
									<li><a href="<?= base_url('/contact') ?>">Contact Us </a></li>
									<!-- <li><a href="">Latest News</a></li>								
									<li><a href="">Win Awards</a></li> -->
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title">Services</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="<?= base_url('/graphic-design') ?>">Graphic Designing</a></li>
									<li><a href="<?= base_url('/tshirt-printing') ?>">T-shirt Printing</a></li>
									<li><a href="<?= base_url('/signages') ?>">2D & 3D Signages</a></li>
									<li><a href="<?= base_url('/banners-stickers') ?>">Banners and Stickers</a></li>
									<li><a href="<?= base_url('/promotional-materials') ?>">Promotion Materials</a></li>
									<li><a href="https://bafrocodes.co.tz" target="_blank">Web Design & Development</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="widget footer_contact_form">
								<h3 class="footer_widget_title">Contacts</h3>
								<span class="footer_hotline"><a href="tel:+255786511891"><i class="fa fa-phone"></i>+255786511891</a></span><br>
								<span class="footer_hotline"><a href="tel:+255768284698"><i class="fa fa-phone"></i>+255768284698</a></span><br>
								<span class="footer_hotline"><a href="mailto:info@jayblagroup.com"><i class="fa fa-envelope"></i>info@jayblagroup.com</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid copyright-footer-top mb-0">
			</div>
			<div class="container-fluid copyright-footer-top2 mb-0">
			</div>
			<div class="container-fluid text-center copyright-footer py-3 mb-0">
				<p class="copyright_text mb-0 text-light">&copy;<script>document.write(new Date().getFullYear())</script> Jaybla Group || All Right Reserved </p>
			</div>
		</footer>
		<!-- footer_section - end
		================================================== -->


		<!-- fraimwork - jquery include -->
		<script src="<?= base_url('/assets/js/jquery-3.5.1.min.js') ?>"></script>
		<script src="<?= base_url('/assets/js/popper.min.js') ?>"></script>
		<script src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script>

		<!-- carousel - jquery include -->
        <script src="<?= base_url('/assets/js/owl.carousel.min.js') ?>"></script>

		<!-- mobile menu - jquery include -->
        <script src="<?= base_url('/assets/js/mCustomScrollbar.js') ?>"></script>

		<!-- nice select - jquery include -->
        <script src="<?= base_url('/assets/js/nice-select.min.js') ?>"></script>

		<!-- circle progress - jquery include -->
        <script src="<?= base_url('/assets/js/circle-progress.min.js') ?>"></script>

		<!-- magnific popup - jquery include -->
        <script src="<?= base_url('/assets/js/magnific-popup.min.js') ?>"></script>

        <!-- filter & masonry js -->
		<script src="<?= base_url('/assets/js/isotope.pkgd.js') ?>"></script>
		<script src="<?= base_url('/assets/js/imagesloaded.pkgd.min.js') ?>"></script>
		<script src="<?= base_url('/assets/js/masonry.pkgd.min.js') ?>"></script>

		<!-- counter - jquery include -->
		<script src="<?= base_url('/assets/js/countto.js') ?>"></script>

		<!-- pricing range - jquery include -->
		<script src="<?= base_url('/assets/js/jquery-ui.js') ?>"></script>

		<!-- animation - jquery include -->
		<script src="<?= base_url('/assets/js/parallax.min.js') ?>"></script>
		<script src="<?= base_url('/assets/js/wow.min.js') ?>"></script>

		<!-- custom - jquery include -->
		<script src="<?= base_url('/assets/js/custom.js') ?>"></script>

		<script src="<?= base_url('/assets/js/sweetalert2.js') ?>"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
			$(document).ready(function () {
				<?php if(session()->getFlashdata('status')){?>
					swal({
						title: "<?= session()->getFlashdata('status') ?>",
						text: "<?= session()->getFlashdata('status_txt') ?>",
						icon: "<?= session()->getFlashdata('status_icon') ?>",
						button: "OK!",
					});
				<?php } ?>
			});
		</script>
	
		
		<?= $this->renderSection('javascript') ?>
			
	</body>
</html>