<?php

require_once 'inc/pages.inc.php';

function generate_navbar($page) {
	echo "	<header>\n";
	echo "		<nav class='navbar navbar-expand-lg navbar-light bg-light'>\n";
	if ($page == "index.php") {
		echo "			<a id='branding' href='#' class='navbar-left'><img src='img/logo.png'><p>Your.Gov</p></a>\n";
		echo "			<a class='mobile-only' id='brand-mobile' href='#'>Your.Gov</a>";
	}
	else {
		echo "			<a id='branding' href='index.php' class='navbar-left'><img src='img/logo.png'><p>Your.Gov</p></a>\n";
		echo "			<a class='mobile-only' id='brand-mobile' href='index.php'>Your.Gov</a>";
	}
	echo "			<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarColor03' aria-controls='navbarColor03' aria-expanded='false' aria-label='Toggle navigation'>\n";
	echo "				<span class='navbar-toggler-icon'></span>\n";
	echo "			</button>\n";
	echo "			<div class='collapse navbar-collapse' id='navbarColor03'>\n";
	echo "				<ul class='navbar-nav mr-auto'>\n";

	foreach (PAGES as $key => $value)
		if ($page == $key) {
			echo "					<li class='nav-item active'>\n";
			echo "						<a class='nav-link' href='#'>$value <span class='sr-only'>(current)</span></a>\n";
			echo "					</li>\n";
		}
		else {
			echo "					<li class='nav-item'>\n";
			echo "						<a class='nav-link' href='$key'>$value</a>\n";
			echo "					</li>\n";
		}

	echo "				</ul>\n";
	echo "			</div>\n";
	echo "		</nav>\n";
	echo "	</header>\n";
}

?>