<?php 

require_once 'inc/pages.inc.php';
require_once 'inc/mobile-detect.inc.php';

function generate_header($page) {
	echo "<head>\n";
	echo "	<meta charset='utf-8'>\n";
	echo "	<meta name='viewport' content='width=device-width'>\n";
	echo "	<title>" . PAGES[$page] .  " - Your.Gov</title>\n";
	echo "	<link rel='stylesheet' href='css/min/bootswatch.min.css'>\n";

	if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {	// if IE 8 or less
	} else { // if greater than IE8
	}

	echo "	<link rel='stylesheet' type='text/css' href='css/style.css'>\n";

	if (array_shift(explode(".", $page)) == 'index') {
		echo "	<link rel='stylesheet' type='text/css' href='css/portal.css'>\n";
	}	else {
		echo "	<link rel='stylesheet' type='text/css' href='css/department.css'>\n";
	}

	if (file_exists("css/" . array_shift(explode(".", $page)) . ".css")) {
		echo "	<link rel='stylesheet' type='text/css' href='css/" . array_shift(explode(".", $page)) . ".css'>\n";
	}

	if (array_shift(explode(".", $page)) == "parliament") {
		echo "	<link rel='stylesheet' type='text/css' href='css/min/bootstrap-datepicker3.standalone.min.css'>\n";
	}

	if (array_shift(explode(".", $page)) == "communication") {
		echo "	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css' integrity='sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp' crossorigin='anonymous'>\n";
	}

	echo "	<link rel='apple-touch-icon' sizes='180x180' href='favicon/apple-icon-180x180.png'>\n";
	echo "	<link rel='icon' type='image/png' sizes='192x192'  href='favicon/android-icon-192x192.png'>\n";
	echo "	<link rel='icon' type='image/png' sizes='32x32' href='favicon/favicon-32x32.png'>\n";
	echo "	<link rel='icon' type='image/png' sizes='96x96' href='favicon/favicon-96x96.png'>\n";
	echo "	<link rel='icon' type='image/png' sizes='16x16' href='favicon/favicon-16x16.png'>\n";
	echo "	<link rel='manifest' href='favicon/manifest.json'>\n";
	echo "	<meta name='msapplication-TileColor' content='#ffffff'>\n";
	echo "	<meta name='msapplication-TileImage' content='favicon/ms-icon-144x144.png'>\n";
	echo "	<meta name='theme-color' content='#ffffff'>\n";

	echo "</head>\n";
}

?>