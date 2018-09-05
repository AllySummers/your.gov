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
				<h1>Department of Environment & Energy</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="logo" src="img/environment.png">
			</div>
		</div>
		<div class="row">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12" id="description">
				<p class="text-center">
					The Australian Energy Market Operator (AEMO) is responsible for operating Australia’s largest gas and electricity markets and power systems, including the:
				</p>
				<ul>
					<li>National Electricity Market (NEM), the interconnected power system in Australia’s eastern and south-eastern seaboard.</li>
					<li>Wholesale Electricity Market (WEM) and power system in Western Australia.</li>
				</ul>
				<a class="source description" href="http://www.aemo.com.au/About-AEMO">Source</a>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row special-feature">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<h2>Power Grid Usage</h2>
				<button class="btn" id="btn_refresh">Manual Refresh Power</button>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-2 col-lg-3 col-xl-3"></div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
				<h3 class="text-center" id="power-1-text">Power Station 1</h3>
				<h4 class="power-value text-center" id="power-1-value">30%</h4>
				<svg id="power-1-parent" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 180" style="enable-background: new 0 0 200 188;" xml:space="preserve">
				<defs>
					<linearGradient y2="0%" x2="0%" y1="100%" x1="0%" id="power-station-1-gradient">
						<stop class="power-1-colours" stop-color="lime" offset="0" style="stop-opacity: 1;" />
						<stop class="power-1-colours" stop-color="lime" offset="0.3" id="power-1-gradientA" style="stop-opacity: 1;">
							<animate attributename="offset" values="0;0.3" repeatCount="0" fill="freeze" dur="2s" begin="0s"></animate>
						</stop>
						<stop class="power-1-colours" stop-color="lime" offset="0.3" id="power-1-gradientB" style="stop-opacity: 0;">
							<animate attributename="offset" values="0;0.3" repeatCount="0" fill="freeze" dur="2s" begin="0s"></animate>
						</stop>
						<stop class="power-1-colours" stop-color="lime" offset="1" style="stop-opacity: 0;" />
					</linearGradient>
				</defs>
				<path  id="power-station-1" style="fill: url(#power-station-1-gradient);" class="power-station" d="M 50,0.5 L 100,0.5 A 100,200 0 0 0 150,179.5 L 0,179.5 A 100,200 0 0 0 50,0.5 z" />
				</svg>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
				<h3 class="text-center" id="power-2-text">Power Station 2</h3>
				<h4 class="power-value text-center" id="power-2-value">0% (Off)</h4>
				<svg id="power-2-parent" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 180" style="enable-background: new 0 0 200 188;" xml:space="preserve">
				<defs>
					<linearGradient y2="0%" x2="0%" y1="100%" x1="0%" id="power-station-2-gradient">
						<stop class="power-2-colours" stop-color="lightgray" offset="0" style="stop-opacity: 1;" />
						<stop class="power-2-colours" stop-color="lightgray" offset="1" id="power-2-gradientA" style="stop-opacity: 1;">
							<animate attributename="offset" values="0;1" repeatCount="0" fill="freeze" dur="2s" begin="0s"></animate>
						</stop>
						<stop class="power-2-colours" stop-color="lightgray" offset="1" id="power-2-gradientB" style="stop-opacity: 0;">
							<animate attributename="offset" values="0;1" repeatCount="0" fill="freeze" dur="2s" begin="0s"></animate>
						</stop>
						<stop class="power-2-colours" stop-color="lightgray" offset="1" style="stop-opacity: 0;" />
					</linearGradient>
				</defs>
				<path  id="power-station-2" style="fill: url(#power-station-2-gradient);" class="power-station" d="M 50,0.5 L 100,0.5 A 100,200 0 0 0 150,179.5 L 0,179.5 A 100,200 0 0 0 50,0.5 z" />
				</svg>
			</div>
			<div class="col-md-2 col-lg-3 col-xl-3"></div>
		</div>
		<h3 class="text-center">Enable Second Power Grid</h3>
		<form id="form-credentials" name="form-credentials" method="POST" hidden>
			<label class="force-center"><strong>Username: </strong><em>admin</em></label>
			<label class="force-center"><strong>Password: </strong><em>the_password</em></label>
			<div class="form-row">
				<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-xs-3"></div>
				<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<label for="username">Username:</label>
					<input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Username">
					<p class="form-error" id="username-error" hidden>This is a required field.</p>
				</div>
				<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-xs-3"></div>
			</div>
			<div class="form-row">
				<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-xs-3"></div>
				<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<label for="password">Password:</label>
					<input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Password">
					<p class="form-error" id="password-error" hidden>This is a required field.</p>
				</div>
				<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-xs-3"></div>
			</div>
			<div class="form-row">
				<div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-xs-4"></div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-4">
					<button type="submit" class="btn btn-primary text-center align-content-center">Submit</button>
					<p class="form-error" id="form-error" hidden>Either your username or password is incorrect.</p>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-xs-4"></div>
			</div>
		</form>
		<button id="login" class="btn btn-danger">Login</button>
		<button id="enable-power" class="btn btn-success" hidden="true">Toggle Second Power Station</button>
		</div>
	</main>
<?php generate_footer(array_pop(explode("/", __FILE__))); ?>
</body>
</html>