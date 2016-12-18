<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Kuntal Das</title>
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

			<section class="intro_section page_mainslider ds ms parallax">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/slide01.png" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 class="bottommargin_30">
														Thomas
														<br> Washington
													</h1>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<h4 class="bottommargin_40">American Politician</h4>
													<a href="calculator.html" class="theme_button wide_button inverse">Become Volunteer!</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide02.png" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 class="bottommargin_30">
														Angela
														<br> Davidsons
													</h1>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<h4 class="bottommargin_40">American Politician</h4>
													<a href="calculator.html" class="theme_button wide_button inverse">Become Volunteer!</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide03.png" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 class="bottommargin_30">
														Ronald
														<br> Gumpsons
													</h1>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<h4 class="bottommargin_40">American Politician</h4>
													<a href="calculator.html" class="theme_button wide_button inverse">Become Volunteer!</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>


					</ul>
				</div>
				<!-- eof flexslider -->
			</section>

			<section class="ls ms highlights darklinks section_padding_60">
				<div class="fluid-container">
					<div class="row">

						<div class="col-lg-4 col-md-12">
							<div class="highlight-item rounded ds">
								<div class="vertical-item" style="background-image: url('./images/highlight1.jpg');">
									<div class="item-content after_cover">
										<h4 class="topmargin_0">
											Candidate
											<br>
											<span class="fontsize_50">Biography</span>
										</h4>
										<a href="#" class="vidaloka">Know More</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12">
							<div class="highlight-item rounded ds">
								<div class="vertical-item" style="background-image: url('./images/highlight3.jpg');">
									<div class="item-content after_cover">
										<h4 class="topmargin_0">
											Program
											<br>
											<span class="fontsize_50">Highlights</span>
										</h4>
										<a href="#" class="vidaloka">Download PDF</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12">
							<div class="highlight-item rounded ds">
								<div class="vertical-item" style="background-image: url('./images/highlight2.jpg');">
									<div class="item-content after_cover">
										<h4 class="topmargin_0">
											Become
											<br>
											<span class="fontsize_50">Volunteer</span>
										</h4>
										<a href="#" class="vidaloka">Sign Up</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="ls section_padding_top_60">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="small-post widget widget_slider widget_featured with_padding after_cover darkgrey_bg rounded" style="background-image: url('images/featured_bg.jpg');">
								<!-- <div class="bg_overlay"></div> -->
								<h4 class="topmargin_-5 inline-block light">Featured</h4>
								<div class="owl-carousel" data-nav="true" data-loop="true" data-autoplay="false" data-items="1" data-margin="40" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
									<div class="vertical-item bottommargin_15">
										<ul class="media-list">
											<li class="media">
												<a class="media-left" href="blog-single-right.html">
													<div class="after_cover">
														<img class="media-object rounded" src="images/featured1.jpg" alt="">
													</div>
												</a>
												<div class="media-body">
													<p>
														<a href="blog-single-right.html" class="light">Consetur sadpscing elitr sed diam</a>
													</p>
													<p class="item-meta small-text grey2 margin_0">
														By
														<a href="#" class="grey2">Admin</a> on 12.05.2016
													</p>
												</div>
											</li>
											<li class="media">
												<a class="media-left" href="blog-single-right.html">
													<div class="after_cover">
														<img class="media-object rounded" src="images/featured2.jpg" alt="">
													</div>
												</a>
												<div class="media-body">
													<p>
														<a href="blog-single-right.html" class="light">Nonmy od tempor invidunt</a>
													</p>
													<p class="item-meta small-text grey2 margin_0">
														By
														<a href="#" class="grey2">Admin</a> on 09.05.2016
													</p>
												</div>
											</li>
											<li class="media">
												<a class="media-left" href="blog-single-right.html">
													<div class="after_cover">
														<img class="media-object rounded" src="images/featured3.jpg" alt="">
													</div>
												</a>
												<div class="media-body">
													<p>
														<a href="blog-single-right.html" class="light">Labore olore magna aliquyam erat.</a>
													</p>
													<p class="item-meta small-text grey2 margin_0">
														By
														<a href="#" class="grey2">Admin</a> on 03.05.2016
													</p>
												</div>
											</li>
										</ul>
									</div>

									<div class="vertical-item bottommargin_15">
										<ul class="media-list">
											<li class="media">
												<a class="media-left" href="blog-single-right.html">
													<div class="after_cover">
														<img class="media-object rounded" src="images/featured1.jpg" alt="">
													</div>
												</a>
												<div class="media-body">
													<p>
														<a href="blog-single-right.html" class="light">Consetur sadpscing elitr sed diam</a>
													</p>
													<p class="item-meta small-text grey2 margin_0">
														By
														<a href="#" class="grey2">Admin</a> on 12.05.2016
													</p>
												</div>
											</li>
											<li class="media">
												<a class="media-left" href="blog-single-right.html">
													<div class="after_cover">
														<img class="media-object rounded" src="images/featured2.jpg" alt="">
													</div>
												</a>
												<div class="media-body">
													<p>
														<a href="blog-single-right.html" class="light">Nonmy od tempor invidunt</a>
													</p>
													<p class="item-meta small-text grey2 margin_0">
														By
														<a href="#" class="grey2">Admin</a> on 09.05.2016
													</p>
												</div>
											</li>
											<li class="media">
												<a class="media-left" href="blog-single-right.html">
													<div class="after_cover">
														<img class="media-object rounded" src="images/featured3.jpg" alt="">
													</div>
												</a>
												<div class="media-body">
													<p>
														<a href="blog-single-right.html" class="light">Labore olore magna aliquyam erat.</a>
													</p>
													<p class="item-meta small-text grey2 margin_0">
														By
														<a href="#" class="grey2">Admin</a> on 03.05.2016
													</p>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>

						</div>

						<div class="col-md-4">
							<article class="vertical-item with_border post small-post rounded">
								<div class="item-media entry-thumbnail rounded">
									<img src="images/small_post01.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-single-right.html"></a>
									</div>
								</div>
								<div class="item-content entry-content text-center">
									<span class="categories-links">
										<a rel="category" href="blog-right.html" class="theme_button small_button color1">Meetings</a>
									</span>
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Eirmod tor unvidunt ut labore dolore</a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">07.05.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_10">
										Consetetur sadipscing elitr, seddiam nonumy eirmod tempor invidunt ut labore et dolore magna.
									</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="vertical-item with_border post small-post rounded">
								<div class="item-media entry-thumbnail rounded">
									<div class="embed-responsive embed-responsive-3by2">
										<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
											<img src="images/small_post02.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="item-content entry-content text-center">
									<span class="categories-links">
										<a rel="category" href="blog-right.html" class="theme_button small_button color1">Video Presentation</a>
									</span>
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Magna aliquyam erat, diam voluptua</a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">03.05.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_10">
										Stet clita kasd gubergren, no sea takimata sayunctus est Lorem ipsum dolor sit amet.
									</p>
								</div>
							</article>
						</div>

					</div>
				</div>
			</section>

			<section class="ls banners_section section_padding_60">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="flexslider ds">
								<ul class="slides">
									<li class="ls rounded">
										<img src="images/banner_slide01.jpg" alt="">
										<div class="slide_description_wrapper rounded" style="background-image: url(images/banner_slide01.jpg)">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="bottommargin_30 topmargin_0">
														<span class="highlight">Your</span>
														<br>
														<span class="highlight2">Support</span>
													</h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<h4 class="bottommargin_50">May Help Us</h4>
													<a href="calculator.html" class="theme_button wide_button color1">Make Donation</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</li>

									<li>
										<img src="images/banner_slide03.jpg" alt="">
										<div class="slide_description_wrapper rounded" style="background-image: url(images/banner_slide02.jpg)">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="bottommargin_30 topmargin_0">
														<span class="highlight">Become</span>
														<br>
														<span class="highlight2">Volunteer</span>
													</h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<h4 class="bottommargin_50 light">May Help Us</h4>
													<a href="calculator.html" class="theme_button wide_button color1">Sign Up Now!</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</li>

									<li>
										<img src="images/banner_slide03.jpg" alt="">
										<div class="slide_description_wrapper rounded" style="background-image: url(images/banner_slide03.jpg)">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="bottommargin_30 topmargin_0">
														<span class="highlight">Vote</span>
														<br>
														<span class="highlight2">For Me</span>
													</h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<h4 class="bottommargin_50 light">Make Your Choice</h4>
													<a href="calculator.html" class="theme_button wide_button color1">My Program</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</li>

								</ul>
							</div>
							<!-- eof flexslider -->
						</div>
					</div>
				</div>
			</section>

			<section class="ls">
				<div class="container">
					<div class="row bottommargin_10">
						<div class="col-sm-12">
							<article class="vertical-item with_border post wide-post rounded row columns_padding_0">
								<div class="col-md-4 fontsize_0">
									<div class="item-media entry-thumbnail">
										<img src="images/wide_post01.jpg" alt="" class="rounded">
										<div class="media-links">
											<a class="abs-link" title="" href="blog-single-right.html"></a>
										</div>
										<span class="categories-links">
											<a rel="category" href="blog-right.html" class="theme_button small_button color1">Meetings</a>
										</span>
									</div>
								</div>
								<div class="col-md-8 item-content entry-content">
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Eirmod tor unvidunt ut labore dolore</a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">03.05.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_0">
										Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores et ea rebum.
									</p>
								</div>
							</article>

							<article class="vertical-item with_border post wide-post rounded row columns_padding_0">
								<div class="col-md-4 fontsize_0">
									<div class="item-media entry-thumbnail">
										<img src="images/wide_post02.jpg" alt="" class="rounded">
										<div class="media-links">
											<a class="abs-link" title="" href="blog-single-right.html"></a>
										</div>
										<span class="categories-links">
											<a rel="category" href="blog-right.html" class="theme_button small_button color1">Electorat</a>
										</span>
									</div>
								</div>
								<div class="col-md-8 item-content entry-content">
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Stet clita kasd gubergren</a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">01.05.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_0">
										At vero eos accusam et justo duo dolores et ea rebum. Stet clita kasd gubergrena takimata sanctus est Lorem ipsum dolor siamet lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
									</p>
								</div>
							</article>

							<article class="vertical-item with_border post wide-post rounded row columns_padding_0">
								<div class="col-md-4 fontsize_0">
									<div class="item-media entry-thumbnail">
										<img src="images/wide_post03.jpg" alt="" class="rounded">
										<div class="media-links">
											<a class="abs-link" title="" href="blog-single-right.html"></a>
										</div>
										<span class="categories-links">
											<a rel="category" href="blog-right.html" class="theme_button small_button color1">Policy</a>
										</span>
									</div>
								</div>
								<div class="col-md-8 item-content entry-content">
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Lorem ipsum dolor consetetur</a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">29.04.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_0">
										Stet clita kasd gubergrena takimata sanctus est Lorem ipsum dolor siamet lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlbore et dolore magna aliquyam erat.
									</p>
								</div>
							</article>

						</div>
					</div>
				</div>
			</section>

			<section class="ls columns_padding_1 section_padding_top_60">
				<div class="container">
					<div class="row">

						<div class="col-lg-6 col-sm-12 col-lg-push-3">
							<div class="vertical-item content-absolute text-center rounded ds countdown-block">
								<div class="item-media">
									<img src="images/mansory03.jpg" alt="">
								</div>
								<div class="item-content darken_gradient">
									<div id="election-countdown"></div>
									<h4 class="margin_0">Election Campaign</h4>
									<h5 class="topmargin_0 bottommargin_15">It Begins
										<span class="highlight">May 31, 2016</span>
									</h5>
									<div class="media small-teaser inline-block">
										<div class="media-left">
											<i class="fa fa-map-marker highlight fontsize_14"></i>
										</div>
										<div class="media-body small-text">
											Camp Road, Owatonna, MN
										</div>
									</div>
									<div class="media small-teaser inline-block">
										<div class="media-left">
											<i class="fa fa-clock-o highlight fontsize_14"></i>
										</div>
										<div class="media-body small-text">
											08:00 AM - 05:00 PM
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- eof .col- -->

						<div class="col-lg-3 col-sm-6 col-lg-pull-6">
							<div class="vertical-item content-absolute text-center rounded ds">
								<div class="item-media">
									<img src="images/mansory01.jpg" alt="">
								</div>
								<div class="item-content darken_gradient">
									<h6>
										<a href="blog-single-right.html">Dolore magna aliquyam</a>
									</h6>
								</div>
							</div>
						</div>
						<!-- eof .col- -->

						<div class="col-lg-3 col-sm-6">
							<div class="vertical-item content-absolute text-center rounded ds">
								<div class="item-media">
									<img src="images/mansory04.jpg" alt="">
								</div>
								<div class="item-content darken_gradient">
									<h6>
										<a href="blog-single-right.html">Dolore magna aliquyam</a>
									</h6>
								</div>
							</div>
						</div>
						<!-- eof .col- -->

						<div class="col-lg-3 col-sm-6 col-lg-pull-6">
							<div class="vertical-item content-absolute text-center rounded ds">
								<div class="item-media">
									<img src="images/mansory02.jpg" alt="">
								</div>
								<div class="item-content darken_gradient">
									<h6>
										<a href="blog-single-right.html">Dolore magna aliquyam</a>
									</h6>
								</div>
							</div>
						</div>
						<!-- eof .col- -->

						<div class="col-lg-3 col-sm-6">
							<div class="vertical-item content-absolute text-center rounded ds">
								<div class="item-media">
									<img src="images/mansory05.jpg" alt="">
								</div>
								<div class="item-content darken_gradient">
									<h6>
										<a href="blog-single-right.html">Dolore magna aliquyam</a>
									</h6>
								</div>
							</div>
						</div>
						<!-- eof .col- -->

					</div>
				</div>
			</section>

			<section class="ls section_padding_top_60 section_padding_bottom_100">
				<div class="container">
					<div class="row bottommargin_10">
						<div class="col-md-4">
							<article class="vertical-item with_border post small-post rounded">
								<div class="item-media entry-thumbnail rounded">
									<img src="images/small_post03.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-single-right.html"></a>
									</div>
								</div>
								<div class="item-content entry-content text-center">
									<span class="categories-links">
										<a rel="category" href="blog-right.html" class="theme_button small_button color1">Elections</a>
									</span>
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Lorem ipsum dolor consetetur</a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">06.05.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_10">
										Stet clita kasd gubergrena takimata sanctus est Lorem ipsum dolor siamet lorem
									</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="vertical-item with_border post small-post rounded">
								<div class="item-media entry-thumbnail rounded">
									<img src="images/small_post04.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-single-right.html"></a>
									</div>
								</div>
								<div class="item-content entry-content text-center">
									<span class="categories-links">
										<a rel="category" href="blog-right.html" class="theme_button small_button color1">Meetings</a>
									</span>
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Adipscing elitr sedi nonumy eirmod</a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">04.05.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_10">
										Ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.
									</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="vertical-item with_border post small-post rounded">
								<div class="item-media entry-thumbnail rounded">
									<img src="images/small_post05.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-single-right.html"></a>
									</div>
								</div>
								<div class="item-content entry-content text-center">
									<span class="categories-links">
										<a rel="category" href="blog-right.html" class="theme_button small_button color1">Program</a>
									</span>
									<h4 class="bottommargin_10 topmargin_0">
										<a href="blog-single-right.html">Tempor invidunt ut labore et dolore </a>
									</h4>
									<span class="entry-author small-text">
										<i class="fa fa-user grey"></i>
										<span>Admin</span>
									</span>
									<span class="entry-date small-text">
										<i class="fa fa-calendar grey"></i>
										<time datetime="2016-09-03T15:05:23+00:00">07.05.2016</time>
									</span>
									<p class="topmargin_30 bottommargin_10">
										Dolore magna aliquyam erat sed diam voluptua vereos accusam et justo duo.
									</p>
								</div>
							</article>
						</div>

					</div>
				</div>
			</section>

			<section class="cs parallax section_padding_60 main_color2 subscribe columns_margin_0">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4 class="margin_0">Subscribe to Our Newsletter</h4>
							<h5 class="topmargin_0">We promice not to spam</h5>
							<div class="widget widget_mailchimp topmargin_40">
								<form class="signup form-inline" action="/" method="get">
									<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control with-icon">
									</div>
									<button type="submit" class="fa fa-envelope form-button">
										<span class="sr-only">Send</span>
									</button>
									<div class="response"></div>
								</form>
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