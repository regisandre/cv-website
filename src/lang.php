<?php

$cookie_expire = 365*24*3600;

if($_COOKIE['lang'] == $_GET["lang"]) {
	$lang = $_COOKIE['lang'];
	setcookie("lang", $lang, time() + $cookie_expire, "/");
} elseif(isset($_GET["lang"])) {
	$lang = $_GET["lang"];
	setcookie("lang", $lang, time() + $cookie_expire, "/");
} elseif(isset($_COOKIE['lang'])) {
	$lang = $_COOKIE['lang'];
	setcookie("lang", $lang, time() + $cookie_expire, "/");
} elseif($_SERVER['HTTP_ACCEPT_LANGUAGE']) {
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
	setcookie("lang", $lang, time() + $cookie_expire, "/");
} else {
	$lang = "en";
	setcookie("lang", $lang, time() + $cookie_expire, "/");
}

switch($lang) {
	case $lang:
		include('lang/'.$lang.'.php');
	break;
}
?>


