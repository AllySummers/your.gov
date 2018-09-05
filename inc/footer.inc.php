 <?php

function generate_footer($page) {
	echo "	<footer class='container-fluid'>\n";
	echo "		<div>\n";
	echo "			<div class='col-1'>Copyright " . date('Y') . " Your.Gov</div>\n";
	echo "			<div class='col-1'>Designed by Ally</div>\n";
	echo "		</div>\n";
	echo "	</footer>\n";
	echo "	<script src='js/min/jquery.min.js'></script>\n";
	echo "	<script src='js/min/popper.min.js'></script>\n";
	echo "	<script src='js/min/moment.min.js'></script>\n";
	echo "	<script src='js/min/bootstrap.min.js'></script>\n";

	if (array_shift(explode(".", $page)) == "parliament") {
		echo "	<script src='js/min/bootstrap-datepicker.min.js'></script>\n";
	}
	
	if (file_exists("js/" . array_shift(explode(".", $page)) . ".js")) {
		echo "	<script type='text/javascript' src='js/" . array_shift(explode(".", $page)) . ".js'></script>\n";
	}
}

 ?>