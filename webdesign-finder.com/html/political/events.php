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
							<h1>Typography</h1>
							<ol class="breadcrumb">
								<li>
									<a href="/">
										Homepage
									</a>
								</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li class="active">Typography</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="section_padding_110 ls">
				<div class="container">
					<form class="search-event-form row display_table_sm" method="post" action="/">
						<div class="form-group col-md-3 display_table_cell_sm">
							<label for="event-date" class="grey vidaloka">EVENTS IN</label>
							<div class="input-container">
								<input type="text" aria-required="true" size="30" value="" name="event-date" id="event-date" class="form-control with-icon" placeholder="">
								<i class="fa fa-calendar"></i>
							</div>
						</div>
						<div class="form-group col-md-5 display_table_cell_sm">
							<label for="event-search" class="grey vidaloka">SEARCH</label>
							<div class="input-container">
								<input type="text" id="event-search" value="" name="event-search" class="form-control with-icon">
								<i class="fa fa-search"></i>
							</div>
						</div>
						<div class="col-md-4 display_table_cell_sm">
							<button type="submit" id="search_event_form_submit" name="contact_submit" class="theme_button color1 margin_0">Find Events</button>
						</div>
					</form>
					<div class="row">
						<div class="col-sm-12">
							<div class="table-responsive">
								<div class="calendar">
									<div class="calendar-header">
										<div class="calendar-navigation text-center">
											<a href="#" class="round_button prev pull-left">
												<i class="fa fa-angle-left"></i>
											</a>
											<h4 class="inline-block margin_0">Events for June 2016</h4>
											<a href="#" class="round_button next pull-right">
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</div>
									<div class="week-days">
										<div class="sunday">Sun</div>
										<div class="monday">Mon</div>
										<div class="tuesday">Tue</div>
										<div class="wednesday">Wed</div>
										<div class="thursday">Thu</div>
										<div class="friday">Fri</div>
										<div class="saturday">Sat</div>
									</div>
									<div class="month-box">
										<div class="week-row">
											<div class="day-cell not-cur-month">
												<span class="day-date">29</span>
												<span class="day-events">Lorem ipsum dolor sit amet</span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">30</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">31</span>
												<span class="day-events">Adipisicing tail short loin</span>
											</div>
											<div class="day-cell">
												<span class="day-date">1</span>
												<span class="day-events">Culpa swine filet mignon cillum</span>
											</div>
											<div class="day-cell">
												<span class="day-date">2</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">3</span>
												<span class="day-events">Boudin meatball chuck cillum</span>
											</div>
											<div class="day-cell">
												<span class="day-date">4</span>
												<span class="day-events">Aliquip sed fatback dolore</span>
											</div>
										</div>
										<div class="week-row">
											<div class="day-cell">
												<span class="day-date">5</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">6</span>
												<span class="day-events">Landjaeger didunt laborum</span>
											</div>
											<div class="day-cell">
												<span class="day-date">7</span>
												<span class="day-events">Et doner pig aliqua bresaola</span>
											</div>
											<div class="day-cell">
												<span class="day-date">8</span>
												<span class="day-events">Meatball boudin ham shankle</span>
											</div>
											<div class="day-cell">
												<span class="day-date">9</span>
												<span class="day-events">Dolore labore rump ball tip</span>
											</div>
											<div class="day-cell">
												<span class="day-date">10</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">11</span>
												<span class="day-events"></span>
											</div>
										</div>
										<div class="week-row selected-row">
											<div class="day-cell">
												<span class="day-date">12</span>
												<span class="day-events">Esse pariatur commodo</span>
											</div>
											<div class="day-cell">
												<span class="day-date">13</span>
												<span class="day-events">Ut beef ribs pancetta</span>
											</div>
											<div class="day-cell">
												<span class="day-date">14</span>
												<span class="day-events">Sirloin tail ltong id pork chop</span>
											</div>
											<div class="day-cell">
												<span class="day-date">15</span>
												<span class="day-events">Venison in ut strip steak pork</span>
											</div>
											<div class="day-cell">
												<span class="day-date">16</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">17</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">18</span>
												<span class="day-events">Short loin cetta sunt lorem</span>
											</div>
										</div>
										<!--                             <div class="events-list highlightlinks">
                                <a href="#">Event Title</a>
                            </div> -->
										<div class="week-row">
											<div class="day-cell">
												<span class="day-date">19</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">20</span>
												<span class="day-events">Quis nisi flank pig picanha</span>
											</div>
											<div class="day-cell">
												<span class="day-date">21</span>
												<span class="day-events">Salami pisicing tri-tip do dolore</span>
											</div>
											<div class="day-cell">
												<span class="day-date">22</span>
												<span class="day-events">Bresaola corned beef minim</span>
											</div>
											<div class="day-cell">
												<span class="day-date">23</span>
												<span class="day-events">Laboris sciutto turkey tongue</span>
											</div>
											<div class="day-cell">
												<span class="day-date">24</span>
												<span class="day-events">Eu commodo fugiat irure</span>
											</div>
											<div class="day-cell">
												<span class="day-date">25</span>
												<span class="day-events"></span>
											</div>
										</div>
										<div class="week-row">
											<div class="day-cell">
												<span class="day-date">26</span>
												<span class="day-events">Short ribs id qui eiusmod filet</span>
											</div>
											<div class="day-cell">
												<span class="day-date">27</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell">
												<span class="day-date">28</span>
												<span class="day-events">Anim in spare ribs pariatur</span>
											</div>
											<div class="day-cell">
												<span class="day-date">29</span>
												<span class="day-events">Cupidatat lorem turkey enim nisi</span>
											</div>
											<div class="day-cell">
												<span class="day-date">30</span>
												<span class="day-events">Aute et ad huck tenderloin</span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">1</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">2</span>
												<span class="day-events">Doner capicola tempor nostrud</span>
											</div>
										</div>
										<div class="week-row">
											<div class="day-cell not-cur-month">
												<span class="day-date">3</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">4</span>
												<span class="day-events">Occaecat duis drumstick</span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">5</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">6</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">7</span>
												<span class="day-events">Pork deserunt commodo pork</span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">8</span>
												<span class="day-events"></span>
											</div>
											<div class="day-cell not-cur-month">
												<span class="day-date">9</span>
												<span class="day-events">T-bone resaola ham salami</span>
											</div>
										</div>
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