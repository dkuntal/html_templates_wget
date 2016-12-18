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
							<h1>Buttons</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shortcodes</a>
								</li>
								<li class="active">Buttons</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms section_padding_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header">Buttons in Light Section</h2>
							<h3>Simple Buttons</h3>

							<div>
								<a class="theme_button" href="#">Theme Button</a>
								<a class="theme_button color1" href="#">Main Color 1 Theme Button</a>
								<a class="theme_button color2" href="#">Main Color 2 Theme Button</a>
								<a class="theme_button inverse" href="#">Inverse Theme Button</a>

							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h2 class="thin">Icon Buttons</h2>
							<a href="#" class="theme_button">Glyphicon Button
								<i class="glyphicon glyphicon-ok"></i>
							</a>
							<a href="#" class="theme_button inverse">
								<i class="glyphicon glyphicon-heart"></i> Glyphicon Button</a>

							<a href="#" class="theme_button color1">Rt-Icon Button
								<i class="rt-icon2-gift"></i>
							</a>
							<a href="#" class="theme_button color2">
								<i class="rt-icon2-star-outline"></i> Rt-Icon Button</a>

							<a href="#" class="theme_button color1">
								<i class="fa fa-external-link"></i> Font Awesome Button</a>
							<a href="#" class="theme_button color2">Font Awesome Button
								<i class="fa fa-info-circle"></i>
							</a>
						</div>


					</div>
				</div>
			</section>


			<section class="ls section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header">Buttons in Grey Section</h2>
							<h3>Simple Buttons</h3>

							<div>
								<a class="theme_button" href="#">Theme Button</a>
								<a class="theme_button color1" href="#">Main Color 1 Theme Button</a>
								<a class="theme_button color2" href="#">Main Color 2 Theme Button</a>
								<a class="theme_button inverse" href="#">Inverse Theme Button</a>

							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h2 class="thin">Icon Buttons</h2>
							<a href="#" class="theme_button">Glyphicon Button
								<i class="glyphicon glyphicon-ok"></i>
							</a>
							<a href="#" class="theme_button inverse">
								<i class="glyphicon glyphicon-heart"></i> Glyphicon Button</a>

							<a href="#" class="theme_button color1">Rt-Icon Button
								<i class="rt-icon2-gift"></i>
							</a>
							<a href="#" class="theme_button color2">
								<i class="rt-icon2-star-outline"></i> Rt-Icon Button</a>

							<a href="#" class="theme_button color1">
								<i class="fa fa-external-link"></i> Font Awesome Button</a>
							<a href="#" class="theme_button color2">Font Awesome Button
								<i class="fa fa-info-circle"></i>
							</a>
						</div>


					</div>
				</div>
			</section>


			<section class="cs section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header">Buttons in Color Section</h2>
							<h3>Simple Buttons</h3>

							<div>
								<a class="theme_button" href="#">Theme Button</a>
								<a class="theme_button color1" href="#">Main Color 1 Theme Button</a>
								<a class="theme_button color2" href="#">Main Color 2 Theme Button</a>
								<a class="theme_button inverse" href="#">Inverse Theme Button</a>

							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h2 class="thin">Icon Buttons</h2>
							<a href="#" class="theme_button">Glyphicon Button
								<i class="glyphicon glyphicon-ok"></i>
							</a>
							<a href="#" class="theme_button inverse">
								<i class="glyphicon glyphicon-heart"></i> Glyphicon Button</a>

							<a href="#" class="theme_button color1">Rt-Icon Button
								<i class="rt-icon2-gift"></i>
							</a>
							<a href="#" class="theme_button color2">
								<i class="rt-icon2-star-outline"></i> Rt-Icon Button</a>

							<a href="#" class="theme_button color1">
								<i class="fa fa-external-link"></i> Font Awesome Button</a>
							<a href="#" class="theme_button color2">Font Awesome Button
								<i class="fa fa-info-circle"></i>
							</a>
						</div>


					</div>
				</div>
			</section>


			<section class="ds ms section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header">Buttons in Darkgrey Section</h2>
							<h3>Simple Buttons</h3>

							<div>
								<a class="theme_button" href="#">Theme Button</a>
								<a class="theme_button color1" href="#">Main Color 1 Theme Button</a>
								<a class="theme_button color2" href="#">Main Color 2 Theme Button</a>
								<a class="theme_button inverse" href="#">Inverse Theme Button</a>

							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h2 class="thin">Icon Buttons</h2>
							<a href="#" class="theme_button">Glyphicon Button
								<i class="glyphicon glyphicon-ok"></i>
							</a>
							<a href="#" class="theme_button inverse">
								<i class="glyphicon glyphicon-heart"></i> Glyphicon Button</a>

							<a href="#" class="theme_button color1">Rt-Icon Button
								<i class="rt-icon2-gift"></i>
							</a>
							<a href="#" class="theme_button color2">
								<i class="rt-icon2-star-outline"></i> Rt-Icon Button</a>

							<a href="#" class="theme_button color1">
								<i class="fa fa-external-link"></i> Font Awesome Button</a>
							<a href="#" class="theme_button color2">Font Awesome Button
								<i class="fa fa-info-circle"></i>
							</a>
						</div>


					</div>
				</div>
			</section>


			<section class="ds section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header">Buttons in Dark Section</h2>
							<h3>Simple Buttons</h3>

							<div>
								<a class="theme_button" href="#">Theme Button</a>
								<a class="theme_button color1" href="#">Main Color 1 Theme Button</a>
								<a class="theme_button color2" href="#">Main Color 2 Theme Button</a>
								<a class="theme_button inverse" href="#">Inverse Theme Button</a>

							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h2 class="thin">Icon Buttons</h2>
							<a href="#" class="theme_button">Glyphicon Button
								<i class="glyphicon glyphicon-ok"></i>
							</a>
							<a href="#" class="theme_button inverse">
								<i class="glyphicon glyphicon-heart"></i> Glyphicon Button</a>

							<a href="#" class="theme_button color1">Rt-Icon Button
								<i class="rt-icon2-gift"></i>
							</a>
							<a href="#" class="theme_button color2">
								<i class="rt-icon2-star-outline"></i> Rt-Icon Button</a>

							<a href="#" class="theme_button color1">
								<i class="fa fa-external-link"></i> Font Awesome Button</a>
							<a href="#" class="theme_button color2">Font Awesome Button
								<i class="fa fa-info-circle"></i>
							</a>
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