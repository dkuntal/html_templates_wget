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

			<section class="ls section_padding_top_100">
				<div class="container">
					<div class="row topmargin_20 column_margin_0">
						<div class="col-md-12">
							<img src="./images/about-right.jpg" alt="" class="alignright">
							<h4 class="margin_0">American Politician</h4>
							<h3 class="highlight topmargin_0 bottommargin_20">Thomas Washington</h3>
							<p class="bottommargin_30">
								Fatback turducken occaecat shank shankle short ribs beef ribs. Short ribs sunt incididunt in drumstick. Ea magna exercitation, ribeye consectetur leberkas strip steak occaecat flank shank ipsum nostrud nisi. Bacon do pig culpa sed ut. Reprehenderit ea
								mollit picanha. Voluptate kevin biltong leberkas pork belly ut sausage lorem. Sirloin sausage laborum ground round tri-tip beef ribs ham hock short ribs enim do ball tip venison dolore ullamco capicola.
							</p>
							<p class="grey clearfix">
								With best regards,
								<img src="./images/signature.jpg" alt="" class="pull-right signature">
							</p>

							<hr class="topmargin_40 bottommargin_50">

							<h3 class="bottommargin_20">Biography</h3>
							<p>
								Pork id swine, consequat quis drumstick commodo cupidatat short loin magna tempor tri-tip shoulder chicken bacon. Adipisicing strip steak jerky, swine shank eu aliqua non drumstick cow fatback. Veniam elit meatloaf t-bone in fatback turducken eiusmod
								ea. Quis kielbasa swine fatback, saola velit chuck ullamco. Frankfurter short ribs pastrami ribeye shoulder occaecat pancetta. Ipsum cupim landjaeger dolore, aliquip strip steak meatloaf nulla eiusmod.
							</p>
							<ul class="list1">
								<li class="highlight2">Brisket non fatback, aliquip enim pastram</li>
								<li class="highlight2">Fugiat duis ball tip leberkas</li>
								<li class="highlight2">Pariatur commodo shankle shoulder</li>
								<li class="highlight2">Anim pariatur doner minim tail chuck</li>
							</ul>
							<p>
								Exercitation voluptate ribeye tongue, laborum picanha dolore flank in pastrami. In brisket tail pariatur in incididunt ham hock shankle bacon landjaeger short ribs deserunt beef. Elit chicken porchetta nostrud, nisi consequat occaecat. Bresaola pancetta
								occaecat chicken filet mignon exercitation ribeye doner chuck ea pork ex beef andouille. Sunt consequat eu, velit venison drumstick nulla short ribs sausage.
							</p>
							<hr class="topmargin_50 bottommargin_0">
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