<?php 
$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$canonicalUrl = strtok($url, '?');
$title = ($page == 'main') ? L::brand . ' - ' . L::tagline : $pageTitle . ' | ' . L::brand;
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?php echo $title; ?></title>

	<meta name="description" content="<?php echo $pageDescription; ?>">
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:url" content="<?php echo $canonicalUrl ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo $pageImage; ?>" />
	<meta property="og:description" content="<?php echo $pageDescription; ?>" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@OpenParlTV">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $pageDescription; ?>">
	<meta name="twitter:image" content="<?php echo $pageImage; ?>">

	<link rel="canonical" href="<?php echo $canonicalUrl ?>">

	<?php
	global $acceptLang;
	$queryString = parse_url($url, PHP_URL_QUERY);
	$params = [];
	if ($queryString) {
	parse_str($queryString, $params);
	}
	unset($params['lang']); // Remove existing lang parameter if present

	foreach ($acceptLang as $thisLang) {
	$params['lang'] = $thisLang["short"];
	$alternateUrl = $canonicalUrl . '?' . http_build_query($params);
	?>
		<link rel='alternate' hreflang='<?= $thisLang["short"] ?>' href='<?= $alternateUrl ?>' />
	<?php } ?>

	<link rel="icon" type="image/png" href="favicon.png" />
	
	<link type="text/css" rel="stylesheet" href="client/css/bootstrap.min.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/frametrail-webfont.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/style.css?v=2" media="all" />
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