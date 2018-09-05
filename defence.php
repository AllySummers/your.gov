<?php 

require 'inc/head.inc.php'; 
require 'inc/navbar.inc.php'; 
require 'inc/footer.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php generate_header(array_pop(explode("/", __FILE__))); ?>
<body>
<?php generate_navbar(array_pop(explode("/", __FILE__))); ?>
	<main class="container-fluid" role="main">
		<div class="row">
			<div class="col">
				<h1>Department of Defence</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="logo" src="img/defence.svg">
			</div>
		</div>
		<div class="row">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<p class="text-center">
					The Australian Defence Force (ADF) is the military organisation responsible for the defence of Australia. It consists of the Royal Australian Navy (RAN), Australian Army, Royal Australian Air Force (RAAF) and a number of 'tri-service' units. The ADF has a strength of just under 80,000 full-time personnel and active reservists, and is supported by the Department of Defence and several other civilian agencies.
				</p>
				<a class="description source" href="https://en.wikipedia.org/wiki/Australian_Defence_Force">Source</a>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12 h2-container">
				<h2>Missile Attack</h2>
				<img src="img/rocket.svg" alt="Missile Animation" id="missile">
				<img src="img/explosion.gif" alt="Explosion!" id="explosion">
				<button id="pinButton" class="btn btn-danger">Enter PIN</button>
				<form id="pinForm" name="pinForm" method="POST">
					<label class="force-center"><strong>PIN: </strong><em>9876</em></label>
					<div class="form-row">
						<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-xs-3"></div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-6">
							<label for="pin">Enter 4 Digit Pin:</label>
							<input type="number" class="form-control form-control-sm" id="pin" name="pin" placeholder="0000">
						</div>
						<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-xs-3"></div>
					</div>
					<p id="pinError"></p>
					<div class="form-row">
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-5"></div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-2">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-5"></div>
					</div>
				</form>
				<a class="source" href="http://all-free-download.com/free-vector/download/rocket-space-ship_312743.html">Source</a>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
	</main>
<?php generate_footer(array_pop(explode("/", __FILE__))); ?>
</body>
</html>