<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

require_once 'i18n.class.php';
$i18n = new i18n('lang/lang_{LANGUAGE}.json', 'langcache/', 'en');
// Parameters: language file path, cache dir, default language (all optional)
$i18n->init();

switch ($_REQUEST["a"]) {
	case "proposal":
		ob_start();
		include_once("./templates/content.proposal.php");
		$content = ob_get_clean();
	break;
	case "info":
		ob_start();
		include_once("./templates/content.about.php");
		$content = ob_get_clean();
	break;
	case "datapolicy":
		ob_start();
		include_once("./templates/content.datapolicy.php");
		$content = ob_get_clean();
	break;
	case "imprint":
		ob_start();
		include_once("./templates/content.imprint.php");
		$content = ob_get_clean();
	break;
	default;
		ob_start();
		include_once("./templates/content.main.php");
		$content = ob_get_clean();
	break;
}
ob_start();
include_once("./templates/structure.php");
echo ob_get_clean();
?>