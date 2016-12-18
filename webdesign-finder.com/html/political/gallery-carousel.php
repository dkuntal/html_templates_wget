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
							<h1>Gallery Carousel 1 column</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Gallery</a>
								</li>
								<li class="active">Gallery Carousel 1 column</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls section_padding_110">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-push-1">
							<div id="gallery-owl-carousel" class="owl-carousel" data-dots="true" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-responsive-xlg="1">


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis pariatur incidunt voluptate adipisci mollitia quibusdam molestiae laboriosam. Veritatis esse cum aut laboriosam excepturi.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, fugiat pariatur laudantium magnam temporibus ea nemo vero ipsum modi saepe ratione ad obcaecati omnis laborum quidem.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium, quia hic, ea illo sint necessitatibus nihil quo nemo et!</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sed cumque assumenda, provident veniam qui a porro magnam autem fuga quos esse facere quam.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum velit, repellendus, ex provident ab debitis tempore molestiae sint consequuntur maiores blanditiis odio nulla.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quasi neque dicta in deleniti debitis, culpa quas labore ad, porro rem excepturi aliquam possimus temporibus.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolorum laborum maiores. Corrupti iusto rem modi architecto provident a iure, quia, tempore tenetur.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam optio aliquid officia harum alias voluptates a animi quasi blanditiis! Sequi laboriosam ipsa, illum iure.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam odit earum eligendi, vel laborum dolore, perferendis, at doloribus facilis unde numquam autem! Possimus soluta.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat esse tempore ipsam veritatis ab tempora voluptatem tenetur harum magnam, officiis adipisci at laborum .</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nesciunt rem numquam. Doloremque hic reiciendis sed, cum atque. Nulla numquam, tempora officiis sit.</p>

									</div>
								</div>


								<div class="vertical-item gallery-extended-item with_border bottom-margin  text-center">
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla commodi aperiam nemo beatae assumenda debitis excepturi, consectetur, quae cum voluptate veritatis quam eveniet.</p>

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