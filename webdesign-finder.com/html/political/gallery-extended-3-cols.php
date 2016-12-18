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
							<h1>Gallery Extended 3 columns</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Gallery</a>
								</li>
								<li class="active">Gallery Extended 3 columns</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls page_portfolio section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-push-1">


							<div class="filters isotope_filters text-center">
								<a href="#" data-filter="*" class="selected">All</a>
								<a href="#" data-filter=".program">Program</a>
								<a href="#" data-filter=".meetings">Meetings</a>
								<a href="#" data-filter=".electorat">Electorat</a>
								<a href="#" data-filter=".policy">Policy</a>
								<a href="#" data-filter=".elections">Elections</a>
							</div>

							<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

								<div class="isotope-item bottommargin_30 col-lg-4 col-md-6 col-sm-12 elections">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded text-center">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">elections</a>
											</span>
											<p>Dolor ham quis jowl shankle drumstick, mollit flank. Shank biltong consectetur ipsum, picanha pastrami short loin commodo aute velit landjaeger.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 meetings">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Elitr sed diam</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">meetings</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, fugiat pariatur laudantium magnam temporibus ea nemo vero ipsum modi saepe ratione.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 electorat">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Nonumy eirmod</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">electorat</a>
											</span>
											<p>Short ribs rump duis doner pork loin, picanha consequat strip steak biltong. Bresaola t-bone flank meatloaf id cillum eiusmod anim jowl sausage rump.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 policy">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/04.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Rempor invidunt ut </a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">policy</a>
											</span>
											<p>Beef nostrud qui bresaola andouille. Tongue kielbasa pork loin pork, laborum occaecat meatball esse id sint. Qui ball tip do aliquip labore. Rump strip steak duis.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 program">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/05.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Labore dolore magna</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">program</a>
											</span>
											<p>Excepteur prosciutto sint meatloaf. In alcatra pastrami meatball picanha consectetur. Aliquip meatball est jerky anim. Filet mignon prosciutto ut enim.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 elections">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/06.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Aliquyam erat sed </a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">elections</a>
											</span>
											<p>Capicola chicken aliqua pastrami meatloaf exercitation ribeye bacon. Officia ad laborum, bacon eu lorem sed ribeye cillum reprehenderit in dolor.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 meetings">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/07.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">meetings</a>
											</span>
											<p>Salami capicola corned beef doner flank velit. Short ribs jerky ut veniam fugiat. Ut meatloaf reprehenderit ribeye porchetta short ribs chuck jerky.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 electorat">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/08.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Aliquyam erat sed </a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">electorat</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam optio aliquid officia harum alias voluptates a animi quasi blanditiis! Sequi laboriosam ipsa.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 electorat">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/09.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">electorat</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam odit earum eligendi, vel laborum dolore, perferendis, at doloribus facilis unde numquam autem!</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 program">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/10.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Nonumy eirmod</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">program</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat esse tempore ipsam veritatis ab tempora voluptatem tenetur harum magnam.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 elections">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/11.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">elections</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nesciunt rem numquam. Doloremque hic reiciendis sed, cum atque. Nulla numquam.</p>

										</div>
									</div>
								</div>

								<div class="isotope-item bottommargin_30  col-lg-4 col-md-6 col-sm-12 policy">
									<div class="vertical-item gallery-extended-item with_border bottom-rounded  text-center">
										<div class="item-media">
											<img src="images/gallery/12.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="gallery-single.html"></a>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="gallery-single.html">Rempor invidunt ut</a>
											</h3>
											<span class="categories-links">
												<a rel="category" href="#" class="theme_button small_button color1">policy</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla commodi aperiam nemo beatae assumenda debitis excepturi, consectetur, quae cum voluptate.</p>

										</div>
									</div>
								</div>

							</div>
							<!-- eof .isotope_container.row -->

							<div class="row bottommargin_20">
								<div class="col-sm-12 text-center">
									<img src="img/loading.png" alt="Loading" class="fa-spin">
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