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
							<h1>Gallery Right Sidebar 2 columns</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Gallery</a>
								</li>
								<li class="active">Gallery Right Sidebar 2 columns</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">


						<div class="col-sm-7 col-md-8 col-lg-8">


							<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

								<div class="isotope-item bottommargin_30 col-lg-6 col-md-12 col-sm-12 elections">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 meetings">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 electorat">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 policy">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 program">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 elections">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 meetings">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 electorat">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 electorat">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 program">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 elections">
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

								<div class="isotope-item bottommargin_30  col-lg-6 col-md-12 col-sm-12 policy">
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


							<div class="row">
								<div class="col-sm-12 text-center">
									<div class="topmargin_20">
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
								</div>
							</div>


						</div>
						<!--eof .col-sm-8 (main content)-->


						<!-- sidebar -->
						<aside class="col-sm-5 col-md-4 col-lg-4">

							<div class="widget widget_text">

								<h3 class="widget-title text-center">Get In Touch</h3>
								<div class="text-center">
									<a href="#" class="social-icon big-icon color-bg-icon soc-twitter">
										<span>34.5K</span>
										<span>Friends</span>
									</a>
									<a href="#" class="social-icon big-icon color-bg-icon soc-facebook">
										<span>3.2K</span>
										<span>Follows</span>
									</a>
									<a href="#" class="social-icon big-icon color-bg-icon soc-google">
										<span>15.7K</span>
										<span>Friends</span>
									</a>
								</div>

							</div>

							<div class="widget widget_mailchimp">

								<h3 class="widget-title text-center">Newsletter</h3>

								<form class="signup form-inline" action="/" method="get">
									<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control with-icon">
									</div>
									<button type="submit" class="fa fa-envelope form-button">
										<span class="sr-only">Send</span>
									</button>
									<div class="response"></div>
								</form>

								<p class="bottommargin_0">
									Subscribe to our Newsletter right now to be updated. We promice not to spam!
								</p>

							</div>

							<div class="widget widget_flickr">

								<h3 class="widget-title text-center">Flickr Widget</h3>
								<ul id="flickr"></ul>
							</div>

							<div class="widget widget_categories">

								<h3 class="widget-title text-center">Categories</h3>
								<form class="signup form-inline" action="/" method="get">
									<div class="form-group select-group">
										<select aria-required="true" id="categories" name="category" class="choice">
											<option value="" selected data-default>Select Category</option>
											<option value="repair">Repair</option>
											<option value="parts">Parts</option>
											<option value="services">Services</option>
											<option value="appliance">Appliance</option>
											<option value="miscellaneous">Miscellaneous</option>
										</select>
										<i class="rt-icon2-chevron-down2 form-button highlight"></i>
									</div>
								</form>
							</div>

							<div class="widget widget_recent_entries">
								<h3 class="widget-title text-center">Recent Posts</h3>
								<ul>
									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post01.jpg" alt="">
										</a>
										<div class="media-body">
											<h6>
												<a href="blog-single-right.html">Mollit pork est non spare ribs, cow nisi fatback</a>
											</h6>
											<span class="small-text">
												By Admin on
												<time datetime="2016-09-03T15:05:23+00:00">06.05.2016</time>
											</span>
										</div>
									</li>
									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post02.jpg" alt="">
										</a>
										<div class="media-body">
											<h6>
												<a href="blog-single-right.html">Eiusmod cupidatat t-bone porchetta</a>
											</h6>
											<span class="small-text">
												By Admin on
												<time datetime="2016-09-03T15:05:23+00:00">06.05.2016</time>
											</span>
										</div>
									</li>
									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post03.jpg" alt="">
										</a>
										<div class="media-body">
											<h6>
												<a href="blog-single-right.html">Excepteur proident pork chop ipsum</a>
											</h6>
											<span class="small-text">
												By Admin on
												<time datetime="2016-09-03T15:05:23+00:00">06.05.2016</time>
											</span>
										</div>
									</li>
								</ul>
							</div>


							<div class="widget widget_archive">

								<h3 class="widget-title text-center">Archive</h3>
								<form class="signup form-inline" action="/" method="get">
									<div class="form-group select-group">
										<select aria-required="true" id="month" name="mounth" class="choice">
											<option value="" selected data-default>Select Month</option>
											<option value="january">January</option>
											<option value="february">February</option>
											<option value="march">March</option>
											<option value="april">April</option>
											<option value="may">May</option>
											<option value="june">June</option>
											<option value="july">July</option>
											<option value="august">August</option>
											<option value="september">September</option>
											<option value="october">October</option>
											<option value="november">November</option>
											<option value="december">December</option>
										</select>
										<i class="rt-icon2-chevron-down2 form-button highlight"></i>
									</div>
								</form>
							</div>


						</aside>
						<!-- eof aside sidebar -->

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