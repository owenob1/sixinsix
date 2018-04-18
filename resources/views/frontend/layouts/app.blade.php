<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!DOCTYPE html>
<html lang="en" data-cookies-popup="true">

<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="SixInSix">
	<!-- Title -->
	<title>SixInSix | Online Traffic & Growth Hacking Consulting</title>
	<!-- Favicons -->
	<link rel="shortcut icon" href="../assets/img/favicon.png">
	<link rel="apple-touch-icon" href="../assets/img/favicon_60x60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon_76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon_120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon_152x152.png">
	<!-- Google Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<!-- CSS Styles -->
	<link rel="stylesheet" href="../assets/css/styles.css" />
	<!-- CSS Base -->
	<link id="theme" rel="stylesheet" href="../assets/css/themes/theme-fire.css" />
	<!--Popup-->
	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet"> </head>

<body class="one-page header-absolute">
	<!-- Loader -->
	<div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div>
	<!-- Loader / End -->
	<!-- Header -->
	<header id="header" class="absolute">
		<!-- Navigation Bar -->
		<div id="nav-bar">
			<!-- Menu Toggle -->
			<div class="menu-toggle" style="margin-left:10px;"> <a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a> </div>
			<!-- Logo --><a class="logo-wrapper" href="/" style="margin-left:45px;">
					<img class="logo logo-dark" src="../assets/img/sixinsix-black.svg" style="width:20%;" alt="SixInSix">
				</a>
			<nav class="module-group right">
				<!-- Primary Menu -->
				<div class="module menu left">
					<ul id="nav-primary" class="nav nav-primary">
						<li><a href="#home">Home</a></li>
						<li><a href="#what">What is it?</a></li>
						<li><a href="#who">Who is it for?</a></li>
						<li><a href="#process1">The Process</a></li>
						<li><a href="https://blog.sixinsix.co/">Blog</a></li>
						<li><a href="" onclick="Calendly.showPopupWidget('https://calendly.com/sixinsix/60min');return false;"><button type="button" class="btn btn-filled btn-primary btn-xs"><i class="i-before ti-layout-cta-center"></i>Book Consultation</button></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Notification Bar -->
		<div id="notification-bar"></div>
	</header>
	<!-- Header / End -->

	<body> @yield('content')
		<!-- Footer -->
		<footer id="footer" class="dark bg-secondary pb-60">
			<div class="container text-center"> <img src="../assets/img/sixinsixlogo.svg" style="width:20%; padding:20px;" alt="SixInSix">
				<div class="text-muted"> Copyright SixInSix 2018 ©. All rights reserved. </div>
				<ul class="nav nav-inline nav-sm mt-10">
					<li><a href="#home" data-target="local-scroll">Back To Top</a></li>
					<li><a href="mailto:hello@sixinsix.co">Contact Us</a></li>
				</ul>
			</div>
		</footer>
		<!-- Footer / End -->
		<!-- JS Libraries -->
		<script src="../assets/js/jquery-1.12.3.min.js"></script>
		<!-- JS Plugins -->
		<script src="../assets/js/plugins.js"></script>
		<!-- JS Core -->
		<script src="../assets/js/core.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116008327-1"></script>
		<!--Calendly-->
		<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
		<!-- Google Analytics -->
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
			gtag('config', 'UA-116008327-1');
		</script>
		<!-- Start of HubSpot Embed Code -->
		<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4490170.js"></script>
		<!-- End of HubSpot Embed Code -->
		<!-- Drip -->
		<script type="text/javascript">
			var _dcq = _dcq || [];
			var _dcs = _dcs || {};
			_dcs.account = '6953107';
			(function() {
				var dc = document.createElement('script');
				dc.type = 'text/javascript';
				dc.async = true;
				dc.src = '//tag.getdrip.com/6953107.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(dc, s);
			})();
		</script>
		<!-- end Drip -->
	</body>

</html>
