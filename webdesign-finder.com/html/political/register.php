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
							<h1>Registration</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Shop</a>
								</li>
								<li class="active">Registration</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls ms section_padding_top_100 section_padding_bottom_100">
				<div class="container">

					<div class="row">

						<form class="shop-register" role="form">

							<div class="col-sm-6">
								<div class="form-group validate-required" id="billing_first_name_field">
									<label for="billing_first_name" class="control-label">
										<span class="grey">First Name </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_first_name" id="billing_first_name" placeholder="" value="">
								</div>

								<div class="form-group" id="billing_company_field">
									<label for="billing_company" class="control-label">
										<span class="grey">Company Name</span>
									</label>

									<input type="text" class="form-control " name="billing_company" id="billing_company" placeholder="" value="">

								</div>


							</div>

							<div class="col-sm-6">
								<div class="form-group validate-required" id="billing_last_name_field">
									<label for="billing_last_name" class="control-label">
										<span class="grey">Last Name </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_last_name" id="billing_last_name" placeholder="" value="">

								</div>

								<div class="form-group validate-required validate-email" id="billing_email_field">
									<label for="billing_email" class="control-label">
										<span class="grey">Email Address </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_email" id="billing_email" placeholder="email" value="">

								</div>

							</div>

							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Address </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="">

								</div>

							</div>

							<div class="col-sm-6">

								<div class="form-group address-field validate-required" id="billing_city_field">
									<label for="billing_city" class="control-label">
										<span class="grey">Town / City </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_city" id="billing_city" placeholder="Town / City" value="">

								</div>

								<div class="form-group address-field validate-required validate-postcode" id="billing_postcode_field">
									<label for="billing_postcode" class="control-label">
										<span class="grey">Postcode </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip" value="">

								</div>

								<div class="form-group validate-required validate-phone" id="billing_phone_field">
									<label for="billing_phone" class="control-label">
										<span class="grey">Phone </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_phone" id="billing_phone" placeholder="" value="">

								</div>


								<div class="form-group" id="billing_password_field">
									<label for="billing_password" class="control-label">
										<span class="grey">Password</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_password" id="billing_password" placeholder="" value="">

								</div>


								<div class="form-group">

									<div class="radio">
										<label>
											<input type="radio"> Ship to this address
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio"> Ship to different address
										</label>
									</div>

								</div>

							</div>

							<div class="col-sm-6">

								<div class="form-group">
									<label for="billing_state" class="control-label">
										<span class="grey">State/Province </span>
										<span class="required">*</span>
									</label>

									<select class="form-control" name="billing_state" id="billing_state">
										<option value="">Select a country…</option>
										<option value="AX">Åland Islands</option>
										<option value="AF">Afghanistan</option>
										<option value="AL">Albania</option>
										<option value="GA">Gabon</option>
										<option value="GM">Gambia</option>
										<option value="GE">Georgia</option>
										<option value="DE">Germany</option>
										<option value="GH">Ghana</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB" selected="selected">United Kingdom (UK)</option>
										<option value="ZW">Zimbabwe</option>
									</select>
								</div>

								<div class="form-group">
									<label for="billing_country" class="control-label">
										<span class="grey">Country </span>
										<span class="required">*</span>
									</label>

									<select class="form-control" name="billing_country" id="billing_country">
										<option value="">Select a country…</option>
										<option value="AX">Åland Islands</option>
										<option value="AF">Afghanistan</option>
										<option value="AL">Albania</option>
										<option value="GA">Gabon</option>
										<option value="GM">Gambia</option>
										<option value="GE">Georgia</option>
										<option value="DE">Germany</option>
										<option value="GH">Ghana</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB" selected="selected">United Kingdom (UK)</option>
										<option value="ZW">Zimbabwe</option>
									</select>
								</div>

								<div class="form-group validate-required validate-fax" id="billing_fax_field">
									<label for="billing_fax" class="control-label">
										<span class="grey">Fax </span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_fax" id="billing_fax" placeholder="" value="">

								</div>


								<div class="form-group" id="billing_password2_field">
									<label for="billing_password2" class="control-label">
										<span class="grey">Confirm Password</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="billing_password2" id="billing_password2" placeholder="" value="">

								</div>


							</div>

							<div class="col-sm-12">

								<button type="submit" class="theme_button wide_button color1">Register Now</button>
								<button type="reset" class="theme_button wide_button">Clear Form</button>

							</div>

						</form>


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