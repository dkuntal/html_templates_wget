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
							<h1>Template Icons</h1>
							<ol class="breadcrumb">
								<li>
									<a href="./">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li class="active">Template Icons</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls ms text-center section_padding_50">
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<h2 class="section_header to_animate" data-animation="slideDown" data-delay="150">Available Animations</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="scaleAppear" data-delay="150">
							<h3>.scaleAppear</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="fadeInLeft" data-delay="150">
							<h3>.fadeInLeft</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="fadeInUp" data-delay="150">
							<h3>.fadeInUp</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="fadeInRight" data-delay="150">
							<h3>.fadeInRight</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="fadeInDown" data-delay="150">
							<h3>.fadeInDown</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="fadeIn" data-delay="150">
							<h3>.fadeIn</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="slideRight" data-delay="150">
							<h3>.slideRight</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="slideUp" data-delay="150">
							<h3>.slideUp</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="slideLeft" data-delay="150">
							<h3>.slideLeft</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="expandUp" data-delay="150">
							<h3>.expandUp</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="slideExpandUp" data-delay="150">
							<h3>.slideExpandUp</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="expandOpen" data-delay="150">
							<h3>.expandOpen</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="bigEntrance" data-delay="150">
							<h3>.bigEntrance</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="hatch" data-delay="150">
							<h3>.hatch</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">

						<div class="col-sm-12 to_animate" data-animation="tossing" data-delay="150">
							<h3>.tossing</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>

						<div class="col-sm-12 to_animate" data-animation="pulse" data-delay="150">
							<h3>.pulse</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="floating" data-delay="150">
							<h3>.floating</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="bounce" data-delay="150">
							<h3>.bounce</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>


						<div class="col-sm-12 to_animate" data-animation="pullUp" data-delay="150">
							<h3>.pullUp</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="pullDown" data-delay="150">
							<h3>.pullDown</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>

					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="stretchLeft" data-delay="150">
							<h3>.stretchLeft</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>


						<div class="col-sm-12 to_animate" data-animation="stretchRight" data-delay="150">
							<h3>.stretchRight</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">

						<div class="col-sm-12 to_animate" data-animation="fadeInUpBig" data-delay="150">
							<h3>.fadeInUpBig</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="fadeInDownBig" data-delay="150">
							<h3>.fadeInDownBig</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="fadeInLeftBig" data-delay="150">
							<h3>.fadeInLeftBig</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>


						<div class="col-sm-12 to_animate" data-animation="fadeInRightBig" data-delay="150">
							<h3>.fadeInRightBig</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="slideInDown" data-delay="150">
							<h3>.slideInDown</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="slideInLeft" data-delay="150">
							<h3>.slideInLeft</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>


						<div class="col-sm-12 to_animate" data-animation="slideInRight" data-delay="150">
							<h3>.slideInRight</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

						<div class="col-sm-12 to_animate" data-animation="moveFromLeft" data-delay="150">
							<h3>.moveFromLeft</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-6 to_animate" data-animation="moveFromRight" data-delay="150">
							<h3>.moveFromRight</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>

						</div>


						<div class="col-sm-6 to_animate" data-animation="moveFromBottom" data-delay="150">
							<h3>.moveFromBottom</h3>
							<p>Just add class
								<strong>"to_animate"</strong>, attributes
								<strong>"data-animation"</strong> with this class, and
								<strong>"data-delay"</strong> with number in milliseconds to any HTML element and you're done.</p>
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