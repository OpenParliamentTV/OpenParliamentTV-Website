<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

require_once 'i18n.class.php';
$i18n = new i18n('lang/lang_{LANGUAGE}.json', 'langcache/', 'en');
$i18n->init();
$userLang = $i18n->getUserLangs();
$acceptLang = ['en', 'de'];
$langIntersection = array_values(array_intersect($userLang, $acceptLang));
$lang = (count($langIntersection) > 0) ? $langIntersection[0] : 'en';
$schemaItemScopeString = '';

switch ($_REQUEST["a"]) {
	case "proposal":
		ob_start();
		include_once("./templates/content.proposal_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "background":
		ob_start();
		include_once("./templates/content.background_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "faq":
		$schemaItemScopeString = ' itemscope itemtype="https://schema.org/FAQPage"';
		ob_start();
		include_once("./templates/content.faq_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "roadmap":
		ob_start();
		include_once("./templates/content.roadmap.php");
		$content = ob_get_clean();
	break;
	case "datapolicy":
		ob_start();
		include_once("./templates/content.datapolicy_".$lang.".php");
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