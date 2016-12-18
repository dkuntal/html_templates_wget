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
							<h1>Single Product</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shop</a>
								</li>
								<li class="active">Single Product</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8">


							<div itemscope="" itemtype="http://schema.org/Product" class="product type-product row">

								<div class="images col-sm-6">

									<a href="images/shop/01.png" itemprop="image" class="main-image zoom" title="" data-gal="prettyPhoto[product-gallery]">

										<span class="onsale">Sale</span>

										<span class="newproduct">New</span>

										<img src="images/shop/01.png" class="attachment-shop_single wp-post-image" alt="" title="">

									</a>

									<div id="product-thumbnails" class="owl-carousel thumbnails product-thumbnails" data-loop="true" data-center="true" data-margin="10" data-nav="false" data-dots="true" data-items="3" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="2"
													data-responsive-xs="2">

										<a href="images/shop/02.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
											<img src="images/shop/02.png" class="attachment-shop_thumbnail" alt="">
										</a>

										<a href="images/shop/03.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
											<img src="images/shop/03.png" class="attachment-shop_thumbnail" alt="">
										</a>

										<a href="images/shop/04.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
											<img src="images/shop/04.png" class="attachment-shop_thumbnail" alt="">
										</a>

										<a href="images/shop/05.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
											<img src="images/shop/05.png" class="attachment-shop_thumbnail" alt="">
										</a>

									</div>

									<div class="product-icons row">
										<div class="col-xs-4">
											<div class="teaser text-center">
												<div class="teaser_icon main_bg_color fontsize_20">
													<i class="rt-icon2-heart"></i>
												</div>
												<h5>
													<a href="#">Whishlist</a>
												</h5>
											</div>
										</div>

										<div class="col-xs-4">
											<div class="teaser text-center">
												<div class="teaser_icon main_bg_color fontsize_20">
													<i class="rt-icon2-pen"></i>
												</div>
												<h5>
													<a href="#">Compare</a>
												</h5>
											</div>
										</div>

										<div class="col-xs-4">
											<div class="teaser text-center">
												<div class="teaser_icon main_bg_color fontsize_20">
													<i class="rt-icon2-paperplane"></i>
												</div>
												<h5>
													<a href="#">Share</a>
												</h5>
											</div>
										</div>
									</div>
								</div>
								<!-- eof .images -->

								<div class="summary entry-summary col-sm-6">

									<h1 itemprop="name" class="product_title entry-title">Item Title</h1>

									<div class="product-rating clearfix" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">

										<div class="star-rating" title="Rated 4.50 out of 5">
											<span style="width:90%">
												<strong class="rating">4.50</strong> out of 5
											</span>
										</div>

										<span class="review-links pull-right darklinks">
											<a href="#comments" class="review-link" rel="nofollow">
												<span itemprop="reviewCount" class="count">3</span> review(s)
											</a>

											<span class="grey"> | </span>

											<a href="#respond" class="review-link" rel="nofollow">
												Add Your Review
											</a>
										</span>

									</div>

									<div class="product_meta">
										<span class="posted_in">
											<span class="grey">Categories:</span>
											<span class="categories-links">
												<a rel="category" href="blog-right.html" class="theme_button small_button color1">Categ 1</a>
												<a rel="category" href="blog-right.html" class="theme_button small_button color1">Categ 2</a>
											</span>
										</span>
									</div>

									<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

										<div itemprop="description">
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
										</div>

										<ul class="list1 no-bullets">
											<li>
												<p class="price">
													<del>
														<span class="amount">$339.00</span>
													</del>
													<ins>
														<span class="amount">$299.00</span>
													</ins>
												</p>

												<meta itemprop="price" content="2">

												<meta itemprop="priceCurrency" content="USD">

												<link itemprop="availability" href="http://schema.org/InStock">

												<p class="stock">
													<span class="grey">Availability:</span> In Stock</p>
												<!-- <p class="stock out-of-stock"><span class="grey">Availability:</span> <span class="highlight">Out Of Stock</span></p> -->

												<div class="email-to darklinks">
													<a href="#" class="email-to-link" rel="nofollow">
														Email to a Friend
													</a>
												</div>
											</li>
										</ul>

										<form class="cart" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<label for="product_size" class="grey">Size</label>
												<span class="red">*</span>
												<select class="form-control" id="product_size">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>

											<span class="product-option-name grey">Color</span>
											<span class="red">*</span>

											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Grey
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Magenta
												</label>
											</div>

											<span class="product-option-name grey">Other Options</span>

											<div class="checkbox">
												<label>
													<input type="checkbox" value=""> Option one
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" value=""> Option two
												</label>
											</div>


											<span class="product-option-name grey">Select Delivery Date</span>

											<div class="form-inline">
												<div class="form-group">
													<select class="form-control">
														<option value="" selected="">-</option>
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option>
														<option value="">4</option>
														<option value="">5</option>
														<option value="">6</option>
													</select>
												</div>

												<div class="form-group">
													<select class="form-control">
														<option value="" selected="">-</option>
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option>
														<option value="">4</option>
														<option value="">5</option>
														<option value="">6</option>
													</select>
												</div>

												<div class="form-group">
													<select class="form-control">
														<option value="" selected="">-</option>
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option>
														<option value="">4</option>
														<option value="">5</option>
														<option value="">6</option>
													</select>
												</div>
											</div>

											<span class="product-option-name grey">Additional Comment</span>

											<textarea class="form-control" rows="3"></textarea>
											<p>Maximum number of characters:
												<span id="char_left">500</span>
											</p>

											<div class="pull-right">
												<a href="#" rel="nofollow" class="theme_button color1 add_to_cart_button">
													<i class="rt-icon2-basket"></i>
													Add to cart
												</a>
											</div>

											<label class="grey" for="product_quantity">Qty:</label>

											<span class="quantity form-group">
												<input type="button" value="-" class="minus">
												<input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" id="product_quantity" class="form-control ">
												<input type="button" value="+" class="plus">
											</span>

										</form>
									</div>


								</div>
								<!-- .summary.col- -->

							</div>
							<!-- .product.row -->


							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active">
									<a href="#details_tab" role="tab" data-toggle="tab">Details</a>
								</li>
								<li>
									<a href="#additional_tab" role="tab" data-toggle="tab">Additional</a>
								</li>
								<li>
									<a href="#reviews_tab" role="tab" data-toggle="tab">Reviews</a>
								</li>
								<li>
									<a href="#custom_tab" role="tab" data-toggle="tab">Custom</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content top-color-border bottommargin_30">

								<div class="tab-pane fade in active" id="details_tab">

									<p>Duis autem veiudolorn hendrerit vulputate velit esse molestie. consequat, vel illum dolore eu feugiat nulla facilisis at vereros accumsan etiusto dignissim:</p>

									<ul class="list1 darklinks">
										<li>
											<a href="services.html">Lorem ipsum dolor sit amet</a>
										</li>
										<li>
											<a href="services.html">Sint animi non ut sed</a>
										</li>
										<li>
											<a href="services.html">Eaque blanditiis nemo</a>
										</li>
										<li>
											<a href="services.html">Amet, consectetur adipisicing</a>
										</li>
										<li>
											<a href="services.html">Blanditiis nemo quaerat</a>
										</li>
									</ul>

									<div class="well">
										<strong class="highlight">Warning!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
									</div>

									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
										in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>

								</div>

								<div class="tab-pane fade" id="additional_tab">

									<table class="table table-striped topmargin_30">

										<tr>
											<th class="grey">Product title:</th>
											<td>Product Name</td>
										</tr>

										<tr>
											<th class="grey">Item SKU:</th>
											<td>5552281538</td>
										</tr>

										<tr>
											<th class="grey">Brand:</th>
											<td>
												<a href="#">Brand Name</a>
											</td>
										</tr>

										<tr>
											<th class="grey">Style:</th>
											<td>SuperStyle</td>
										</tr>

										<tr>
											<th class="grey">Size:</th>
											<td>Middle</td>
										</tr>

										<tr>
											<th class="grey">Color:</th>
											<td>Black</td>
										</tr>

										<tr>
											<th class="grey">Targeted Group:</th>
											<td>All</td>
										</tr>

									</table>

								</div>

								<div class="tab-pane fade" id="reviews_tab">

									<div class="comments-area" id="comments">
										<ol class="comment-list">
											<li class="comment even thread-even depth-1 parent">
												<article class="comment-body media">
													<div class="media-left">
														<img class="media-object" alt="" src="images/member_3.jpg">
													</div>
													<div class="media-body">
														<span class="reply">
															<a class="with_background" href="#respond">
																<span class="sr-only">reply</span>
															</a>
														</span>
														<div class="comment-meta highlight3-links">
															<a class="author_url vidaloka" rel="external nofollow" href="#">Christine Ball</a>
															<br>
															<span class="comment-date small-text">
																<i class="fa fa-calendar grey"></i>
																<time datetime="2016-09-03T15:05:23+00:00">06.05.2016 at 10:25</time>
															</span>
														</div>
														<p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio.</p>
													</div>
												</article>
												<!-- .comment-body -->

												<ol class="children">
													<li class="comment byuser odd alt depth-2 parent">
														<article class="comment-body media">
															<div class="media-left">
																<img class="media-object" alt="" src="images/member_9.jpg">
															</div>
															<div class="media-body">
																<span class="reply">
																	<a class="with_background" href="#respond">
																		<span class="sr-only">reply</span>
																	</a>
																</span>
																<div class="comment-meta highlight3-links">
																	<a class="author_url vidaloka" rel="external nofollow" href="#">Joe Mendez</a>
																	<br>
																	<span class="comment-date small-text">
																		<i class="fa fa-calendar grey"></i>
																		<time datetime="2016-09-03T15:05:23+00:00">06.05.2016 at 10:25</time>
																	</span>
																</div>
																<p>Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus.</p>
															</div>
														</article>
														<!-- .comment-body -->

														<ol class="children">
															<li class="comment byuser even depth-3">
																<article class="comment-body media">
																	<div class="media-left">
																		<img class="media-object" alt="" src="images/member_5.jpg">
																	</div>
																	<div class="media-body">
																		<span class="reply">
																			<a class="with_background" href="#respond">
																				<span class="sr-only">reply</span>
																			</a>
																		</span>
																		<div class="comment-meta highlight3-links">
																			<a class="author_url vidaloka" rel="external nofollow" href="#">Susie Lucas</a>
																			<br>
																			<span class="comment-date small-text">
																				<i class="fa fa-calendar grey"></i>
																				<time datetime="2016-09-03T15:05:23+00:00">06.05.2016 at 10:25</time>
																			</span>
																		</div>
																		<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque.</p>
																	</div>
																</article>
																<!-- .comment-body -->
															</li>
															<!-- #comment-## -->
														</ol>
														<!-- .children -->
													</li>
													<!-- #comment-## -->
												</ol>
												<!-- .children -->
											</li>
											<!-- #comment-## -->

											<li class="comment byuser odd alt thread-odd thread-alt depth-1">
												<article class="comment-body media">
													<div class="media-left">
														<img class="media-object" alt="" src="images/member_11.jpg">
													</div>
													<div class="media-body">
														<span class="reply">
															<a class="with_background" href="#respond">
																<span class="sr-only">reply</span>
															</a>
														</span>
														<div class="comment-meta highlight3-links">
															<a class="author_url vidaloka" rel="external nofollow" href="#">Josie Young</a>
															<br>
															<span class="comment-date small-text">
																<i class="fa fa-calendar grey"></i>
																<time datetime="2016-09-03T15:05:23+00:00">06.05.2016 at 10:25</time>
															</span>
														</div>
														<p>Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</p>
													</div>
												</article>
												<!-- .comment-body -->
											</li>
											<!-- #comment-## -->

											<li class="comment byuser even thread-even depth-1">
												<article class="comment-body media">
													<div class="media-left">
														<img class="media-object" alt="" src="images/member_4.jpg">
													</div>
													<div class="media-body">
														<span class="reply">
															<a class="with_background" href="#respond">
																<span class="sr-only">reply</span>
															</a>
														</span>
														<div class="comment-meta highlight3-links">
															<a class="author_url vidaloka" rel="external nofollow" href="#">Blanche Payne</a>
															<br>
															<span class="entry-date small-text">
																<i class="fa fa-calendar grey"></i>
																<time datetime="2016-09-03T15:05:23+00:00">06.05.2016</time>
															</span>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
													</div>
												</article>
												<!-- .comment-body -->
											</li>
											<!-- #comment-## -->
										</ol>
										<!-- .comment-list -->
									</div>
									<!-- #comments -->

								</div>

								<div class="tab-pane fade" id="custom_tab">

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
										irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>

								</div>

							</div>
							<!-- eof .tab-content -->


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