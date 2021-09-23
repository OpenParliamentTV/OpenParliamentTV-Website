<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Open Parliament TV</title>

	<meta itemprop="name" content="<?php echo L::brand; ?>">
    <meta name="twitter:title" content="<?php echo L::brand; ?>">
    <meta property="og:title" content="<?php echo L::brand; ?>">

    <meta name="description" content="<?php echo L::tagline; ?>">
    <meta itemprop="description" content="<?php echo L::tagline; ?>">
    <meta name="twitter:description" content="<?php echo L::tagline; ?>">
    <meta property="og:description" content="<?php echo L::tagline; ?>">

    <meta itemprop="image" content="https://openparliament.tv/client/images/thumbnail.png">
    <meta name="twitter:image" content="https://openparliament.tv/client/images/thumbnail.png">
    <meta property="og:image" content="https://openparliament.tv/client/images/thumbnail.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:type" content="article">	

	<link rel="icon" type="image/png" href="favicon.png" />
	
	<link type="text/css" rel="stylesheet" href="client/css/bootstrap.min.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/Chart.min.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/frametrail-webfont.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/style.css" media="all" />
	<!-- Matomo -->
	<script>
	  var _paq = window._paq = window._paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="//stats.openparliament.tv/";
	    _paq.push(['setTrackerUrl', u+'matomo.php']);
	    _paq.push(['setSiteId', '2']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Matomo Code -->
</head>
<body>
	<main class="container mb-5">
		<div class="row justify-content-center" style="position: relative; z-index: 1">
			<div class="col-12 col-md-11 col-lg-9 col-xl-7" style="margin-top: 5%;">
				<img src="client/images/optv-logo.png" class="d-block d-md-inline" style="width: 200px; vertical-align: top; margin: 0 auto;">
				<h1 class="brand d-block d-md-inline-block"><?php echo L::brand; ?></h1>
			</div>
		</div>
		<div class="row justify-content-center" style="font-size: 1.2rem;">
			<div class="col-12 col-md-11 col-lg-9 col-xl-8">
				<div class="alert alert-success text-center my-5">
					<?php echo L::messageLaunch; ?> <br><br>
					<a href="https://de.openparliament.tv">https://de.openparliament.tv</a><br><br>
					<b><?php echo L::messageOfficialLaunch; ?></b>
				</div>
			</div>
		</div>
		<!--
		<div class="row justify-content-center mb-4" style="position: relative;">
			<div class="col-12 col-md-11 col-lg-9 col-xl-8"><a href="https://de.openparliament.tv"><img src="client/images/screenshot.png" class="d-block" style="width: 100%; border: 2px solid #fff; box-shadow: 0 0 8px #cdcdcd;"></a></div>
		</div>
		-->
		<div class="row justify-content-center mb-1" style="position: relative; text-align: center;">
			<h2 style="line-height: 1.8rem;"><?php echo L::comingSoon; ?><br><?php echo L::inTheMeantime; ?></h2>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-12 col-md-6 col-lg-4 justify-content-center mt-3">
				<a href="./proposal" class="btn btn-primary d-block"><span class="icon-doc-text"></span><?php echo L::proposalBtn; ?></a>
			</div>
			<div class="col-12 col-md-6 col-lg-4 justify-content-center mt-3">
				<a href="https://twitter.com/intent/follow?screen_name=OpenParlTV" class="btn btn-primary d-block"><span class="icon-twitter"></span><?php echo L::twitterBtn; ?></a>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="client/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="client/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="client/js/Chart.min.js"></script>
	<script type="text/javascript" src="client/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="client/js/index.js"></script>
</body>