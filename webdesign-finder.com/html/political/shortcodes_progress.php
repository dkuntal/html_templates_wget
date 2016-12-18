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
							<h1>Progress Bars</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shortcodes</a>
								</li>
								<li class="active">Progress Bars</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls ms section_padding_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="topmargin_0">Progress Bars</h2>
						</div>
						<div class="col-sm-6">

							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
									<span>90%</span>
								</div>
							</div>

							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="52">
									<span>52%</span>
								</div>
							</div>

						</div>
						<div class="col-sm-6">

							<div class="progress">
								<div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="75">
									<span>75%</span>
								</div>
							</div>

							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="95">
									<span>95%</span>
								</div>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="divider_40">Pie Chars</h2>

							<div class="row text-center">
								<div class="col-sm-4">
									<div class="chart" data-percent="96">
										<span class="percent"></span>
										<h4>HTML,CSS</h4>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="chart" data-percent="98">
										<span class="percent"></span>
										<h4>PHOTOSHOP</h4>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="chart" data-percent="88">
										<span class="percent"></span>
										<h4>PHP</h4>
									</div>
								</div>

							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="divider_40">Progress Teasers</h2>
						</div>
						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon grey size_big">
									<i class="rt-icon2-bulb"></i>
								</div>
								<h3 class="counter-wrap highlight" data-from="0" data-to="40" data-speed="1800">
									<span class="counter" data-from="0" data-to="20" data-speed="1500">0</span>
									<span class="counter-add">+</span>
								</h3>
								<p>Projects</p>
							</div>

						</div>

						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon grey size_big">
									<i class="rt-icon2-banknote"></i>
								</div>
								<h3 class="counter highlight" data-from="0" data-to="19350" data-speed="2100">0</h3>
								<p>Dollars</p>
							</div>

						</div>


						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon grey size_big">
									<i class="rt-icon2-user"></i>
								</div>
								<h3 class="counter highlight" data-from="0" data-to="1256" data-speed="1400">0</h3>
								<p>Users</p>
							</div>

						</div>

						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon grey size_big">
									<i class="rt-icon2-like"></i>
								</div>
								<h3 class="highlight counter-wrap">
									<span class="counter" data-from="0" data-to="100000" data-speed="1500">0</span>
									<span class="counter-add">+</span>
								</h3>
								<p>Likes</p>
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