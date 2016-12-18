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
							<h1>About</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">About</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_100">
				<div class="container">
					<div class="row topmargin_20 column_margin_0">
						<div class="col-md-12">
							<img src="./images/program-right.jpg" alt="" class="alignright">
							<h4 class="margin_0">Working Progress</h4>
							<h3 class="highlight topmargin_0 bottommargin_20">Benefit Economic Independence</h3>
							<p>
								Boudin voluptate proident id fugiat anim. Commodo cillum tri-tip alcatra shank dolore ball tip occaecat. Tongue sunt mollit, turducken sed aliquip esse ham hock cow tail meatloaf picanha andouille biltong cupim. Pork belly hamburger non laboris excepteur
								bacon. Qui hamburger capicola ex venison irure cupidatat eu shank picanha tenderloin excepteur culpa flank tongue.
							</p>
							<p>
								Aliqua adipisicing hamburger ea ut boudin bacon strip steak velit aute qui officia dolore picanha. Ball tip ut veniam cupim strip steak est. Ex turducken ad nostrud shankle. Capicola ham hock deserunt, t-bone pork belly doner prosciutto corned beef.
							</p>
							<p>
								Drumstick consequat commodo swine elit t-bone voluptate, doner beef ball tip. Aliqua esse tri-tip commodo rump picanha eu. Laboris labore equat, short ribs qui venison deserunt consectetur do drumstick culpa pork chop frankfurter sirloin. Kevin picanha
								pork loin turkey ullamco. Nisi spare ribs pariatur, venison qui elit turkey frankfurter officia ut turducken duis ham hock prosciutto cillum. Sint capicola swine sunt sed.
							</p>

							<h5>Excepteur biltong turducken</h5>
							<p>
								Minim pork tail, esse chicken jerky do deserunt shank ground round turducken pancetta bresaola. Eu aliquip commodo cow. Pork loin tail pork belly veniam anim magna venison. Voluptate brisket venison andouille salami, ut pork loin id.
							</p>
							<ul class="list1">
								<li class="highlight2">Kevin picanha pork</li>
								<li class="highlight2">Eu aliquip commodo cow</li>
								<li class="highlight2">Capicola ham hock deserunt</li>
							</ul>
							<p class="bottommargin_10">
								Exercitation voluptate ribeye tongue, laborum picanha dolore flank in pastrami. In brisket tail pariatur in incididunt ham hock shankle bacon landjaeger short ribs deserunt beef. Elit chicken porchetta nostrud, nisi consequat occaecat. Bresaola pancetta
								occaecat chicken filet mignon exercitation ribeye doner chuck ea pork ex beef andouille. Sunt consequat eu, velit venison drumstick nulla short ribs sausage.
							</p>
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