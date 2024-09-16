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
	<link type="text/css" rel="stylesheet" href="client/css/style.css?v=3" media="all" />
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
	<?php include_once('header.php'); ?>
	<main class="mb-5">
		<section id="header" class="pb-5">
			<div class="container">
				<div class="row justify-content-center" style="position: relative; z-index: 1">
					<div class="col-12 col-md-11 col-lg-9 col-xl-7" style="margin-top: 5%;">
						<img src="client/images/optv-logo.png" class="d-block d-md-inline" style="width: 200px; vertical-align: top; margin: 0 auto;">
						<h1 class="brand d-block d-md-inline-block">Open <b>Parliament TV</b></h1>
					</div>
				</div>
				<div class="row justify-content-center" style="position: relative; z-index: 1">
					<div class="col-12">
						<h2 class="text-center" style="font-size: 1.7rem;"><?php echo L::tagline; ?></h2>
					</div>
				</div>
			</div>
		</section>
		<section id="platform" class="mb-4 py-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6" style="font-size: 1.3rem;">
						<div class="alert text-center mt-0 mt-xl-3 mb-2 pt-0">
							<?php echo L::messageLaunch; ?>
						</div>
						<a class="btn btn-primary d-block py-2 mt-3 text-center mt-xl-4" style="background: #6f8087;color: #fff;border: none;" href="https://de.openparliament.tv" target="_blank" class="text-white"><span class="icon-right-open-big mr-1"></span> <b>https://de.openparliament.tv</b></a>
					</div>
					<div class="col-12 col-md-8 col-lg-6 mt-4 mt-lg-0">
						<a href="https://de.openparliament.tv"><img src="client/images/screenshot.png" title="Visit de.openparliament.tv" class="d-block" style="width: 100%; border: 2px solid #fff; box-shadow: 0 0 6px #999999;" alt="Screenshot of the Open Parliament TV Platform"></a>
					</div>
				</div>
			</div>
		</section>
		<section id="idea" class="mb-4">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2><span class="icon-lightbulb-1 mr-1" style="top: -4px;position: relative;"></span><?php echo L::idea; ?></h2>
					</div>
					<div class="col-12 col-md-6">
						<p><?php echo L::textBlockIdea1; ?> </p>
						<p><?php echo L::textBlockIdea2; ?> </p>
					</div>
					<div class="col-12 col-md-6">
						<p><?php echo L::textBlockIdea3; ?> </p>
						<ul>
							<li><?php echo L::textBlockIdea4; ?> </li>
							<li><?php echo L::textBlockIdea5; ?> </li>
						</ul>
					</div>
					<div class="col-12">
						<a href="./vision-mission-strategy" class="btn btn-primary d-block py-2 mt-3" style="background: #6f8087;color: #fff;border: none;"><span class="icon-right-open-big mr-1"></span><?php echo L::messageMoreOnIdea; ?></a>
					</div>
				</div>
			</div>
		</section>
		<hr>
		<section id="testimonials" class="mb-4">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h2><span class="icon-megaphone mr-1"></span><?php echo L::othersAboutUs; ?></h2>
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote1; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder"><?php echo L::orgBMWK; ?></span><a href="https://mobile.twitter.com/BMWK/status/1454081924687974407" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote2; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">Fabio De Masi, Ex-<?php echo L::orgMDB; ?></span><a href="https://twitter.com/fabiodemasi/status/1452184758935597058" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote3; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">Justus von Daniels, CORRECTIV</span><a href="https://twitter.com/justus_vdaniels/status/1450841365223546882" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote4; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">BBC News Labs</span><a href="https://twitter.com/BBC_News_Labs/status/1451159078797864961" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote5; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">Boris Hekele, abgeordnetenwatch.de</span><a href="https://www.linkedin.com/posts/boris-hekele_interview-zum-projektabschluss-von-open-parliament-activity-6847476581221367808-R_Aa/" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote6; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">Bernd Oswald, Bayerischer Rundfunk</span><a href="https://www.br.de/nachrichten/netzwelt/neue-suchmaschine-fuer-bundestagsreden-genauer-geht-s-nicht,SmTauaw" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote7; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">Anke Domscheit-Berg, <?php echo L::orgMDB; ?></span><a href="https://twitter.com/anked/status/1270373060173062146" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote8; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">Devin Balkind, Sahana Software Foundation, WeGov.NYC</span><a href="https://twitter.com/DevinBalkind/status/1270445706898214913" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote9; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">Mario Wiedemann, Bertelsmann <?php echo L::orgFoundation; ?></span><a href="https://mobile.twitter.com/mariosorg/status/1479045403119177734" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote10; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">BR Recherche</span><a href="https://twitter.com/BR_Recherche/status/1453242058769113096" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4 justify-content-center text-center my-3">
						<div class=""><span class="icon-quote-left"></span><?php echo L::quote11; ?> <span class="icon-quote-right"></span></div>
						<div class="mt-3"><span class="font-weight-bolder">polisphere</span><a href="https://twitter.com/polisphere/status/1442825945421950979" target="_blank"><span class="icon-link ml-2"></span></a></div>
					</div>
				</div>
			</div>
		</section>
		<!--
		<section id="press" class="mb-4">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h2><span class="icon-megaphone mr-1"></span>In den Medien </h2>
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 justify-content-center text-center my-3">
						Logo 1
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 justify-content-center text-center my-3">
						Logo 2
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 justify-content-center text-center my-3">
						Logo 3
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 justify-content-center text-center my-3">
						Logo 4
					</div>
				</div>
			</div>
		</section>
		-->
		<hr>
		<section id="info" class="mb-0">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-12 mt-3 text-center font-weight-bolder">
						<h3><?php echo L::findUsOn; ?>:  </h3>
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-6 col-md-2 col-lg-2 justify-content-center mt-3">
						<a href="https://mstdn.social/@OpenParlTV" class="btn btn-primary d-block">Mastodon</a>
					</div>
					<div class="col-6 col-md-2 col-lg-2 justify-content-center mt-3">
						<a href="https://bsky.app/profile/openparltv.bsky.social" class="btn btn-primary d-block">Bluesky</a>
					</div>
					<div class="col-6 col-md-2 col-lg-2 justify-content-center mt-3">
						<a href="https://www.linkedin.com/company/open-parliament-tv/" class="btn btn-primary d-block">LinkedIn</a>
					</div>
					<div class="col-6 col-md-2 col-lg-2 justify-content-center mt-3">
						<a href="https://twitter.com/OpenParlTV" class="btn btn-primary d-block">Twitter</a>
					</div>
					<div class="col-6 col-md-2 col-lg-2 justify-content-center mt-3">
						<a href="https://github.com/OpenParliamentTV" class="btn btn-primary d-block">Github</a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php include_once('footer.php'); ?>
	<script type="text/javascript" src="client/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="client/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="client/js/Chart.min.js"></script>
	<script type="text/javascript" src="client/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="client/js/index.js"></script>
</body>