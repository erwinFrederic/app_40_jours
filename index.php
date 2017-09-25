<?php

?>
<!doctype html>
<html>

<head>
	<!-- ## SITE META ## -->
	<meta charset="utf-8">
	<title>INHAITI | Chaîne de prières</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="assets/img/placeholder/favicon.ico">

	<!-- ## LOAD STYLSHEETS ## -->
	<link rel="stylesheet" media="all" href="assets/css/style.css"/>

	<!-- ## GOOGLE FONTS ## -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>

	<!-- ## FULLSCREEN SLIDESHOW ## -->
	<script type="text/javascript">
	function slide_fullscreen() {
	jQuery(function($){
		$.supersized({
			// Functionality
			slide_interval          :   2000,
			transition              :   0, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed	:   1000,
			// Components
			slide_links		:   'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
			progress_bar	:	1,
			slides 			:   [
								{	image : 'assets/img/bg-empty.jpg',
								}
							]
		});
	});
	}
	window.onload = slide_fullscreen;
	</script>
</head>
<body>

<!-- ## HEADER ## -->
<header id="qcHomeHeader">
	<div class="row">

		<!-- ## LOGO ## -->
		<div id="qcLogo" class="col-6 col">
			<a href="index.php"><img src="assets/img/placeholder/logo-header.png" alt="" /></a>
		</div>

		<!-- ## SITE NAVIGATION ## -->
		<nav id="qcPriNav" class="col-6 col">
			<ul class="clearfix">
				<li><a href="http://inhaiti.net" target="_blank"><i class="icon-calendar-2 icon"></i> <span>+ d'infos</span></a></li>
				<li><a href="inscription.php"><i class="icon-ticket icon"></i> <span>Inscription</span></a></li>
			</ul>
		</nav>

	</div>
	<div class="row">

		<!-- ## COUNTDOWN TIMER ## -->
		<div id="qcEventCountDown" class="col-6 col">
			<!-- ## DAYS ## -->
			<div class="dash days_dash">
				<div class="dash_title">Jours</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
					<div class="digit digit-3">0</div>
				</div>
			</div>
			<!-- ## HOURS ## -->
			<div class="dash hours_dash">
				<div class="dash_title">heures</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
				</div>
			</div>
			<!-- ## MINUTES ## -->
			<div class="dash minutes_dash">
				<div class="dash_title">minutes</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
				</div>
			</div>
			<!-- ## SECONDS ## -->
			<div class="dash seconds_dash">
				<div class="dash_title">secondes</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
				</div>
			</div>
		</div>

		<!-- ## EVENT BANNER ## -->
		<div id="qcEventBanner" class="col-6 col">
			<ul>
			<?php
				include 'includes/connection.php';
				$result = mysql_query("SELECT * FROM inscription");
				$num_rows = mysql_num_rows($result);
			?>
				<li><b>#INHAITI</b> Chaîne de prière mondiale de 40 jours.</li>
				<li>Du <b>01 octobre</b> au <b> 09 Novembre</b> 2017</li>
				<li><span style="font-size:28px; font-weight:400; color:#fff;">Action de grâce, Combat spirituel, Intercession,...</span></li>
				<li><b>#<?php echo "$num_rows"; ?></b> inscriptions à travers le monde.</li>
			</ul>
		</div>

	</div>
</header>
<!-- ## HEADER END ## -->

<!-- ## FULLSCREEN SLIDES ## -->
<section id="slideContent">

	<!-- ## SLIDE CONTROLS ## -->
	<div id="qcHomeSlideControls">

		<!-- ## SLIDE DOT NAV ## --
		<ul id="slide-list"></ul> -->

		<!-- ## PROGRESS BAR ## 
		<div id="progress-back" class="load-item">
			<div id="progress-bar"></div>
		</div>-->

	</div>

</section>
<!-- ## FULLSCREEN SLIDES ## -->

<!-- ## BACKGROUND OVERLAY ## -->
<section id="qcOverlay">
	<div id="qcEventLogo" class="loading">
		<a href="http://www.inhaiti.net" target="_blank">
			<img src="assets/img/placeholder/center-logo.png" alt="" />
		</a>		
	</div>
	<div style="position:absolute;bottom:15px; text-align:center;width:100%;background:#fff; height:auto;">
			<img src="assets/img/logo-eglise.jpg" alt="" style="" class="footer_logo_eglise"/>
	</div>
</section>

<!-- ## LOAD JAVASCRIPTS ## -->
<script src="assets/js/2.1.1.jquery.min.js" type="text/javascript"></script>
<script src="assets/js/supersized.3.2.7.min.js" type="text/javascript"></script>
<script src="assets/js/countdown.js" type="text/javascript"></script>
<script src="assets/js/jquery.marquee.min.js" type="text/javascript"></script>
<script src="assets/js/library.js" type="text/javascript"></script>
<script src="assets/js/init.js" type="text/javascript"></script>

</body>


</html>