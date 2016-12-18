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
							<h1>Gallery Regular 2 columns</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Gallery</a>
								</li>
								<li class="active">Gallery Regular 2 columns</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls page_portfolio section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="filters isotope_filters text-center">
								<a href="#" data-filter="*" class="selected">All</a>
								<a href="#" data-filter=".program">Program</a>
								<a href="#" data-filter=".meetings">Meetings</a>
								<a href="#" data-filter=".electorat">Electorat</a>
								<a href="#" data-filter=".policy">Policy</a>
								<a href="#" data-filter=".elections">Elections</a>
							</div>

							<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 elections">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 meetings">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 electorat">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 policy">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/04.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 program">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/05.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 elections">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/06.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/06.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 meetings">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/07.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/07.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 electorat">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/08.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/08.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 electorat">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/09.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/09.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 program">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/10.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/10.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 elections">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/11.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/11.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-6 col-sm-12 policy">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media">
											<img src="images/gallery/12.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/12.jpg"></a>
													<a class="p-link" title="" href="gallery-single.html"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h5 class="item-meta ">
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>

							</div>
							<!-- eof .isotope_container.row -->

							<div class="row">
								<div class="col-sm-12 text-center">
									<div>
										<ul class="pagination">
											<li>
												<a href="#">
													<i class="rt-icon2-keyboard_arrow_left"></i>
													<span class="sr-only">Prev</span>
												</a>
											</li>
											<li class="active">
												<a href="#">1</a>
											</li>
											<li>
												<a href="#">2</a>
											</li>
											<li>
												<a href="#">3</a>
											</li>
											<li>
												<a href="#">4</a>
											</li>
											<li>
												<a href="#">5</a>
											</li>
											<li>
												<a href="#">
													<i class="rt-icon2-keyboard_arrow_right"></i>
													<span class="sr-only">Next</span>
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