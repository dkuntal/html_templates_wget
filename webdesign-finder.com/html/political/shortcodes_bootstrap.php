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
							<h1>Bootstrap</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shortcodes</a>
								</li>
								<li class="active">Bootstrap</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls ms section_padding_50">
				<div class="container">
					<h2 class="text-center topmargin_0">Bootstrap Alerts</h2>
					<div class="row">
						<div class="col-sm-12">

							<div class="alert alert-success" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">×</span>
									<span class="sr-only">Close</span>
								</button>
								<strong>Well done!</strong> You successfully read this important alert message.
							</div>
							<div class="alert alert-info" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">×</span>
									<span class="sr-only">Close</span>
								</button>
								<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
							</div>
							<div class="alert alert-warning" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">×</span>
									<span class="sr-only">Close</span>
								</button>
								<strong>Warning!</strong> Better check yourself, you're not looking too good.
							</div>
							<div class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">×</span>
									<span class="sr-only">Close</span>
								</button>
								<strong>Oh snap!</strong> Change a few things up and try submitting again.
							</div>

						</div>
					</div>

					<h2 class="text-center divider_40">Bootstrap Thumbnails</h2>
					<div class="row">
						<div class="col-sm-4">
							<div class="thumbnail">
								<img src="images/team/01.jpg" alt="">
								<div class="caption">
									<h3>
										<a href="team-single.html">Michael Bean</a>
									</h3>
									<p>Director</p>
									<p class="text-center social-icons">
										<a class="social-icon soc-facebook" href="#" title="Facebook" data-toggle="tooltip"></a>
										<a class="social-icon soc-twitter" href="#" title="Twitter" data-toggle="tooltip"></a>
										<a class="social-icon soc-google" href="#" title="Google" data-toggle="tooltip"></a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="thumbnail">
								<img src="images/team/02.jpg" alt="">
								<div class="caption">
									<h3>
										<a href="team-single.html">Mohamed Rahum</a>
									</h3>
									<p>SEO</p>
									<p class="text-center social-icons">
										<a class="social-icon soc-facebook" href="#" title="Facebook" data-toggle="tooltip"></a>
										<a class="social-icon soc-twitter" href="#" title="Twitter" data-toggle="tooltip"></a>
										<a class="social-icon soc-google" href="#" title="Google" data-toggle="tooltip"></a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="thumbnail">
								<img src="images/team/03.jpg" alt="">
								<div class="caption">
									<h3>
										<a href="team-single.html">Whitney Johnson</a>
									</h3>
									<p>Developer</p>
									<p class="text-center social-icons">
										<a class="social-icon soc-facebook" href="#" title="Facebook" data-toggle="tooltip"></a>
										<a class="social-icon soc-twitter" href="#" title="Twitter" data-toggle="tooltip"></a>
										<a class="social-icon soc-google" href="#" title="Google" data-toggle="tooltip"></a>
									</p>
								</div>
							</div>

						</div>

					</div>

					<div class="row">
						<div class="col-sm-6">
							<h3>Bootstrap Pagination</h3>
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
						<div class="col-sm-6">
							<h3>Testimonials Carousel</h3>
							<div id="carousel-media" class="carousel slide testimonials-carousel" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-media" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-media" data-slide-to="1"></li>
									<li data-target="#carousel-media" data-slide-to="2"></li>
								</ol>


								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object" src="images/team/01.jpg" alt="">
											</a>
											<div class="media-body">
												<h4>Jhon Smith</h4>
												<p>
													Google Inc.
												</p>
											</div>
										</div>
										<p>
											Ullamco laboris nialiquid exea commodi consat. Ut enim minim veniam norud exotation.
										</p>
									</div>

									<div class="item">
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object" src="images/team/02.jpg" alt="">
											</a>
											<div class="media-body">
												<h4>Michael Anderson</h4>
												<p>
													Google Inc.
												</p>
											</div>
										</div>
										<p>
											Ullamco laboris nialiquid exea commodi consat. Ut enim minim veniam norud exotation.
										</p>
									</div>

									<div class="item">
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object" src="images/team/03.jpg" alt="">
											</a>
											<div class="media-body">
												<h4>Michael Anderson</h4>
												<p>
													Google Inc.
												</p>
											</div>
										</div>
										<p>
											Ullamco laboris nialiquid exea commodi consat. Ut enim minim veniam norud exotation.
										</p>
									</div>


								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-media" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-media" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
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