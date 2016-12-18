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
							<h1>Teasers</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shortcodes</a>
								</li>
								<li class="active">Teasers</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls ms section_padding_50">
				<div class="container">


					<h2 class="topmargin_0 text-center">Background Teaser</h2>
					<div class="row">
						<div class="col-sm-4">

							<div class="bg_teaser after_cover color_bg_1">
								<img src="images/teaser01.jpg" alt="">
								<div class="teaser_content media">

									<div class="teaser text-center">
										<div class="teaser_icon highlight2 size_big">
											<i class="rt-icon2-heart2"></i>
										</div>
										<h3>Color Big</h3>
										<p>This is teaser with big size color icon with
											<strong class="grey">h3</strong> heading and
											<strong class="grey">RT-Icon</strong>
											<br> icon</p>
										<a href="#" class="theme_button color2">Regular Button</a>
									</div>

								</div>
							</div>

						</div>

						<div class="col-sm-4">

							<div class="bg_teaser after_cover color_bg_2">
								<img src="images/teaser02.jpg" alt="">
								<div class="teaser_content media">

									<div class="teaser text-center">
										<div class="teaser_icon grey size_big">
											<i class="rt-icon2-leaf"></i>
										</div>
										<h3>Color Big</h3>
										<p>This is teaser with big size color icon with
											<strong class="grey">h3</strong> heading and
											<strong class="grey">RT-Icon</strong>
											<br> icon</p>
										<a href="#" class="theme_button inverse">Inverse Button</a>
									</div>

								</div>
							</div>

						</div>

						<div class="col-sm-4">

							<div class="bg_teaser after_cover color_bg_3">
								<img src="images/teaser03.jpg" alt="">
								<div class="teaser_content media">

									<div class="teaser text-center">
										<div class="teaser_icon highlight size_big">
											<i class="fa fa-star-half-o"></i>
										</div>
										<h3>Color Big</h3>
										<p>This is teaser with big size color icon with
											<strong class="grey">h3</strong> heading and
											<strong class="grey">Font Awesome</strong> icon</p>
										<a href="#" class="theme_button color1">Regular Button</a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<hr class="divider_40">

					<div class="row">

						<div class="col-sm-12">
							<h2 class="text-center">
								<strong>Icon</strong> Teasers</h2>

							<p class="text-center">You can manage icon types by toggling following classes to
								<strong class="grey">teaser_icon</strong> div: "grey", "highlight", "size_big", "size_small", "size_normal", "dark_bg_color", "main_bg_color", "border_icon", "round". Also you can remove button from teaser and add a link inside any header.</p>

							<h3 class="divider_40 text-center">Normal Icons</h3>

						</div>


						<div class="col-sm-4">
							<div class="teaser text-center">
								<div class="teaser_icon grey size_normal">
									<i class="rt-icon2-heart"></i>
								</div>
								<h2>
									<a href="#">Grey Normal</a>
								</h2>
								<p>This is teaser with normal size grey icon with
									<strong class="grey">h2</strong> heading and link inside header</p>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small">
									<i class="rt-icon2-heart"></i>
								</div>
								<h3>
									<a href="#">Color Small</a>
								</h3>
								<p>This is teaser with small size color icon with
									<strong class="grey">h3</strong> heading and theme button</p>
								<a href="#" class="theme_button color1">Regular Button</a>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="teaser text-center">
								<div class="teaser_icon black size_big">
									<i class="rt-icon2-heart"></i>
								</div>
								<h4>
									<a href="#">Black Normal</a>
								</h4>
								<p>This is teaser with big size black icon with
									<strong class="grey">h4</strong> heading and link inside header</p>
							</div>
						</div>

					</div>

					<hr class="divider_40">

					<h3 class="divider_40 text-center">Background &amp; Border Icons</h3>

					<div class="row">
						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon black size_big border_icon">
									<i class="rt-icon2-star"></i>
								</div>
								<h2>
									<a href="#">Black Big</a>
								</h2>
								<p>This is teaser with big size black icon with
									<strong class="grey">h2</strong> heading and link inside header</p>
							</div>

						</div>
						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small border_icon round">
									<i class="fa fa-cube"></i>
								</div>
								<h3>Color Small</h3>
								<p>This is teaser with big size color icon with
									<strong class="grey">h3</strong> heading and
									<strong class="grey">Font Awesome</strong> icon</p>
								<a href="#" class="theme_button color1">Regular Button</a>
							</div>

						</div>
						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon dark_bg_color size_normal">
									<i class="rt-icon2-sound"></i>
								</div>
								<h4>Dark BG Normal</h4>
								<p>This is teaser with dark background normal size icon and
									<strong class="grey">h4</strong> heading</p>
								<a href="#" class="theme_button inverse">Inverse Button</a>
							</div>

						</div>
						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center">
								<div class="teaser_icon main_bg_color size_normal round">
									<i class="rt-icon2-settings"></i>
								</div>
								<h3>Main BG Normal</h3>
								<p>This is teaser with big size color background icon and
									<strong class="grey">h3</strong> heading</p>
								<a href="#" class="theme_button color2">Know More!</a>
							</div>

						</div>


					</div>

					<hr class="divider_40">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center">Teasers With Borders and Backgrounds</h2>
							<p class="text-center">You can add a border or a background to any of them by adding a
								<strong class="grey">with_border</strong> or
								<strong class="grey">with_background</strong>,
								<strong class="grey">dark_bg_color</strong>,
								<strong class="grey">main_bg_color</strong> classes to
								<strong class="grey">teaser</strong> element.</p>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="teaser text-center with_border">
								<div class="teaser_icon grey size_big main_bg_color">
									<i class="rt-icon2-heart"></i>
								</div>
								<h4>Border Teaser</h4>
								<p>This is teaser with normal size grey icon with h4 heading</p>
								<a href="#" class="theme_button color2">Know More!</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="teaser text-center with_background">
								<div class="teaser_icon highlight size_big">
									<i class="fa fa-paint-brush"></i>
								</div>
								<h3>Muted Teaser</h3>
								<p>This is teaser with big size color icon with h3 heading and
									<strong class="grey">Font Awesome</strong> icon</p>
								<a href="#" class="theme_button color1">Know More!</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center dark_bg_color">
								<div class="teaser_icon size_big">
									<i class="rt-icon2-star"></i>
								</div>
								<h4>Dark Teaser</h4>
								<p>This is teaser with big size icon, dark background and h4 heading with border</p>
								<a href="#" class="theme_button">Know More!</a>
							</div>

						</div>

						<div class="col-md-3 col-sm-6">

							<div class="teaser text-center main_bg_color">
								<div class="teaser_icon size_small border_icon round">
									<i class="rt-icon2-eye"></i>
								</div>
								<h3>Color Teaser</h3>
								<p>This is teaser with small size icon with border, color background and h3 heading</p>
								<a href="#" class="theme_button inverse">Know More!</a>
							</div>

						</div>

					</div>


					<hr class="divider_40">
					<div class="row">
						<h2 class="text-center">Side Teasers</h2>
						<p class="text-center">You can style icons for side teaser same as for regular teaser</p>
						<div class="col-sm-6">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="rt-icon2-heart"></i>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Normal Icon Side Teaser</h4>
									<p>This is a side teaser with small size icon and h4 heading</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="teaser media text-right">
								<div class="media-body">
									<h3 class="media-heading">Small Icon Side Teaser</h3>
									<p>This is a side teaser with small size icon and h3 heading</p>
								</div>
								<div class="media-right">
									<div class="teaser_icon grey size_small main_bg_color">
										<i class="rt-icon2-heart"></i>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="teaser media with_border">
								<div class="media-left">
									<div class="teaser_icon highlight darkgrey_bg_color size_small round">
										<i class="rt-icon2-heart"></i>
									</div>
								</div>
								<div class="media-body">
									<h3 class="media-heading">Small Icon Side Teaser With Border</h3>
									<p>This is a side teaser with small size icon and h3 heading</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="teaser media text-right main_bg_color">
								<div class="media-body">
									<h4 class="media-heading">Small Icon Side Teaser</h4>
									<p>This is a side teaser with small size icon and h3 heading</p>
								</div>
								<div class="media-right">
									<div class="teaser_icon border_icon size_small">
										<i class="rt-icon2-heart"></i>
									</div>
								</div>
							</div>
						</div>

					</div>

					<hr class="divider_40">
					<div class="row">

						<h2 class="text-center">Horizontal Teasers</h2>
						<p class="text-center">You can style icons for horizontal teaser same as for regular teaser</p>

						<div class="col-sm-12">
							<div class="teaser table_section">
								<div class="row">
									<div class="col-sm-5">
										<h2 class="text-md-right">Business Meetings</h2>
									</div>

									<div class="col-sm-1 text-center">
										<div class="teaser_icon main_bg_color size_small round">
											<i class="rt-icon2-clock3"></i>
										</div>
									</div>

									<div class="col-sm-5">
										<p>
											At vero eos et accusam justo duo dolores ea rebum skasd gubergren no sea takimata sanctus est lorem ipsum
										</p>
									</div>
								</div>
							</div>

							<div class="teaser table_section with_background">
								<div class="row">
									<div class="col-sm-5">
										<h3 class="text-md-right">Business Meetings</h3>
									</div>

									<div class="col-sm-1 text-center">
										<div class="teaser_icon highlight size_big round">
											<i class="rt-icon2-clock3"></i>
										</div>
									</div>

									<div class="col-sm-5">
										<p>
											At vero eos et accusam justo duo dolores ea rebum skasd gubergren no sea takimata sanctus est lorem ipsum
										</p>
									</div>
								</div>
							</div>

							<div class="teaser table_section main_bg_color">
								<div class="row">
									<div class="col-sm-5">
										<h3 class="text-md-right">Business Meetings</h3>
									</div>

									<div class="col-sm-1 text-center">
										<div class="teaser_icon border_icon size_big round">
											<i class="rt-icon2-clock3"></i>
										</div>
									</div>

									<div class="col-sm-5">
										<p>
											At vero eos et accusam justo duo dolores ea rebum skasd gubergren no sea takimata sanctus est lorem ipsum
										</p>
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