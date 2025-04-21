<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
session_start();

$acceptLang = array(
    "de"=>array(
        "short"=>"de",
        "name"=>"Deutsch",
        "icon"=>""
    ),
    "en"=>array(
        "short"=>"en",
        "name"=>"English",
        "icon"=>""
    )
);

if ($_REQUEST["lang"] && array_key_exists($_REQUEST["lang"], $acceptLang)) {

    $_SESSION["lang"] = $_REQUEST["lang"];

}

require_once('i18n.class.php');
$i18n = new i18n('lang/lang_{LANGUAGE}.json', 'langcache/', 'de');
$i18n->init();
$userLang = $i18n->getUserLangs();
$langIntersection = array_values(array_intersect($userLang, array_keys($acceptLang)));
$lang = (count($langIntersection) > 0) ? $langIntersection[0] : 'de';
// just used inside JS const
$langJSONString = file_get_contents('lang/lang_'.$lang.'.json');

$pageTitle = L::brand;
$pageDescription = L::tagline;
$pageImage = 'https://openparliament.tv/client/images/thumbnail.png';
$pageType = 'default';
$schemaItemScopeString = '';

$page = (isset($_REQUEST["a"]) && strlen($_REQUEST["a"]) > 0) ? $_REQUEST["a"] : "main";

switch ($page) {
	case "lang":

        if ($_REQUEST["lang"] && array_key_exists($_REQUEST["lang"], $acceptLang)) {

            $_SESSION["lang"] = $_REQUEST["lang"];

            $return["success"] = "true";
            $return["text"] = "Language has been set";
            $return["return"] = "";

        } else {
        	$return["success"] = "false";
            $return["text"] = "Language has not been set";
            $return["return"] = "";
        }

    break;
	case "scaling-concept":
		$pageTitle = L::scalingConcept;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.future_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "job-co-founder":
		$pageTitle = 'Job: Co-Founder';
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.job-co-founder.php");
		$content = ob_get_clean();
	break;
	case "vision-mission-strategy":
		$pageTitle = L::proposal;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.vision_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "code-of-conduct":
		$pageTitle = 'Code of Conduct';
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.coc_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "application-areas":
		$pageTitle = L::applicationAreas;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.application_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "team":
		$pageTitle = L::team;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.team.php");
		$content = ob_get_clean();
	break;
	case "faq":
		$pageTitle = L::faqShort;
		$pageDescription = L::faq;
		$pageType = 'default';
		$schemaItemScopeString = ' itemscope itemtype="https://schema.org/FAQPage"';
		ob_start();
		include_once("./templates/content.faq_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "press":
		$pageTitle = L::press;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.press.php");
		$content = ob_get_clean();
	break;
	case "background":
		$pageTitle = L::background;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.background_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "roadmap":
		$pageTitle = 'Roadmap';
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.roadmap.php");
		$content = ob_get_clean();
	break;
	case "datapolicy":
		$pageTitle = L::dataPolicy;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.datapolicy_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "imprint":
		$pageTitle = L::imprint;
		$pageDescription = '';
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.imprint.php");
		$content = ob_get_clean();
	break;
	case "main":
		$pageDescription = L::tagline;
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.main.php");
		$content = ob_get_clean();
	break;
	default:
		$pageTitle = '404 - '.L::messageErrorNotFound;
		$pageDescription = L::messageErrorNotFoundQuote;
		$pageType = 'default';
		ob_start();
		include_once("./templates/content.404.php");
		$content = ob_get_clean();
	break;
}
ob_start();
include_once("./templates/structure.php");
echo ob_get_clean();
?>