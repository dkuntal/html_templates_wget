<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Title</title>
	<meta charset="utf-8">
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<?php include('files/overhead.php'); ?>

			<?php include('files/menu.php'); ?>

			<section class="page_breadcrumbs ds parallax section_padding_45 column_margin_0">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1>Single Item</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Gallery</a>
								</li>
								<li class="active">Single Item</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls section_padding_110 section_padding_bottom_25">
				<div class="container">
					<div class="row">

						<div class="col-md-10 col-md-push-1 text-center">

							<h1 class="entry-title gallery-single-title">
								Image title
							</h1>

							<div class="bottommargin_40 categories-links">
								<a rel="category" href="blog-right.html" class="theme_button small_button color1">Category 1</a>
								<a rel="category" href="blog-right.html" class="theme_button small_button color1">Category 2</a>
							</div>

							<div class="vertical-item gallery-extended-item bottom-rounded with_border text-center">

								<div class="item-media">
									<img src="images/gallery/01.jpg" alt="">
									<div class="media-links">
										<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a>
									</div>
								</div>


								<div class="item-content">

									<p class="entry-excerpt grey bottommargin_20">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste placeat, deleniti. Veritatis, praesentium, et! Voluptate iusto aliquid quis, optio dolore quas non eveniet aut.
									</p>
									<p>
										Ham laborum officia pork chop jowl sint. Est meatloaf turducken esse deserunt jerky ut. Est tongue pastrami nulla ea leberkas sed, esse ut do elit consequat eiusmod. Rump occaecat magna officia ullamco int pig drumstick biltong in pork chop chuck ut esse.
									</p>
									<div class="page_social_icons topmargin_40">
										<a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
										<a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
										<a class="social-icon color-icon soc-google" href="#" title="Google"></a>
										<a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
										<a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
									</div>
								</div>
							</div>


						</div>

					</div>
				</div>
			</section>

			<section class="ls gallery-section section_padding_bottom_75 section_padding_top_60">
				<div class="container-fluid">

					<div class="row columns_padding_0">
						<div class="col-xs-12">
							<div class="owl-carousel" data-margin="20" data-nav="true" data-items="6" data-themeclass="hover-scale" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="2" data-responsive-xs="1">

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/01.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Consetetur sadipscing</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">maid services</a>
										</span>
									</div>
								</div>

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/02.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Elitr sed diam nonumy</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">domestic cleaning</a>
										</span>
									</div>
								</div>

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/03.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Tempor invidunt ut labore</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">office cleaning</a>
										</span>
									</div>
								</div>

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/04.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Elitr sed diam nonumy</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">maid services</a>
										</span>
									</div>
								</div>

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/05.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Tempor invidunt ut labore</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">window cleaning</a>
										</span>
									</div>
								</div>

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/06.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Elitr sed diam nonumy</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">maid services</a>
										</span>
									</div>
								</div>

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/07.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Dolore magna aliquyam</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">domestic cleaning</a>
										</span>
									</div>
								</div>

								<div class="vertical-item title-absolute">
									<div class="item-media gallery-title-item">
										<img src="images/gallery/08.jpg" alt="">
										<div class="media-links">
											<a class="abs-link p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a>
										</div>
									</div>
									<div class="item-title small-item text-center">
										<h4>
											<a href="gallery-single.html">Consetetur sadipscing</a>
										</h4>
										<span class="categories-links">
											<a rel="category" href="#" class="theme_button small_button color1">pest control</a>
										</span>
									</div>
								</div>

							</div>
							<!-- .owl-carousel -->
						</div>
					</div>
				</div>
			</section>

			<?php include('files/footer.php'); ?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>

</html>