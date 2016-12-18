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
							<h1>Contact</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms section_padding_top_75 section_padding_bottom_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small">
									<i class="fa fa-map-marker"></i>
								</div>

								<p class="grey">
									368 Sarah Drive, Lafayette, LA 70506
								</p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small">
									<i class="fa fa-phone"></i>
								</div>

								<p class="grey">
									8 (800) 695-2684 / 8 (800) 695-2686
								</p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small">
									<i class="fa fa-envelope-o"></i>
								</div>

								<p class="bold grey">justice@support.com</p>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section id="map"></section>

			<section class="ls section_padding_top_75 section_padding_bottom_100 column_margin_0">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 to_animate">
							<form class="contact-form columns_padding_5" method="post" action="/">
								<div class="row">

									<div class="col-sm-4">
										<p class="contact-form-name">
											<label for="name" class="sr-only">Full Name
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control with-icon">
											<i class="fa fa-user"></i>
										</p>
									</div>
									<div class="col-sm-4">
										<p class="contact-form-email">
											<label for="email" class="sr-only">Email address
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with-icon">
											<i class="fa fa-envelope"></i>
										</p>
									</div>
									<div class="col-sm-4">
										<p class="contact-form-phone">
											<label for="phone" class="sr-only">Phone</label>
											<input type="text" size="30" value="" name="phone" id="phone" class="form-control with-icon">
											<i class="fa fa-phone"></i>
										</p>
									</div>
									<div class="col-sm-12">
										<p class="contact-form-subject">
											<label for="subject" class="sr-only">Subject
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control with-icon">
											<i class="fa fa-thumb-tack"></i>
										</p>
									</div>
									<div class="col-sm-12">
										<p class="contact-form-message">
											<label for="message" class="sr-only">Message</label>
											<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control with-icon"></textarea>
											<i class="fa fa-pencil"></i>
										</p>
									</div>
								</div>
								<div class="row bottommargin_10">
									<div class="col-sm-12">
										<p class="contact-form-submit">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 margin_0">Send Us</button>
										</p>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</section>


			<?php include('files/footer.php'); ?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>


	<!-- Map Scripts -->

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMA8uQq-Z3OGRTmns3LGRVJJi23E751Eo"></script>
	<script type="text/javascript">
		var lat;
		var lng;
		var map;
		var styles = [
		{
			"featureType": "administrative",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#444444"
			}]
		},
		{
			"featureType": "landscape",
			"elementType": "all",
			"stylers": [
			{
				"color": "#f2f2f2"
			}]
		},
		{
			"featureType": "poi",
			"elementType": "all",
			"stylers": [
			{
				"visibility": "off"
			}]
		},
		{
			"featureType": "road",
			"elementType": "all",
			"stylers": [
			{
				"saturation": -100
			},
			{
				"lightness": 45
			}]
		},
		{
			"featureType": "road.highway",
			"elementType": "all",
			"stylers": [
			{
				"visibility": "simplified"
			}]
		},
		{
			"featureType": "road.arterial",
			"elementType": "labels.icon",
			"stylers": [
			{
				"visibility": "off"
			}]
		},
		{
			"featureType": "transit",
			"elementType": "all",
			"stylers": [
			{
				"visibility": "off"
			}]
		},
		{
			"featureType": "water",
			"elementType": "all",
			"stylers": [
			{
				"color": "#46bcec"
			},
			{
				"visibility": "on"
			}]
		}];

		//type your address after "address="
		jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=london, baker street, 221b&sensor=false', function(data)
		{
			lat = data.results[0].geometry.location.lat;
			lng = data.results[0].geometry.location.lng;
		}).complete(function()
		{
			dxmapLoadMap();
		});

		function attachSecretMessage(marker, message)
		{
			var infowindow = new google.maps.InfoWindow(
			{
				content: message
			});
			google.maps.event.addListener(marker, 'click', function()
			{
				infowindow.open(map, marker);
			});
		}

		window.dxmapLoadMap = function()
		{
			var center = new google.maps.LatLng(lat, lng);
			var settings = {
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				zoom: 16,
				draggable: true,
				scrollwheel: false,
				center: center,
				styles: styles
			};
			map = new google.maps.Map(document.getElementById('map'), settings);

			var marker = new google.maps.Marker(
			{
				position: center,
				title: 'Map title',
				map: map
			});
			marker.setTitle('Map title'.toString());
			//type your map title and description here
			attachSecretMessage(marker, '<h3>Map title</h3><p>Map HTML description</p>');
		}
	</script>

</body>

</html>