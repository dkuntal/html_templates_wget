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
							<h1>Widgets</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li class="active">Widgets</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_50 section_padding_bottom_25">
				<div class="container">
					<div class="row">

						<!-- sidebar -->
						<aside class="col-sm-5 col-md-4 col-lg-4">

							<div class="widget widget_popular_entries">

								<h3 class="widget-title">Popular</h3>
								<ul class="media-list darklinks">
									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post01.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">Eod tempor invidunt labore dolore magna</a>
											</p>
											<div class="star-rating" title="Rated 5 out of 5">
												<span style="width:100%">
													<strong class="rating">5</strong> out of 5
												</span>
											</div>
										</div>
									</li>

									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post02.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">Aliquyam erat, sed voluptua vero eos </a>
											</p>
											<div class="star-rating" title="Rated 4.0 out of 5">
												<span style="width:60%">
													<strong class="rating">4</strong> out of 5
												</span>
											</div>

										</div>
									</li>

									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post03.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">Et justo duo dolores et ea rebum</a>
											</p>
											<div class="star-rating" title="Rated 4.50 out of 5">
												<span style="width:80%">
													<strong class="rating">4.50</strong> out of 5
												</span>
											</div>

										</div>
									</li>

									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post01.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">Stetclita kasd gubergren no sea takimata</a>
											</p>
											<div class="star-rating" title="Rated 3.00 out of 5">
												<span style="width:40%">
													<strong class="rating">3</strong> out of 5
												</span>
											</div>

										</div>
									</li>

									<li class="media">
										<a class="media-left" href="blog-single-right.html">
											<img class="media-object" src="images/recent_post02.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">Lorem ipsum dolor sitmet amet consetetur </a>
											</p>
											<div class="star-rating" title="Rated 4.50 out of 5">
												<span style="width:90%">
													<strong class="rating">4.50</strong> out of 5
												</span>
											</div>

										</div>
									</li>

								</ul>
							</div>

							<div class="widget widget_archive">

								<h3 class="widget-title">Archive widget</h3>
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

							<div class="widget widget_recent_comments">
								<h3 class="widget-title">Recent Comments</h3>
								<ul class="darklinks">
									<li>
										<a href="blog-single.html#comments" rel="external nofollow" class="url">Lara Smith</a> on
										<a href="blog-single-right.html">Ut wisi enim ad</a>
									</li>
									<li>
										<a href="blog-single.html#comments" rel="external nofollow" class="url">Alan Doe</a> on
										<a href="blog-single-right.html">Consetetur sadipscing</a>
									</li>
									<li>
										<a href="blog-single.html#comments" rel="external nofollow" class="url">Andrew Jhonson</a> on
										<a href="blog-single-right.html">Ut wisi ad</a>
									</li>
									<li>
										<a href="blog-single.html#comments" rel="external nofollow" class="url">John Doe</a> on
										<a href="blog-single-right.html">Lorem ipsum dolor</a>
									</li>
								</ul>
							</div>

							<div class="widget widget_recent_entries">
								<h3 class="widget-title">Recent Entries</h3>
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


							<div class="widget widget_calendar">

								<h3 class="widget-title">Calendar</h3>
								<div id="calendar_wrap">
									<table id="wp-calendar" class="with_background">
										<caption>Jan 2016</caption>
										<thead>
											<tr>
												<th scope="col" title="Monday">Mon</th>
												<th scope="col" title="Tuesday">Tue</th>
												<th scope="col" title="Wednesday">Wed</th>
												<th scope="col" title="Thursday">Thu</th>
												<th scope="col" title="Friday">Fri</th>
												<th scope="col" title="Saturday">Sat</th>
												<th scope="col" title="Sunday">Sun</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<td colspan="3" id="prev">
													<a href="blog-right.html" data-toggle="tooltip" title="Prev">Jan</a>
												</td>
												<td class="pad">&nbsp;</td>
												<td colspan="3" id="next">
													<a href="blog-right.html" data-toggle="tooltip" title="Next">Mar</a>
												</td>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td colspan="4" class="pad">&nbsp;</td>
												<td>1</td>
												<td>2</td>
												<td>
													<a href="blog-right.html" title="">3</a>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>5</td>
												<td>
													<a href="blog-right.html" title="">6</a>
												</td>
												<td>7</td>
												<td>8</td>
												<td>9</td>
												<td>10</td>
											</tr>
											<tr>
												<td>11</td>
												<td>12</td>
												<td>13</td>
												<td>14</td>
												<td>15</td>
												<td>16</td>
												<td>17</td>
											</tr>
											<tr>
												<td>18</td>
												<td>
													<a href="blog-right.html" title="">19</a>
												</td>
												<td id="today">20</td>
												<td>21</td>
												<td>22</td>
												<td>23</td>
												<td>24</td>
											</tr>
											<tr>
												<td>25</td>
												<td>26</td>
												<td>27</td>
												<td>28</td>
												<td>29</td>
												<td>30</td>
												<td>31</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>


							<div class="widget widget_categories">

								<h3 class="widget-title">Categories</h3>
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


							<div class="widget widget_flickr">

								<h3 class="widget-title">Flickr</h3>
								<ul id="flickr"></ul>
							</div>


							<div class="widget widget_mailchimp">

								<h3 class="widget-title">Mailchimp</h3>

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

							<div class="widget widget_meta">

								<h3 class="widget-title">Meta Widget</h3>
								<ul class="greylinks">
									<li>
										<a href="#">Site Admin</a>
									</li>
									<li>
										<a href="#">Log out</a>
									</li>
									<li>
										<a href="#" title="">Entries
											<abbr title="">RSS</abbr>
										</a>
									</li>
									<li>
										<a href="#" title="">Comments
											<abbr title="">RSS</abbr>
										</a>
									</li>
									<li>
										<a href="#" title="">WordPress.org</a>
									</li>
								</ul>
							</div>


							<div class="widget widget_nav_menu">

								<h3 class="widget-title">Custom Menu</h3>
								<div>
									<ul class="menu greylinks">
										<li class="">
											<a href="#">Lorem Ipsum</a>
										</li>
										<li class="">
											<a href="#">Dolor Sit</a>
											<ul class="sub-menu">
												<li class="">
													<a href="#">Lorem Ipsum Dolor</a>
												</li>
												<li class="">
													<a href="#">Sit Amet Dolor</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<div class="widget widget_pages">

								<h3 class="widget-title">Pages</h3>
								<ul class="greylinks">
									<li>
										<a href="#">Dolor Sit</a>
									</li>
									<li>
										<a href="#">Sit Amet Dolor</a>
									</li>
									<li>
										<a href="#">Lorem Ipsum Dolor</a>
									</li>
								</ul>
							</div>

							<div class="widget widget_search">
								<h3 class="widget-title">Search Widget</h3>
								<form method="get" class="searchform form-inline" action="/">
									<div class="form-group">
										<label class="sr-only" for="page_search">Search for:</label>
										<input type="text" id="page_search" value="" name="search" class="form-control with-icon">
									</div>
									<button type="submit" class="fa fa-search form-button">
										<span class="sr-only">Search</span>
									</button>
								</form>
							</div>

							<div class="widget widget_tag_cloud">

								<h3 class="widget-title">Tags</h3>
								<div class="tagcloud greylinks">
									<a href="#" title="">office cleaning</a>
									<a href="#" title="">pest control</a>
									<a href="#" title="">carpet cleaning</a>
									<a href="#" title="">window cleaning</a>
									<a href="#" title="">maid services</a>
									<a href="#" title="">domestic cleaning</a>
								</div>
							</div>

							<div class="widget widget_text">

								<h3 class="widget-title">Text Widget</h3>
								<div class="textwidget">
									<p class="margin_0">
										Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore
									</p>
								</div>
							</div>

							<div class="widget widget_twitter">
								<h3 class="widget-title">Twitter Widget</h3>
								<div class="twitter"></div>
							</div>


							<!-- template custom widgets -->

							<div class="widget widget_text">

								<h3 class="widget-title">Share</h3>
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

							<div class="widget widget_banner">

								<h3 class="widget-title">Banner</h3>
								<div class="vertical-item content-absolute ds">
									<div class="item-media">
										<img src="images/banner_right.jpg" alt="">
									</div>
									<div class="item-content text-center">
										<span class="main_bg_color">
											New
										</span>
										<h3 class="darkgrey_bg_color">
											Solar Accessories
										</h3>
										<span class="light_bg_color">
											Best Choise
										</span>
									</div>
								</div>

							</div>

							<div class="widget widget_slider">

								<h3 class="widget-title">Slider</h3>
								<div class="owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-items="1" data-responsive-xlg="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
									<div class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
										</div>
										<div class="item-content">
											<h4>Consetetur sadipscing elitr</h4>
											<p class="item-meta greylinks">
												By
												<a href="#">Admin</a> on Oct 18, 2015
												<span class="pull-right">
													<i class="rt-icon2-heart-outline highlight"></i> 325</span>
											</p>

										</div>
									</div>

									<div class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/02.jpg" alt="">
										</div>
										<div class="item-content">
											<h4>Consetetur sadipscing elitr</h4>
											<p class="item-meta greylinks">
												By
												<a href="#">Admin</a> on Oct 18, 2015
												<span class="pull-right">
													<i class="rt-icon2-heart-outline highlight"></i> 221</span>
											</p>

										</div>
									</div>

									<div class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
										</div>
										<div class="item-content">
											<h4>Consetetur sadipscing elitr</h4>
											<p class="item-meta greylinks">
												By
												<a href="#">Admin</a> on Oct 18, 2015
												<span class="pull-right">
													<i class="rt-icon2-heart-outline highlight"></i> 58</span>
											</p>

										</div>
									</div>

									<div class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/04.jpg" alt="">
										</div>
										<div class="item-content">
											<h4>Consetetur sadipscing elitr</h4>
											<p class="item-meta greylinks">
												By
												<a href="#">Admin</a> on Oct 18, 2015
												<span class="pull-right">
													<i class="rt-icon2-heart-outline highlight"></i> 241</span>
											</p>

										</div>
									</div>

								</div>

							</div>

							<div class="widget widget_tabs">

								<h3 class="widget-title">Tabs Posts</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active">
										<a href="#widget-tab4" role="tab" data-toggle="tab">Recent</a>
									</li>
									<li>
										<a href="#widget-tab5" role="tab" data-toggle="tab">Popular</a>
									</li>
									<li>
										<a href="#widget-tab6" role="tab" data-toggle="tab">Rated</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content top-color-border no-border">


									<div class="tab-pane fade in active" id="widget-tab4">

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/01.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 53</span>
												</p>

											</div>
										</div>

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/02.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 221</span>
												</p>

											</div>
										</div>

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/03.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 631</span>
												</p>

											</div>
										</div>

									</div>
									<!-- eof tab -->


									<div class="tab-pane fade" id="widget-tab5">

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/04.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 423</span>
												</p>

											</div>
										</div>

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/05.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 98</span>
												</p>

											</div>
										</div>

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/06.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 123</span>
												</p>

											</div>
										</div>

									</div>
									<!-- eof tab -->


									<div class="tab-pane fade" id="widget-tab6">
										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/07.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 423</span>
												</p>

											</div>
										</div>

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/08.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 612</span>
												</p>

											</div>
										</div>

										<div class="vertical-item bottommargin_20">
											<div class="item-media">
												<img src="images/gallery/09.jpg" alt="">
											</div>
											<div class="item-content">
												<h4>Consetetur sadipscing elitr</h4>
												<p class="item-meta greylinks">
													By
													<a href="#">Admin</a> on Oct 18, 2015
													<span class="pull-right">
														<i class="rt-icon2-heart-outline highlight"></i> 311</span>
												</p>

											</div>
										</div>
									</div>
									<!-- eof tab -->

								</div>
								<!-- eof tab-content -->

							</div>
							<!-- eof widget -->


						</aside>
						<!-- eof aside sidebar -->

						<div class="col-sm-7 col-md-8 col-lg-8">

							<h1 class="entry-title topmargin_0">All Widgets</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-6">
									<h3 class="topmargin_0">1/2</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
								</div>
								<div class="col-md-4">
									<h3 class="topmargin_0">1/3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>


						</div>
						<!--eof .col-sm-* (main content)-->

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