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
							<h1>Products</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shop</a>
								</li>
								<li class="active">Products</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_100 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8">

							<div class="storefront-sorting">

								<form class="form-inline pull-right">

									<div class="form-group select-group">
										<label class="grey sr-only" for="orderby">Sort By:</label>
										<select class="form-control choice" name="orderby" id="orderby">
											<option value="default" selected data-default>Default Sorting</option>
											<option value="popularity">Popularity</option>
											<option value="rating">Rating</option>
											<option value="date">Newness</option>
											<option value="price">Low To High</option>
											<option value="price-desc">High To Low</option>
										</select>
										<i class="rt-icon2-chevron-down2 form-button highlight"></i>
									</div>

								</form>

								<span class="inline-block topmargin_10">Showing
									<span class="pages-showing grey fontsize_20 vidaloka">7-12</span> of
									<span class="total-pages grey fontsize_20 vidaloka">18</span> results</span>

							</div>


							<ul id="products" class="row products list-unstyled">
								<li class="col-md-6 product type-product text-center">
									<div class="vertical-item with_border bottom-rounded">

										<div class="item-media with_background">
											<a href="product-right.html">
												<img src="images/shop/01.png" alt="">
											</a>
										</div>

										<div class="item-content with_padding">
											<h4>
												<a href="">Black T-Shirt</a>
											</h4>
											<span class="price highlight">
												<span class="amount">$10.00</span>
											</span>
											<br>
											<a href="#" rel="nofollow" class="add_to_cart_button theme_button color1">Add to Cart</a>
										</div>

									</div>
								</li>

								<li class="col-md-6 product type-product text-center">
									<div class="vertical-item with_border bottom-rounded">

										<div class="item-media with_background">
											<a href="product-right.html">
												<img src="images/shop/02.png" alt="">
											</a>
										</div>

										<div class="item-content with_padding">
											<h4>
												<a href="">Red T-Shirt</a>
											</h4>
											<span class="price highlight">
												<span class="amount">$14.00</span>
											</span>
											<br>
											<a href="#" rel="nofollow" class="add_to_cart_button theme_button color1">Add to Cart</a>
										</div>

									</div>
								</li>

								<li class="col-md-6 product type-product text-center">
									<div class="vertical-item with_border bottom-rounded">

										<div class="item-media with_background">
											<a href="product-right.html">
												<img src="images/shop/03.png" alt="">
											</a>
										</div>

										<div class="item-content with_padding">
											<h4>
												<a href="">Black Cap</a>
											</h4>
											<span class="price highlight">
												<span class="amount">$5.00</span>
											</span>
											<br>
											<a href="#" rel="nofollow" class="add_to_cart_button theme_button color1">Add to Cart</a>
										</div>

									</div>
								</li>

								<li class="col-md-6 product type-product text-center">
									<div class="vertical-item with_border bottom-rounded">

										<div class="item-media with_background">
											<a href="product-right.html">
												<img src="images/shop/04.png" alt="">
											</a>
										</div>

										<div class="item-content with_padding">
											<h4>
												<a href="">Blue Sweater</a>
											</h4>
											<span class="price highlight">
												<span class="amount">$25.00</span>
											</span>
											<br>
											<a href="#" rel="nofollow" class="add_to_cart_button theme_button color1">Add to Cart</a>
										</div>

									</div>
								</li>

								<li class="col-md-6 product type-product text-center">
									<div class="vertical-item with_border bottom-rounded">

										<div class="item-media with_background">
											<a href="product-right.html">
												<img src="images/shop/05.png" alt="">
											</a>
										</div>

										<div class="item-content with_padding">
											<h4>
												<a href="">Red Sweater</a>
											</h4>
											<span class="price highlight">
												<span class="amount">$25.00</span>
											</span>
											<br>
											<a href="#" rel="nofollow" class="add_to_cart_button theme_button color1">Add to Cart</a>
										</div>

									</div>
								</li>

								<li class="col-md-6 product type-product text-center">
									<div class="vertical-item with_border bottom-rounded">

										<div class="item-media with_background">
											<a href="product-right.html">
												<img src="images/shop/06.png" alt="">
											</a>
										</div>

										<div class="item-content with_padding">
											<h4>
												<a href="">Female Blue T-Shirt</a>
											</h4>
											<span class="price highlight">
												<span class="amount">$10.00</span>
											</span>
											<br>
											<a href="#" rel="nofollow" class="add_to_cart_button theme_button color1">Add to Cart</a>
										</div>

									</div>
								</li>


							</ul>


							<div class="row topmargin_0 bottommargin_-5">
								<div class="col-sm-12 text-center">
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
						<!--eof .col-sm-8 (main content)-->


						<!-- sidebar -->
						<aside class="col-sm-5 col-md-4 col-lg-4">


							<div class="with_padding">
								<div class="widget widget_shop_categories">

									<h3 class="widget-title text-center">Categories</h3>
									<ul class="list-unstyled">
										<li>
											<a href="#t-shirt-more" class="collapsed category-more" data-toggle="collapse" aria-expanded="false" aria-controls="t-shirt-more">T-Shirt</a>
											<i class="fa fa-angle-down"></i>
											<!-- <span class="count highlight">(3)</span> -->
											<ul id="t-shirt-more" class="t-shirt-more collapse">
												<li>
													<a href="#">Red (5)</a>
												</li>
												<li>
													<a href="#">Blue (3)</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="#cap-more" class="collapsed category-more" data-toggle="collapse" aria-expanded="false" aria-controls="cap-more">Cap</a>
											<i class="fa fa-angle-down"></i>
											<!-- <span class="count highlight">(3)</span> -->
											<ul id="cap-more" class="cap-more collapse">
												<li>
													<a href="#">Black (10)</a>
												</li>
												<li>
													<a href="#">Red (7)</a>
												</li>
												<li>
													<a href="#">Blue (2)</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="#sweater-more" class="collapsed category-more" data-toggle="collapse" aria-expanded="false" aria-controls="sweater-more">Sweater</a>
											<i class="fa fa-angle-down"></i>
											<!-- <span class="count highlight">(3)</span> -->
											<ul id="sweater-more" class="sweater-more collapse">
												<li>
													<a href="#">Red (5)</a>
												</li>
												<li>
													<a href="#">Blue (3)</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="#flag-more" class="collapsed category-more" data-toggle="collapse" aria-expanded="false" aria-controls="flag-more">Flag</a>
											<i class="fa fa-angle-down"></i>
											<!-- <span class="count highlight">(3)</span> -->
											<ul id="flag-more" class="flag-more collapse">
												<li>
													<a href="#">Red (5)</a>
												</li>
												<li>
													<a href="#">Blue (3)</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="with_padding">
								<div class="widget widget_price_filter">

									<h3 class="widget-title text-center">Filter By Price</h3>
									<!-- price slider -->
									<form method="get" action="/" class="form-inline">

										<div class="slider-range-price"></div>

										<button type="submit" class="theme_button color1">Filter</button>


										<div class="form-group ">
											<label class="grey" for="slider_price_min">From:</label>
											<input type="text" class="slider_price_min form-control text-center" id="slider_price_min" readonly>
										</div>

										<div class="form-group">
											<label class="grey" for="slider_price_max"> to:</label>
											<input type="text" class="slider_price_max form-control text-center" id="slider_price_max" readonly>
										</div>


										<div class="inline-block">Price:
											<span class="grey vidaloka fontsize_20">
												$
												<span class="slider_price_min"></span>
												- $
												<span class="slider_price_max"></span>
											</span>
										</div>

									</form>
								</div>
							</div>
							<div class="with_padding">
								<div class="widget widget_shopping_cart">

									<h3 class="widget-title text-center">Cart</h3>
									<div class="widget_shopping_cart_content">

										<ul class="cart_list product_list_widget media-list darklinks">

											<li class="media">
												<a href="#" class="remove" title="Remove this item">
													<i class="fa fa-close highlight"></i>
												</a>

												<div class="media-left media-middle">
													<a href="product-right.html">
														<img src="images/shop/02.png" alt="">
													</a>
												</div>

												<div class="media-body">
													<h4>
														<a href="product-right.html">Red T-Shirt</a>
													</h4>
													<span class="quantity">1 ×
														<span class="amount grey vidaloka fontsize_20">$14.00</span>
													</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left media-middle">
													<a href="product-right.html">
														<img src="images/shop/04.png" alt="">
													</a>
												</div>

												<div class="media-body media-middle">
													<h4>
														<a href="product-right.html">Blue Sweater</a>
													</h4>
													<span class="quantity">1 ×
														<span class="amount grey vidaloka fontsize_20">$25.00</span>
													</span>
												</div>
												<div class="media-body media-middle">
													<a href="#" class="remove" title="Remove this item">
														<i class="fa fa-close highlight"></i>
													</a>
												</div>
											</li>


										</ul>
										<!-- end product list -->

										<p class="total bottommargin_30">
											<span>Subtotal:
												<span class="amount grey vidaloka fontsize_20">$64.00</span>
											</span>
										</p>

										<p class="buttons margin_0">
											<a href="cart-right.html" class="theme_button color1">View Cart</a>
											<a href="checkout-right.html" class="theme_button">Checkout</a>
										</p>

									</div>
								</div>
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