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
//TODO: Move this to config and apply for all i18n.init() calls
$i18n = new i18n('lang/lang_{LANGUAGE}.json', 'langcache/', 'de');
$i18n->init();
$userLang = $i18n->getUserLangs();
$langIntersection = array_values(array_intersect($userLang, array_keys($acceptLang)));
$lang = (count($langIntersection) > 0) ? $langIntersection[0] : 'de';
// just used inside JS const
$langJSONString = file_get_contents('lang/lang_'.$lang.'.json');

$schemaItemScopeString = '';

switch ($_REQUEST["a"]) {
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
		ob_start();
		include_once("./templates/content.future_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "job-co-founder":
		ob_start();
		include_once("./templates/content.job-co-founder.php");
		$content = ob_get_clean();
	break;
	case "vision-mission-strategy":
		ob_start();
		include_once("./templates/content.vision_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "code-of-conduct":
		ob_start();
		include_once("./templates/content.coc_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "application-areas":
		ob_start();
		include_once("./templates/content.application_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "team":
		ob_start();
		include_once("./templates/content.team.php");
		$content = ob_get_clean();
	break;
	case "faq":
		$schemaItemScopeString = ' itemscope itemtype="https://schema.org/FAQPage"';
		ob_start();
		include_once("./templates/content.faq_".$lang.".php");
		$content = ob_get_clean();
	break;
	case "press":
		ob_start();
		include_once("./templates/content.press.php");
		$content = ob_get_clean();
	break;
	case "background":
		ob_start();
		include_once("./templates/content.background_".$lang.".php");
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