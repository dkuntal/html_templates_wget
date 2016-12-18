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
							<h1>Cart</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shop</a>
								</li>
								<li class="active">Cart</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_15 section_padding_bottom_15">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="shop-adds text-center">
								<span class="grey">Shopping Cart</span>
								<i class="arrow-icon-right-open-mini"></i>
								<span>Checkout</span>
								<i class="arrow-icon-right-open-mini"></i>
								<span>Order Complete</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ls ms section_padding_top_100 section_padding_bottom_75 columns_padding_25">
				<div class="container">

					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8">

							<div class="table-responsive">
								<table class="table cart-table">
									<thead>
										<tr>
											<td class="product-info">Product</td>
											<td class="product-price-td">Price</td>
											<td class="product-quantity">Quantity</td>
											<td class="product-subtotal">Subtotal</td>
											<td class="product-remove">&nbsp;</td>
										</tr>
									</thead>
									<tbody>
										<tr class="cart_item">
											<td class="product-info">
												<div class="media">
													<div class="media-left">
														<a href="product-right.html">
															<img class="media-object cart-product-image" src="images/shop/01.png" alt="">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">
															<a href="product-right.html">At vero eos et accusam</a>
														</h4>
														<span class="grey">Color:</span> Black
														<br>
														<span class="grey">Size:</span> M
													</div>
												</div>
											</td>
											<td class="product-price">
												<span class="currencies">$</span>
												<span class="amount">199.00</span>
											</td>
											<td class="product-quantity">
												<div class="quantity">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" class="form-control">
													<input type="button" value="+" class="plus">
												</div>
											</td>
											<td class="product-subtotal">
												<span class="currencies">$</span>
												<span class="amount">199.00</span>
											</td>
											<td class="product-remove">
												<a href="#" class="remove fontsize_24" title="Remove this item">
													<i class="rt-icon2-trash"></i>
												</a>
											</td>
										</tr>

										<tr class="cart_item">
											<td class="product-info">
												<div class="media">
													<div class="media-left">
														<a href="product-right.html">
															<img class="media-object cart-product-image" src="images/shop/02.png" alt="">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">
															<a href="product-right.html">Justo duo dolores et ea rebum</a>
														</h4>
														<span class="grey">Size:</span> XL
													</div>
												</div>
											</td>
											<td class="product-price">
												<span class="currencies">$</span>
												<span class="amount">100.00</span>
											</td>
											<td class="product-quantity">
												<div class="quantity">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" class="form-control">
													<input type="button" value="+" class="plus">
												</div>
											</td>
											<td class="product-subtotal">
												<span class="currencies">$</span>
												<span class="amount">100.00</span>
											</td>
											<td class="product-remove">
												<a href="#" class="remove fontsize_24" title="Remove this item">
													<i class="rt-icon2-trash"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="cart-buttons">
								<a class="theme_button" href="#">Countinue Shopping</a>

								<input type="submit" class="theme_button color1" name="update_cart" value="Update Cart">

								<button type="submit" class="theme_button color2">Proceed to Checkout</button>
							</div>

							<div class="cart-collaterals">
								<div class="cart_totals">
									<h4>Cart Totals</h4>
									<table class="table">
										<tbody>
											<tr class="cart-subtotal">
												<td>Cart Subtotal</td>
												<td>
													<span class="currencies">$</span>
													<span class="amount">299.00</span>
												</td>
											</tr>
											<tr class="shipping">
												<td>Shipping and Handling</td>
												<td>
													Free Shipping
												</td>
											</tr>
											<tr class="order-total">
												<td class="grey">Order Total</td>
												<td>
													<strong class="grey">
														<span class="currencies">$</span>
														<span class="amount">299.00</span>
													</strong>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="coupon with_padding muted_background">
										<h3 class="topmargin_0">Discount Codes</h3>
										<p>Enter coupon code if you have one</p>
										<div class="form-group">
											<label class="sr-only" for="coupon_code">Coupon:</label>
											<input type="text" name="coupon_code" class="form-control" id="coupon_code" value="" placeholder="Coupon code">
										</div>
										<a class="theme_button" href="#">Apply Coupon</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="shipping-calculator-form with_padding muted_background">
										<h3 class="topmargin_0">Shipping &amp; Tax</h3>
										<p>Enter destination to get shipping</p>
										<div class="form-group">
											<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state form-control">
												<option value="">Select a country…</option>
												<option value="AX">Åland Islands</option>
												<option value="OM">Oman</option>
												<option value="GB" selected="selected">United Kingdom (UK)</option>

											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="" placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="" placeholder="Postcode / Zip" name="calc_shipping_postcode" id="calc_shipping_postcode">
										</div>
										<div>
											<button type="submit" name="calc_shipping" class="theme_button" value="1">Update Totals</button>
										</div>
									</div>
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