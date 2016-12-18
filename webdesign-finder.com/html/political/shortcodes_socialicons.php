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
							<h1>Social Buttons</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li class="active">Social Buttons</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls ms section_padding_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">

							<h2 class="section_header">New Icons</h2>

							<p>

								Social icons font:
								<a href="http://www.socicon.com" target="_blank" title="the social icons font">socicon</a>

							</p>

							<div class="demo-icon">
								<span class="name">Twitter</span>
								<span class="class-name">.soc-twitter</span>
								<a href="#" class="social-icon soc-twitter"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Facebook</span>
								<span class="class-name">.soc-facebook</span>
								<a href="#" class="social-icon soc-facebook"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Google+</span>
								<span class="class-name">.soc-google</span>
								<a href="#" class="social-icon soc-google"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Pinterest</span>
								<span class="class-name">.soc-pinterest</span>
								<a href="#" class="social-icon soc-pinterest"></a>
							</div>
							<div class="demo-icon">
								<span class="name">foursquare</span>
								<span class="class-name">.soc-foursquare</span>
								<a href="#" class="social-icon soc-foursquare"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Yahoo!</span>
								<span class="class-name">.soc-yahoo</span>
								<a href="#" class="social-icon soc-yahoo"></a>
							</div>
							<div class="demo-icon">
								<span class="name">skype</span>
								<span class="class-name">.soc-skype</span>
								<a href="#" class="social-icon soc-skype"></a>
							</div>
							<div class="demo-icon">
								<span class="name">yelp</span>
								<span class="class-name">.soc-yelp</span>
								<a href="#" class="social-icon soc-yelp"></a>
							</div>
							<div class="demo-icon">
								<span class="name">FeedBurner</span>
								<span class="class-name">.soc-feedburner</span>
								<a href="#" class="social-icon soc-feedburner"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Linkedin</span>
								<span class="class-name">.soc-linkedin</span>
								<a href="#" class="social-icon soc-linkedin"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Viadeo</span>
								<span class="class-name">.soc-viadeo</span>
								<a href="#" class="social-icon soc-viadeo"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Xing</span>
								<span class="class-name">.soc-xing</span>
								<a href="#" class="social-icon soc-xing"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Myspace</span>
								<span class="class-name">.soc-myspace</span>
								<a href="#" class="social-icon soc-myspace"></a>
							</div>
							<div class="demo-icon">
								<span class="name">soundcloud</span>
								<span class="class-name">.soc-soundcloud</span>
								<a href="#" class="social-icon soc-soundcloud"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Spotify</span>
								<span class="class-name">.soc-spotify</span>
								<a href="#" class="social-icon soc-spotify"></a>
							</div>
							<div class="demo-icon">
								<span class="name">grooveshark</span>
								<span class="class-name">.soc-grooveshark</span>
								<a href="#" class="social-icon soc-grooveshark"></a>
							</div>
							<div class="demo-icon">
								<span class="name">last.fm</span>
								<span class="class-name">.soc-lastfm</span>
								<a href="#" class="social-icon soc-lastfm"></a>
							</div>
							<div class="demo-icon">
								<span class="name">YouTube</span>
								<span class="class-name">.soc-youtube</span>
								<a href="#" class="social-icon soc-youtube"></a>
							</div>
							<div class="demo-icon">
								<span class="name">vimeo</span>
								<span class="class-name">.soc-vimeo</span>
								<a href="#" class="social-icon soc-vimeo"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Dailymotion</span>
								<span class="class-name">.soc-dailymotion</span>
								<a href="#" class="social-icon soc-dailymotion"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Vine</span>
								<span class="class-name">.soc-vine</span>
								<a href="#" class="social-icon soc-vine"></a>
							</div>
							<div class="demo-icon">
								<span class="name">flickr</span>
								<span class="class-name">.soc-flickr</span>
								<a href="#" class="social-icon soc-flickr"></a>
							</div>
							<div class="demo-icon">
								<span class="name">500px</span>
								<span class="class-name">.soc-500px</span>
								<a href="#" class="social-icon soc-500px"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Instagram</span>
								<span class="class-name">.soc-instagram</span>
								<a href="#" class="social-icon soc-instagram"></a>
							</div>
							<div class="demo-icon">
								<span class="name">WordPress</span>
								<span class="class-name">.soc-wordpress</span>
								<a href="#" class="social-icon soc-wordpress"></a>
							</div>
							<div class="demo-icon">
								<span class="name">tumblr</span>
								<span class="class-name">.soc-tumblr</span>
								<a href="#" class="social-icon soc-tumblr"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Blogger</span>
								<span class="class-name">.soc-blogger</span>
								<a href="#" class="social-icon soc-blogger"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Technorati</span>
								<span class="class-name">.soc-technorati</span>
								<a href="#" class="social-icon soc-technorati"></a>
							</div>
							<div class="demo-icon">
								<span class="name">reddit</span>
								<span class="class-name">.soc-reddit</span>
								<a href="#" class="social-icon soc-reddit"></a>
							</div>
							<div class="demo-icon">
								<span class="name">dribbble</span>
								<span class="class-name">.soc-dribbble</span>
								<a href="#" class="social-icon soc-dribbble"></a>
							</div>
							<div class="demo-icon">
								<span class="name">StumbleUpon</span>
								<span class="class-name">.soc-stumbleupon</span>
								<a href="#" class="social-icon soc-stumbleupon"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Digg</span>
								<span class="class-name">.soc-digg</span>
								<a href="#" class="social-icon soc-digg"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Envato</span>
								<span class="class-name">.soc-envato</span>
								<a href="#" class="social-icon soc-envato"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Behance</span>
								<span class="class-name">.soc-behance</span>
								<a href="#" class="social-icon soc-behance"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Delicious</span>
								<span class="class-name">.soc-delicious</span>
								<a href="#" class="social-icon soc-delicious"></a>
							</div>
							<div class="demo-icon">
								<span class="name">deviantART</span>
								<span class="class-name">.soc-deviantart</span>
								<a href="#" class="social-icon soc-deviantart"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Forrst</span>
								<span class="class-name">.soc-forrst</span>
								<a href="#" class="social-icon soc-forrst"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Play Store</span>
								<span class="class-name">.soc-play</span>
								<a href="#" class="social-icon soc-play"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Zerply</span>
								<span class="class-name">.soc-zerply</span>
								<a href="#" class="social-icon soc-zerply"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Wikipedia</span>
								<span class="class-name">.soc-wikipedia</span>
								<a href="#" class="social-icon soc-wikipedia"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Apple</span>
								<span class="class-name">.soc-apple</span>
								<a href="#" class="social-icon soc-apple"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Flattr</span>
								<span class="class-name">.soc-flattr</span>
								<a href="#" class="social-icon soc-flattr"></a>
							</div>
							<div class="demo-icon">
								<span class="name">GitHub</span>
								<span class="class-name">.soc-github</span>
								<a href="#" class="social-icon soc-github"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Chime.in</span>
								<span class="class-name">.soc-chimein</span>
								<a href="#" class="social-icon soc-chimein"></a>
							</div>
							<div class="demo-icon">
								<span class="name">FriendFeed</span>
								<span class="class-name">.soc-friendfeed</span>
								<a href="#" class="social-icon soc-friendfeed"></a>
							</div>
							<div class="demo-icon">
								<span class="name">NewsVine</span>
								<span class="class-name">.soc-newsvine</span>
								<a href="#" class="social-icon soc-newsvine"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Identica</span>
								<span class="class-name">.soc-identica</span>
								<a href="#" class="social-icon soc-identica"></a>
							</div>
							<div class="demo-icon">
								<span class="name">bebo</span>
								<span class="class-name">.soc-bebo</span>
								<a href="#" class="social-icon soc-bebo"></a>
							</div>
							<div class="demo-icon">
								<span class="name">zynga</span>
								<span class="class-name">.soc-zynga</span>
								<a href="#" class="social-icon soc-zynga"></a>
							</div>
							<div class="demo-icon">
								<span class="name">steam</span>
								<span class="class-name">.soc-steam</span>
								<a href="#" class="social-icon soc-steam"></a>
							</div>
							<div class="demo-icon">
								<span class="name">XBOX</span>
								<span class="class-name">.soc-xbox</span>
								<a href="#" class="social-icon soc-xbox"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Windows</span>
								<span class="class-name">.soc-windows</span>
								<a href="#" class="social-icon soc-windows"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Outlook</span>
								<span class="class-name">.soc-outlook</span>
								<a href="#" class="social-icon soc-outlook"></a>
							</div>
							<div class="demo-icon">
								<span class="name">coderwall</span>
								<span class="class-name">.soc-coderwall</span>
								<a href="#" class="social-icon soc-coderwall"></a>
							</div>
							<div class="demo-icon">
								<span class="name">tripadvisor</span>
								<span class="class-name">.soc-tripadvisor</span>
								<a href="#" class="social-icon soc-tripadvisor"></a>
							</div>
							<div class="demo-icon">
								<span class="name">App.net</span>
								<span class="class-name">.soc-appnet</span>
								<a href="#" class="social-icon soc-appnet"></a>
							</div>
							<div class="demo-icon">
								<span class="name">goodreads</span>
								<span class="class-name">.soc-goodreads</span>
								<a href="#" class="social-icon soc-goodreads"></a>
							</div>
							<div class="demo-icon">
								<span class="name">TripIt</span>
								<span class="class-name">.soc-tripit</span>
								<a href="#" class="social-icon soc-tripit"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Lanyrd</span>
								<span class="class-name">.soc-lanyrd</span>
								<a href="#" class="social-icon soc-lanyrd"></a>
							</div>
							<div class="demo-icon">
								<span class="name">SlideShare</span>
								<span class="class-name">.soc-slideshare</span>
								<a href="#" class="social-icon soc-slideshare"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Buffer</span>
								<span class="class-name">.soc-buffer</span>
								<a href="#" class="social-icon soc-buffer"></a>
							</div>
							<div class="demo-icon">
								<span class="name">RSS</span>
								<span class="class-name">.soc-rss</span>
								<a href="#" class="social-icon soc-rss"></a>
							</div>
							<div class="demo-icon">
								<span class="name">VKontakte</span>
								<span class="class-name">.soc-vkontakte</span>
								<a href="#" class="social-icon soc-vkontakte"></a>
							</div>
							<div class="demo-icon">
								<span class="name">DISQUS</span>
								<span class="class-name">.soc-disqus</span>
								<a href="#" class="social-icon soc-disqus"></a>
							</div>
							<div class="demo-icon">
								<span class="name">houzz</span>
								<span class="class-name">.soc-houzz</span>
								<a href="#" class="social-icon soc-houzz"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Mail</span>
								<span class="class-name">.soc-mail</span>
								<a href="#" class="social-icon soc-mail"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Patreon</span>
								<span class="class-name">.soc-patreon</span>
								<a href="#" class="social-icon soc-patreon"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Paypal</span>
								<span class="class-name">.soc-paypal</span>
								<a href="#" class="social-icon soc-paypal"></a>
							</div>
							<div class="demo-icon">
								<span class="name">PlayStation</span>
								<span class="class-name">.soc-playstation</span>
								<a href="#" class="social-icon soc-playstation"></a>
							</div>
							<div class="demo-icon">
								<span class="name">SmugMug</span>
								<span class="class-name">.soc-smugmug</span>
								<a href="#" class="social-icon soc-smugmug"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Swarm</span>
								<span class="class-name">.soc-swarm</span>
								<a href="#" class="social-icon soc-swarm"></a>
							</div>
							<div class="demo-icon">
								<span class="name">triplej</span>
								<span class="class-name">.soc-triplej</span>
								<a href="#" class="social-icon soc-triplej"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Yammer</span>
								<span class="class-name">.soc-yammer</span>
								<a href="#" class="social-icon soc-yammer"></a>
							</div>
							<div class="demo-icon">
								<span class="name">stackoverflow</span>
								<span class="class-name">.soc-stackoverflow</span>
								<a href="#" class="social-icon soc-stackoverflow"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Drupal</span>
								<span class="class-name">.soc-drupal</span>
								<a href="#" class="social-icon soc-drupal"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Odnoklassniki</span>
								<span class="class-name">.soc-odnoklassniki</span>
								<a href="#" class="social-icon soc-odnoklassniki"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Android</span>
								<span class="class-name">.soc-android</span>
								<a href="#" class="social-icon soc-android"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Meetup</span>
								<span class="class-name">.soc-meetup</span>
								<a href="#" class="social-icon soc-meetup"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Mozilla Persona</span>
								<span class="class-name">.soc-persona</span>
								<a href="#" class="social-icon soc-persona"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Amazon</span>
								<span class="class-name">.soc-amazon</span>
								<a href="#" class="social-icon soc-amazon"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Ello</span>
								<span class="class-name">.soc-ello</span>
								<a href="#" class="social-icon soc-ello"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Mixcloud</span>
								<span class="class-name">.soc-mixcloud</span>
								<a href="#" class="social-icon soc-mixcloud"></a>
							</div>
							<div class="demo-icon">
								<span class="name">8tracks</span>
								<span class="class-name">.soc-8tracks</span>
								<a href="#" class="social-icon soc-8tracks"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Twitch</span>
								<span class="class-name">.soc-twitch</span>
								<a href="#" class="social-icon soc-twitch"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Airbnb</span>
								<span class="class-name">.soc-airbnb</span>
								<a href="#" class="social-icon soc-airbnb"></a>
							</div>
							<div class="demo-icon">
								<span class="name">Pocket</span>
								<span class="class-name">.soc-pocket</span>
								<a href="#" class="social-icon soc-pocket"></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<hr class="margin_0">


			<section class="ls social-icons-demo section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2>
								Simple Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons1" aria-expanded="false" aria-controls="collapseIcons1">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-pinterest"></a>
							<a href="#" class="social-icon soc-foursquare"></a>
							<a href="#" class="social-icon soc-yahoo"></a>
							<a href="#" class="social-icon soc-skype"></a>
							<a href="#" class="social-icon soc-yelp"></a>
							<a href="#" class="social-icon soc-feedburner"></a>
							<a href="#" class="social-icon soc-linkedin"></a>
							<a href="#" class="social-icon soc-viadeo"></a>
							<a href="#" class="social-icon soc-xing"></a>
							<a href="#" class="social-icon soc-myspace"></a>
							<a href="#" class="social-icon soc-soundcloud"></a>
							<a href="#" class="social-icon soc-spotify"></a>
							<a href="#" class="social-icon soc-grooveshark"></a>
							<a href="#" class="social-icon soc-lastfm"></a>
							<a href="#" class="social-icon soc-youtube"></a>
							<a href="#" class="social-icon soc-vimeo"></a>
							<a href="#" class="social-icon soc-dailymotion"></a>
							<a href="#" class="social-icon soc-vine"></a>
							<a href="#" class="social-icon soc-flickr"></a>
							<a href="#" class="social-icon soc-500px"></a>
							<a href="#" class="social-icon soc-instagram"></a>
							<a href="#" class="social-icon soc-wordpress"></a>
							<a href="#" class="social-icon soc-tumblr"></a>
							<a href="#" class="social-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons1">
								<a href="#" class="social-icon soc-technorati"></a>
								<a href="#" class="social-icon soc-reddit"></a>
								<a href="#" class="social-icon soc-dribbble"></a>
								<a href="#" class="social-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon soc-digg"></a>
								<a href="#" class="social-icon soc-envato"></a>
								<a href="#" class="social-icon soc-behance"></a>
								<a href="#" class="social-icon soc-delicious"></a>
								<a href="#" class="social-icon soc-deviantart"></a>
								<a href="#" class="social-icon soc-forrst"></a>
								<a href="#" class="social-icon soc-play"></a>
								<a href="#" class="social-icon soc-zerply"></a>
								<a href="#" class="social-icon soc-wikipedia"></a>
								<a href="#" class="social-icon soc-apple"></a>
								<a href="#" class="social-icon soc-flattr"></a>
								<a href="#" class="social-icon soc-github"></a>
								<a href="#" class="social-icon soc-chimein"></a>
								<a href="#" class="social-icon soc-friendfeed"></a>
								<a href="#" class="social-icon soc-newsvine"></a>
								<a href="#" class="social-icon soc-identica"></a>
								<a href="#" class="social-icon soc-bebo"></a>
								<a href="#" class="social-icon soc-zynga"></a>
								<a href="#" class="social-icon soc-steam"></a>
								<a href="#" class="social-icon soc-xbox"></a>
								<a href="#" class="social-icon soc-windows"></a>
								<a href="#" class="social-icon soc-outlook"></a>
								<a href="#" class="social-icon soc-coderwall"></a>
								<a href="#" class="social-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon soc-appnet"></a>
								<a href="#" class="social-icon soc-goodreads"></a>
								<a href="#" class="social-icon soc-tripit"></a>
								<a href="#" class="social-icon soc-lanyrd"></a>
								<a href="#" class="social-icon soc-slideshare"></a>
								<a href="#" class="social-icon soc-buffer"></a>
								<a href="#" class="social-icon soc-rss"></a>
								<a href="#" class="social-icon soc-vkontakte"></a>
								<a href="#" class="social-icon soc-disqus"></a>
								<a href="#" class="social-icon soc-houzz"></a>
								<a href="#" class="social-icon soc-mail"></a>
								<a href="#" class="social-icon soc-patreon"></a>
								<a href="#" class="social-icon soc-paypal"></a>
								<a href="#" class="social-icon soc-playstation"></a>
								<a href="#" class="social-icon soc-smugmug"></a>
								<a href="#" class="social-icon soc-swarm"></a>
								<a href="#" class="social-icon soc-triplej"></a>
								<a href="#" class="social-icon soc-yammer"></a>
								<a href="#" class="social-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon soc-drupal"></a>
								<a href="#" class="social-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon soc-android"></a>
								<a href="#" class="social-icon soc-meetup"></a>
								<a href="#" class="social-icon soc-persona"></a>
								<a href="#" class="social-icon soc-amazon"></a>
								<a href="#" class="social-icon soc-ello"></a>
								<a href="#" class="social-icon soc-mixcloud"></a>
								<a href="#" class="social-icon soc-8tracks"></a>
								<a href="#" class="social-icon soc-twitch"></a>
								<a href="#" class="social-icon soc-airbnb"></a>
								<a href="#" class="social-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons2" aria-expanded="false" aria-controls="collapseIcons2">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon soc-google"></a>
							<a href="#" class="social-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons2">
								<a href="#" class="social-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon soc-play"></a>
								<a href="#" class="social-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon soc-github"></a>
								<a href="#" class="social-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon soc-android"></a>
								<a href="#" class="social-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons3" aria-expanded="false" aria-controls="collapseIcons3">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons3">
								<a href="#" class="social-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons4" aria-expanded="false" aria-controls="collapseIcons4">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons4">
								<a href="#" class="social-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons5" aria-expanded="false" aria-controls="collapseIcons5">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons5">
								<a href="#" class="social-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons6" aria-expanded="false" aria-controls="collapseIcons6">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons6">
								<a href="#" class="social-icon color-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Rounded Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons7" aria-expanded="false" aria-controls="collapseIcons7">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons7">
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons8" aria-expanded="false" aria-controls="collapseIcons8">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon soc-google"></a>
							<a href="#" class="social-icon color-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon soc-spotify"></a>
							<a href="#" class="social-icon color-icon soc-grooveshark"></a>
							<a href="#" class="social-icon color-icon soc-lastfm"></a>
							<a href="#" class="social-icon color-icon soc-youtube"></a>
							<a href="#" class="social-icon color-icon soc-vimeo"></a>
							<a href="#" class="social-icon color-icon soc-dailymotion"></a>
							<a href="#" class="social-icon color-icon soc-vine"></a>
							<a href="#" class="social-icon color-icon soc-flickr"></a>
							<a href="#" class="social-icon color-icon soc-500px"></a>
							<a href="#" class="social-icon color-icon soc-instagram"></a>
							<a href="#" class="social-icon color-icon soc-wordpress"></a>
							<a href="#" class="social-icon color-icon soc-tumblr"></a>
							<a href="#" class="social-icon color-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons8">
								<a href="#" class="social-icon color-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon soc-play"></a>
								<a href="#" class="social-icon color-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon soc-github"></a>
								<a href="#" class="social-icon color-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon soc-android"></a>
								<a href="#" class="social-icon color-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons9" aria-expanded="false" aria-controls="collapseIcons9">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons9">
								<a href="#" class="social-icon color-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Round Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons10" aria-expanded="false" aria-controls="collapseIcons10">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons10">
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons11" aria-expanded="false" aria-controls="collapseIcons11">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons11">
								<a href="#" class="social-icon color-bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon soc-pocket"></a>
							</div>
						</div>


						<div class="col-sm-12">
							<h2>
								Round Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons12" aria-expanded="false" aria-controls="collapseIcons12">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons12">
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>


					</div>
				</div>
			</section>


			<section class="ls ms social-icons-demo section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2>
								Simple Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons13" aria-expanded="false" aria-controls="collapseIcons13">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-pinterest"></a>
							<a href="#" class="social-icon soc-foursquare"></a>
							<a href="#" class="social-icon soc-yahoo"></a>
							<a href="#" class="social-icon soc-skype"></a>
							<a href="#" class="social-icon soc-yelp"></a>
							<a href="#" class="social-icon soc-feedburner"></a>
							<a href="#" class="social-icon soc-linkedin"></a>
							<a href="#" class="social-icon soc-viadeo"></a>
							<a href="#" class="social-icon soc-xing"></a>
							<a href="#" class="social-icon soc-myspace"></a>
							<a href="#" class="social-icon soc-soundcloud"></a>
							<a href="#" class="social-icon soc-spotify"></a>
							<a href="#" class="social-icon soc-grooveshark"></a>
							<a href="#" class="social-icon soc-lastfm"></a>
							<a href="#" class="social-icon soc-youtube"></a>
							<a href="#" class="social-icon soc-vimeo"></a>
							<a href="#" class="social-icon soc-dailymotion"></a>
							<a href="#" class="social-icon soc-vine"></a>
							<a href="#" class="social-icon soc-flickr"></a>
							<a href="#" class="social-icon soc-500px"></a>
							<a href="#" class="social-icon soc-instagram"></a>
							<a href="#" class="social-icon soc-wordpress"></a>
							<a href="#" class="social-icon soc-tumblr"></a>
							<a href="#" class="social-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons13">
								<a href="#" class="social-icon soc-technorati"></a>
								<a href="#" class="social-icon soc-reddit"></a>
								<a href="#" class="social-icon soc-dribbble"></a>
								<a href="#" class="social-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon soc-digg"></a>
								<a href="#" class="social-icon soc-envato"></a>
								<a href="#" class="social-icon soc-behance"></a>
								<a href="#" class="social-icon soc-delicious"></a>
								<a href="#" class="social-icon soc-deviantart"></a>
								<a href="#" class="social-icon soc-forrst"></a>
								<a href="#" class="social-icon soc-play"></a>
								<a href="#" class="social-icon soc-zerply"></a>
								<a href="#" class="social-icon soc-wikipedia"></a>
								<a href="#" class="social-icon soc-apple"></a>
								<a href="#" class="social-icon soc-flattr"></a>
								<a href="#" class="social-icon soc-github"></a>
								<a href="#" class="social-icon soc-chimein"></a>
								<a href="#" class="social-icon soc-friendfeed"></a>
								<a href="#" class="social-icon soc-newsvine"></a>
								<a href="#" class="social-icon soc-identica"></a>
								<a href="#" class="social-icon soc-bebo"></a>
								<a href="#" class="social-icon soc-zynga"></a>
								<a href="#" class="social-icon soc-steam"></a>
								<a href="#" class="social-icon soc-xbox"></a>
								<a href="#" class="social-icon soc-windows"></a>
								<a href="#" class="social-icon soc-outlook"></a>
								<a href="#" class="social-icon soc-coderwall"></a>
								<a href="#" class="social-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon soc-appnet"></a>
								<a href="#" class="social-icon soc-goodreads"></a>
								<a href="#" class="social-icon soc-tripit"></a>
								<a href="#" class="social-icon soc-lanyrd"></a>
								<a href="#" class="social-icon soc-slideshare"></a>
								<a href="#" class="social-icon soc-buffer"></a>
								<a href="#" class="social-icon soc-rss"></a>
								<a href="#" class="social-icon soc-vkontakte"></a>
								<a href="#" class="social-icon soc-disqus"></a>
								<a href="#" class="social-icon soc-houzz"></a>
								<a href="#" class="social-icon soc-mail"></a>
								<a href="#" class="social-icon soc-patreon"></a>
								<a href="#" class="social-icon soc-paypal"></a>
								<a href="#" class="social-icon soc-playstation"></a>
								<a href="#" class="social-icon soc-smugmug"></a>
								<a href="#" class="social-icon soc-swarm"></a>
								<a href="#" class="social-icon soc-triplej"></a>
								<a href="#" class="social-icon soc-yammer"></a>
								<a href="#" class="social-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon soc-drupal"></a>
								<a href="#" class="social-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon soc-android"></a>
								<a href="#" class="social-icon soc-meetup"></a>
								<a href="#" class="social-icon soc-persona"></a>
								<a href="#" class="social-icon soc-amazon"></a>
								<a href="#" class="social-icon soc-ello"></a>
								<a href="#" class="social-icon soc-mixcloud"></a>
								<a href="#" class="social-icon soc-8tracks"></a>
								<a href="#" class="social-icon soc-twitch"></a>
								<a href="#" class="social-icon soc-airbnb"></a>
								<a href="#" class="social-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons14" aria-expanded="false" aria-controls="collapseIcons14">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon soc-google"></a>
							<a href="#" class="social-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons14">
								<a href="#" class="social-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon soc-play"></a>
								<a href="#" class="social-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon soc-github"></a>
								<a href="#" class="social-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon soc-android"></a>
								<a href="#" class="social-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons15" aria-expanded="false" aria-controls="collapseIcons15">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons15">
								<a href="#" class="social-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons16" aria-expanded="false" aria-controls="collapseIcons16">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons16">
								<a href="#" class="social-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons17" aria-expanded="false" aria-controls="collapseIcons17">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons17">
								<a href="#" class="social-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons18" aria-expanded="false" aria-controls="collapseIcons18">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons18">
								<a href="#" class="social-icon color-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Rounded Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons19" aria-expanded="false" aria-controls="collapseIcons19">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons19">
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons20" aria-expanded="false" aria-controls="collapseIcons20">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon soc-google"></a>
							<a href="#" class="social-icon color-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon soc-spotify"></a>
							<a href="#" class="social-icon color-icon soc-grooveshark"></a>
							<a href="#" class="social-icon color-icon soc-lastfm"></a>
							<a href="#" class="social-icon color-icon soc-youtube"></a>
							<a href="#" class="social-icon color-icon soc-vimeo"></a>
							<a href="#" class="social-icon color-icon soc-dailymotion"></a>
							<a href="#" class="social-icon color-icon soc-vine"></a>
							<a href="#" class="social-icon color-icon soc-flickr"></a>
							<a href="#" class="social-icon color-icon soc-500px"></a>
							<a href="#" class="social-icon color-icon soc-instagram"></a>
							<a href="#" class="social-icon color-icon soc-wordpress"></a>
							<a href="#" class="social-icon color-icon soc-tumblr"></a>
							<a href="#" class="social-icon color-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons20">
								<a href="#" class="social-icon color-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon soc-play"></a>
								<a href="#" class="social-icon color-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon soc-github"></a>
								<a href="#" class="social-icon color-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon soc-android"></a>
								<a href="#" class="social-icon color-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons21" aria-expanded="false" aria-controls="collapseIcons21">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons21">
								<a href="#" class="social-icon color-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Round Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons22" aria-expanded="false" aria-controls="collapseIcons22">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons22">
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons23" aria-expanded="false" aria-controls="collapseIcons23">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons23">
								<a href="#" class="social-icon color-bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon soc-pocket"></a>
							</div>
						</div>


						<div class="col-sm-12">
							<h2>
								Round Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons24" aria-expanded="false" aria-controls="collapseIcons24">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons24">
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>


					</div>
				</div>
			</section>

			<section class="cs social-icons-demo section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2>
								Simple Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons25" aria-expanded="false" aria-controls="collapseIcons25">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-pinterest"></a>
							<a href="#" class="social-icon soc-foursquare"></a>
							<a href="#" class="social-icon soc-yahoo"></a>
							<a href="#" class="social-icon soc-skype"></a>
							<a href="#" class="social-icon soc-yelp"></a>
							<a href="#" class="social-icon soc-feedburner"></a>
							<a href="#" class="social-icon soc-linkedin"></a>
							<a href="#" class="social-icon soc-viadeo"></a>
							<a href="#" class="social-icon soc-xing"></a>
							<a href="#" class="social-icon soc-myspace"></a>
							<a href="#" class="social-icon soc-soundcloud"></a>
							<a href="#" class="social-icon soc-spotify"></a>
							<a href="#" class="social-icon soc-grooveshark"></a>
							<a href="#" class="social-icon soc-lastfm"></a>
							<a href="#" class="social-icon soc-youtube"></a>
							<a href="#" class="social-icon soc-vimeo"></a>
							<a href="#" class="social-icon soc-dailymotion"></a>
							<a href="#" class="social-icon soc-vine"></a>
							<a href="#" class="social-icon soc-flickr"></a>
							<a href="#" class="social-icon soc-500px"></a>
							<a href="#" class="social-icon soc-instagram"></a>
							<a href="#" class="social-icon soc-wordpress"></a>
							<a href="#" class="social-icon soc-tumblr"></a>
							<a href="#" class="social-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons25">
								<a href="#" class="social-icon soc-technorati"></a>
								<a href="#" class="social-icon soc-reddit"></a>
								<a href="#" class="social-icon soc-dribbble"></a>
								<a href="#" class="social-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon soc-digg"></a>
								<a href="#" class="social-icon soc-envato"></a>
								<a href="#" class="social-icon soc-behance"></a>
								<a href="#" class="social-icon soc-delicious"></a>
								<a href="#" class="social-icon soc-deviantart"></a>
								<a href="#" class="social-icon soc-forrst"></a>
								<a href="#" class="social-icon soc-play"></a>
								<a href="#" class="social-icon soc-zerply"></a>
								<a href="#" class="social-icon soc-wikipedia"></a>
								<a href="#" class="social-icon soc-apple"></a>
								<a href="#" class="social-icon soc-flattr"></a>
								<a href="#" class="social-icon soc-github"></a>
								<a href="#" class="social-icon soc-chimein"></a>
								<a href="#" class="social-icon soc-friendfeed"></a>
								<a href="#" class="social-icon soc-newsvine"></a>
								<a href="#" class="social-icon soc-identica"></a>
								<a href="#" class="social-icon soc-bebo"></a>
								<a href="#" class="social-icon soc-zynga"></a>
								<a href="#" class="social-icon soc-steam"></a>
								<a href="#" class="social-icon soc-xbox"></a>
								<a href="#" class="social-icon soc-windows"></a>
								<a href="#" class="social-icon soc-outlook"></a>
								<a href="#" class="social-icon soc-coderwall"></a>
								<a href="#" class="social-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon soc-appnet"></a>
								<a href="#" class="social-icon soc-goodreads"></a>
								<a href="#" class="social-icon soc-tripit"></a>
								<a href="#" class="social-icon soc-lanyrd"></a>
								<a href="#" class="social-icon soc-slideshare"></a>
								<a href="#" class="social-icon soc-buffer"></a>
								<a href="#" class="social-icon soc-rss"></a>
								<a href="#" class="social-icon soc-vkontakte"></a>
								<a href="#" class="social-icon soc-disqus"></a>
								<a href="#" class="social-icon soc-houzz"></a>
								<a href="#" class="social-icon soc-mail"></a>
								<a href="#" class="social-icon soc-patreon"></a>
								<a href="#" class="social-icon soc-paypal"></a>
								<a href="#" class="social-icon soc-playstation"></a>
								<a href="#" class="social-icon soc-smugmug"></a>
								<a href="#" class="social-icon soc-swarm"></a>
								<a href="#" class="social-icon soc-triplej"></a>
								<a href="#" class="social-icon soc-yammer"></a>
								<a href="#" class="social-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon soc-drupal"></a>
								<a href="#" class="social-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon soc-android"></a>
								<a href="#" class="social-icon soc-meetup"></a>
								<a href="#" class="social-icon soc-persona"></a>
								<a href="#" class="social-icon soc-amazon"></a>
								<a href="#" class="social-icon soc-ello"></a>
								<a href="#" class="social-icon soc-mixcloud"></a>
								<a href="#" class="social-icon soc-8tracks"></a>
								<a href="#" class="social-icon soc-twitch"></a>
								<a href="#" class="social-icon soc-airbnb"></a>
								<a href="#" class="social-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons26" aria-expanded="false" aria-controls="collapseIcons26">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon soc-google"></a>
							<a href="#" class="social-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons26">
								<a href="#" class="social-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon soc-play"></a>
								<a href="#" class="social-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon soc-github"></a>
								<a href="#" class="social-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon soc-android"></a>
								<a href="#" class="social-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons27" aria-expanded="false" aria-controls="collapseIcons27">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons27">
								<a href="#" class="social-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons28" aria-expanded="false" aria-controls="collapseIcons28">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons28">
								<a href="#" class="social-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons29" aria-expanded="false" aria-controls="collapseIcons29">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons29">
								<a href="#" class="social-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons30" aria-expanded="false" aria-controls="collapseIcons30">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons30">
								<a href="#" class="social-icon color-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Rounded Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons31" aria-expanded="false" aria-controls="collapseIcons31">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons31">
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons32" aria-expanded="false" aria-controls="collapseIcons32">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon soc-google"></a>
							<a href="#" class="social-icon color-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon soc-spotify"></a>
							<a href="#" class="social-icon color-icon soc-grooveshark"></a>
							<a href="#" class="social-icon color-icon soc-lastfm"></a>
							<a href="#" class="social-icon color-icon soc-youtube"></a>
							<a href="#" class="social-icon color-icon soc-vimeo"></a>
							<a href="#" class="social-icon color-icon soc-dailymotion"></a>
							<a href="#" class="social-icon color-icon soc-vine"></a>
							<a href="#" class="social-icon color-icon soc-flickr"></a>
							<a href="#" class="social-icon color-icon soc-500px"></a>
							<a href="#" class="social-icon color-icon soc-instagram"></a>
							<a href="#" class="social-icon color-icon soc-wordpress"></a>
							<a href="#" class="social-icon color-icon soc-tumblr"></a>
							<a href="#" class="social-icon color-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons32">
								<a href="#" class="social-icon color-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon soc-play"></a>
								<a href="#" class="social-icon color-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon soc-github"></a>
								<a href="#" class="social-icon color-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon soc-android"></a>
								<a href="#" class="social-icon color-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons33" aria-expanded="false" aria-controls="collapseIcons33">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons33">
								<a href="#" class="social-icon color-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Round Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons34" aria-expanded="false" aria-controls="collapseIcons34">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons34">
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons35" aria-expanded="false" aria-controls="collapseIcons35">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons35">
								<a href="#" class="social-icon color-bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon soc-pocket"></a>
							</div>
						</div>


						<div class="col-sm-12">
							<h2>
								Round Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons36" aria-expanded="false" aria-controls="collapseIcons36">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons36">
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>


					</div>
				</div>
			</section>

			<section class="ds ms social-icons-demo section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2>
								Simple Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons37" aria-expanded="false" aria-controls="collapseIcons37">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-pinterest"></a>
							<a href="#" class="social-icon soc-foursquare"></a>
							<a href="#" class="social-icon soc-yahoo"></a>
							<a href="#" class="social-icon soc-skype"></a>
							<a href="#" class="social-icon soc-yelp"></a>
							<a href="#" class="social-icon soc-feedburner"></a>
							<a href="#" class="social-icon soc-linkedin"></a>
							<a href="#" class="social-icon soc-viadeo"></a>
							<a href="#" class="social-icon soc-xing"></a>
							<a href="#" class="social-icon soc-myspace"></a>
							<a href="#" class="social-icon soc-soundcloud"></a>
							<a href="#" class="social-icon soc-spotify"></a>
							<a href="#" class="social-icon soc-grooveshark"></a>
							<a href="#" class="social-icon soc-lastfm"></a>
							<a href="#" class="social-icon soc-youtube"></a>
							<a href="#" class="social-icon soc-vimeo"></a>
							<a href="#" class="social-icon soc-dailymotion"></a>
							<a href="#" class="social-icon soc-vine"></a>
							<a href="#" class="social-icon soc-flickr"></a>
							<a href="#" class="social-icon soc-500px"></a>
							<a href="#" class="social-icon soc-instagram"></a>
							<a href="#" class="social-icon soc-wordpress"></a>
							<a href="#" class="social-icon soc-tumblr"></a>
							<a href="#" class="social-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons37">
								<a href="#" class="social-icon soc-technorati"></a>
								<a href="#" class="social-icon soc-reddit"></a>
								<a href="#" class="social-icon soc-dribbble"></a>
								<a href="#" class="social-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon soc-digg"></a>
								<a href="#" class="social-icon soc-envato"></a>
								<a href="#" class="social-icon soc-behance"></a>
								<a href="#" class="social-icon soc-delicious"></a>
								<a href="#" class="social-icon soc-deviantart"></a>
								<a href="#" class="social-icon soc-forrst"></a>
								<a href="#" class="social-icon soc-play"></a>
								<a href="#" class="social-icon soc-zerply"></a>
								<a href="#" class="social-icon soc-wikipedia"></a>
								<a href="#" class="social-icon soc-apple"></a>
								<a href="#" class="social-icon soc-flattr"></a>
								<a href="#" class="social-icon soc-github"></a>
								<a href="#" class="social-icon soc-chimein"></a>
								<a href="#" class="social-icon soc-friendfeed"></a>
								<a href="#" class="social-icon soc-newsvine"></a>
								<a href="#" class="social-icon soc-identica"></a>
								<a href="#" class="social-icon soc-bebo"></a>
								<a href="#" class="social-icon soc-zynga"></a>
								<a href="#" class="social-icon soc-steam"></a>
								<a href="#" class="social-icon soc-xbox"></a>
								<a href="#" class="social-icon soc-windows"></a>
								<a href="#" class="social-icon soc-outlook"></a>
								<a href="#" class="social-icon soc-coderwall"></a>
								<a href="#" class="social-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon soc-appnet"></a>
								<a href="#" class="social-icon soc-goodreads"></a>
								<a href="#" class="social-icon soc-tripit"></a>
								<a href="#" class="social-icon soc-lanyrd"></a>
								<a href="#" class="social-icon soc-slideshare"></a>
								<a href="#" class="social-icon soc-buffer"></a>
								<a href="#" class="social-icon soc-rss"></a>
								<a href="#" class="social-icon soc-vkontakte"></a>
								<a href="#" class="social-icon soc-disqus"></a>
								<a href="#" class="social-icon soc-houzz"></a>
								<a href="#" class="social-icon soc-mail"></a>
								<a href="#" class="social-icon soc-patreon"></a>
								<a href="#" class="social-icon soc-paypal"></a>
								<a href="#" class="social-icon soc-playstation"></a>
								<a href="#" class="social-icon soc-smugmug"></a>
								<a href="#" class="social-icon soc-swarm"></a>
								<a href="#" class="social-icon soc-triplej"></a>
								<a href="#" class="social-icon soc-yammer"></a>
								<a href="#" class="social-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon soc-drupal"></a>
								<a href="#" class="social-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon soc-android"></a>
								<a href="#" class="social-icon soc-meetup"></a>
								<a href="#" class="social-icon soc-persona"></a>
								<a href="#" class="social-icon soc-amazon"></a>
								<a href="#" class="social-icon soc-ello"></a>
								<a href="#" class="social-icon soc-mixcloud"></a>
								<a href="#" class="social-icon soc-8tracks"></a>
								<a href="#" class="social-icon soc-twitch"></a>
								<a href="#" class="social-icon soc-airbnb"></a>
								<a href="#" class="social-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons38" aria-expanded="false" aria-controls="collapseIcons38">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon soc-google"></a>
							<a href="#" class="social-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons38">
								<a href="#" class="social-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon soc-play"></a>
								<a href="#" class="social-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon soc-github"></a>
								<a href="#" class="social-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon soc-android"></a>
								<a href="#" class="social-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons39" aria-expanded="false" aria-controls="collapseIcons39">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons39">
								<a href="#" class="social-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons40" aria-expanded="false" aria-controls="collapseIcons40">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons40">
								<a href="#" class="social-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons41" aria-expanded="false" aria-controls="collapseIcons41">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons41">
								<a href="#" class="social-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons42" aria-expanded="false" aria-controls="collapseIcons42">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons42">
								<a href="#" class="social-icon color-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Rounded Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons43" aria-expanded="false" aria-controls="collapseIcons43">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons43">
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons44" aria-expanded="false" aria-controls="collapseIcons44">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon soc-google"></a>
							<a href="#" class="social-icon color-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon soc-spotify"></a>
							<a href="#" class="social-icon color-icon soc-grooveshark"></a>
							<a href="#" class="social-icon color-icon soc-lastfm"></a>
							<a href="#" class="social-icon color-icon soc-youtube"></a>
							<a href="#" class="social-icon color-icon soc-vimeo"></a>
							<a href="#" class="social-icon color-icon soc-dailymotion"></a>
							<a href="#" class="social-icon color-icon soc-vine"></a>
							<a href="#" class="social-icon color-icon soc-flickr"></a>
							<a href="#" class="social-icon color-icon soc-500px"></a>
							<a href="#" class="social-icon color-icon soc-instagram"></a>
							<a href="#" class="social-icon color-icon soc-wordpress"></a>
							<a href="#" class="social-icon color-icon soc-tumblr"></a>
							<a href="#" class="social-icon color-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons44">
								<a href="#" class="social-icon color-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon soc-play"></a>
								<a href="#" class="social-icon color-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon soc-github"></a>
								<a href="#" class="social-icon color-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon soc-android"></a>
								<a href="#" class="social-icon color-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons45" aria-expanded="false" aria-controls="collapseIcons45">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons45">
								<a href="#" class="social-icon color-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Round Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons46" aria-expanded="false" aria-controls="collapseIcons46">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons46">
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons47" aria-expanded="false" aria-controls="collapseIcons47">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons47">
								<a href="#" class="social-icon color-bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon soc-pocket"></a>
							</div>
						</div>


						<div class="col-sm-12">
							<h2>
								Round Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons48" aria-expanded="false" aria-controls="collapseIcons48">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons48">
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>


					</div>
				</div>
			</section>

			<section class="ds social-icons-demo section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2>
								Simple Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons49" aria-expanded="false" aria-controls="collapseIcons49">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-pinterest"></a>
							<a href="#" class="social-icon soc-foursquare"></a>
							<a href="#" class="social-icon soc-yahoo"></a>
							<a href="#" class="social-icon soc-skype"></a>
							<a href="#" class="social-icon soc-yelp"></a>
							<a href="#" class="social-icon soc-feedburner"></a>
							<a href="#" class="social-icon soc-linkedin"></a>
							<a href="#" class="social-icon soc-viadeo"></a>
							<a href="#" class="social-icon soc-xing"></a>
							<a href="#" class="social-icon soc-myspace"></a>
							<a href="#" class="social-icon soc-soundcloud"></a>
							<a href="#" class="social-icon soc-spotify"></a>
							<a href="#" class="social-icon soc-grooveshark"></a>
							<a href="#" class="social-icon soc-lastfm"></a>
							<a href="#" class="social-icon soc-youtube"></a>
							<a href="#" class="social-icon soc-vimeo"></a>
							<a href="#" class="social-icon soc-dailymotion"></a>
							<a href="#" class="social-icon soc-vine"></a>
							<a href="#" class="social-icon soc-flickr"></a>
							<a href="#" class="social-icon soc-500px"></a>
							<a href="#" class="social-icon soc-instagram"></a>
							<a href="#" class="social-icon soc-wordpress"></a>
							<a href="#" class="social-icon soc-tumblr"></a>
							<a href="#" class="social-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons49">
								<a href="#" class="social-icon soc-technorati"></a>
								<a href="#" class="social-icon soc-reddit"></a>
								<a href="#" class="social-icon soc-dribbble"></a>
								<a href="#" class="social-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon soc-digg"></a>
								<a href="#" class="social-icon soc-envato"></a>
								<a href="#" class="social-icon soc-behance"></a>
								<a href="#" class="social-icon soc-delicious"></a>
								<a href="#" class="social-icon soc-deviantart"></a>
								<a href="#" class="social-icon soc-forrst"></a>
								<a href="#" class="social-icon soc-play"></a>
								<a href="#" class="social-icon soc-zerply"></a>
								<a href="#" class="social-icon soc-wikipedia"></a>
								<a href="#" class="social-icon soc-apple"></a>
								<a href="#" class="social-icon soc-flattr"></a>
								<a href="#" class="social-icon soc-github"></a>
								<a href="#" class="social-icon soc-chimein"></a>
								<a href="#" class="social-icon soc-friendfeed"></a>
								<a href="#" class="social-icon soc-newsvine"></a>
								<a href="#" class="social-icon soc-identica"></a>
								<a href="#" class="social-icon soc-bebo"></a>
								<a href="#" class="social-icon soc-zynga"></a>
								<a href="#" class="social-icon soc-steam"></a>
								<a href="#" class="social-icon soc-xbox"></a>
								<a href="#" class="social-icon soc-windows"></a>
								<a href="#" class="social-icon soc-outlook"></a>
								<a href="#" class="social-icon soc-coderwall"></a>
								<a href="#" class="social-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon soc-appnet"></a>
								<a href="#" class="social-icon soc-goodreads"></a>
								<a href="#" class="social-icon soc-tripit"></a>
								<a href="#" class="social-icon soc-lanyrd"></a>
								<a href="#" class="social-icon soc-slideshare"></a>
								<a href="#" class="social-icon soc-buffer"></a>
								<a href="#" class="social-icon soc-rss"></a>
								<a href="#" class="social-icon soc-vkontakte"></a>
								<a href="#" class="social-icon soc-disqus"></a>
								<a href="#" class="social-icon soc-houzz"></a>
								<a href="#" class="social-icon soc-mail"></a>
								<a href="#" class="social-icon soc-patreon"></a>
								<a href="#" class="social-icon soc-paypal"></a>
								<a href="#" class="social-icon soc-playstation"></a>
								<a href="#" class="social-icon soc-smugmug"></a>
								<a href="#" class="social-icon soc-swarm"></a>
								<a href="#" class="social-icon soc-triplej"></a>
								<a href="#" class="social-icon soc-yammer"></a>
								<a href="#" class="social-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon soc-drupal"></a>
								<a href="#" class="social-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon soc-android"></a>
								<a href="#" class="social-icon soc-meetup"></a>
								<a href="#" class="social-icon soc-persona"></a>
								<a href="#" class="social-icon soc-amazon"></a>
								<a href="#" class="social-icon soc-ello"></a>
								<a href="#" class="social-icon soc-mixcloud"></a>
								<a href="#" class="social-icon soc-8tracks"></a>
								<a href="#" class="social-icon soc-twitch"></a>
								<a href="#" class="social-icon soc-airbnb"></a>
								<a href="#" class="social-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons50" aria-expanded="false" aria-controls="collapseIcons50">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon soc-google"></a>
							<a href="#" class="social-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons50">
								<a href="#" class="social-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon soc-play"></a>
								<a href="#" class="social-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon soc-github"></a>
								<a href="#" class="social-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon soc-android"></a>
								<a href="#" class="social-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons51" aria-expanded="false" aria-controls="collapseIcons51">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons51">
								<a href="#" class="social-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Simple Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons52" aria-expanded="false" aria-controls="collapseIcons52">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons52">
								<a href="#" class="social-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Rounded Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons53" aria-expanded="false" aria-controls="collapseIcons53">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons53">
								<a href="#" class="social-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons54" aria-expanded="false" aria-controls="collapseIcons54">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons54">
								<a href="#" class="social-icon color-icon bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Light Background Rounded Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons55" aria-expanded="false" aria-controls="collapseIcons55">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons55">
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon bg-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons56" aria-expanded="false" aria-controls="collapseIcons56">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon soc-google"></a>
							<a href="#" class="social-icon color-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon soc-spotify"></a>
							<a href="#" class="social-icon color-icon soc-grooveshark"></a>
							<a href="#" class="social-icon color-icon soc-lastfm"></a>
							<a href="#" class="social-icon color-icon soc-youtube"></a>
							<a href="#" class="social-icon color-icon soc-vimeo"></a>
							<a href="#" class="social-icon color-icon soc-dailymotion"></a>
							<a href="#" class="social-icon color-icon soc-vine"></a>
							<a href="#" class="social-icon color-icon soc-flickr"></a>
							<a href="#" class="social-icon color-icon soc-500px"></a>
							<a href="#" class="social-icon color-icon soc-instagram"></a>
							<a href="#" class="social-icon color-icon soc-wordpress"></a>
							<a href="#" class="social-icon color-icon soc-tumblr"></a>
							<a href="#" class="social-icon color-icon soc-blogger"></a>

							<div class="collapse" id="collapseIcons56">
								<a href="#" class="social-icon color-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon soc-play"></a>
								<a href="#" class="social-icon color-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon soc-github"></a>
								<a href="#" class="social-icon color-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon soc-android"></a>
								<a href="#" class="social-icon color-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons57" aria-expanded="false" aria-controls="collapseIcons57">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons57">
								<a href="#" class="social-icon color-icon border-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Round Color Bordered Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons58" aria-expanded="false" aria-controls="collapseIcons58">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-icon border-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons58">
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-icon border-icon rounded-icon soc-pocket"></a>
							</div>
						</div>

						<div class="col-sm-12">
							<h2>
								Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons59" aria-expanded="false" aria-controls="collapseIcons59">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons59">
								<a href="#" class="social-icon color-bg-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon soc-pocket"></a>
							</div>
						</div>


						<div class="col-sm-12">
							<h2>
								Round Color Background Icons
								<a class="thin small" data-toggle="collapse" href="#collapseIcons60" aria-expanded="false" aria-controls="collapseIcons60">
									- See All
								</a>
							</h2>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitter"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-google"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-pinterest"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-foursquare"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yahoo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-skype"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-yelp"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-feedburner"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-linkedin"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-viadeo"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-xing"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-myspace"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-soundcloud"></a>
							<a href="#" class="social-icon color-bg-icon rounded-icon soc-spotify"></a>

							<div class="collapse" id="collapseIcons60">
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-grooveshark"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lastfm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-youtube"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vimeo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dailymotion"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flickr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-500px"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-instagram"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wordpress"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tumblr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-blogger"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-technorati"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-reddit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-dribbble"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stumbleupon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-digg"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-envato"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-behance"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-delicious"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-deviantart"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-forrst"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-play"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zerply"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-wikipedia"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-apple"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-flattr"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-github"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-chimein"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-friendfeed"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-newsvine"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-identica"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-bebo"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-zynga"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-steam"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-xbox"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-windows"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-outlook"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-coderwall"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripadvisor"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-appnet"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-goodreads"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-tripit"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-lanyrd"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-slideshare"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-buffer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-rss"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-vkontakte"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-disqus"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-houzz"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mail"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-patreon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-paypal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-playstation"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-smugmug"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-swarm"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-triplej"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-yammer"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-stackoverflow"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-drupal"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-odnoklassniki"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-android"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-meetup"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-persona"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-amazon"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-ello"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-mixcloud"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-8tracks"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-twitch"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-airbnb"></a>
								<a href="#" class="social-icon color-bg-icon rounded-icon soc-pocket"></a>
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