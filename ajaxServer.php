<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
session_start();

header('Content-Type: application/json');

$return["success"] = "false";
$return["text"] = "Nope!";
$return["return"] = "";

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

switch ($_REQUEST["a"]) {

    case "lang":

        if ($_REQUEST["lang"] && array_key_exists($_REQUEST["lang"], $acceptLang)) {

            $_SESSION["lang"] = $_REQUEST["lang"];

            $return["success"] = "true";
            $return["text"] = "Language has been set";
            $return["return"] = "";

        }

    break;
	default:
	break;


}

echo json_encode($return,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

?>