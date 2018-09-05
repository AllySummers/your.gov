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
				<h1>Department of Human Services</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="logo" src="img/humanservices.png">
			</div>
		</div>
		<div class="row">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<p class="text-center">
					The Department of Human Services are responsible for the development of service delivery policy and provide access to social, health and other payments and services. They manage services such as Medicare, Centrelink as well as Child Support. 
					<br>
					<br>
					The Department of Human Services also collects information on its users and clients, which you can use the button below to find.
				</p>
				<a class="description source" href="https://www.humanservices.gov.au/organisations/about-us/our-department">Source</a>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row special-feature">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<h2>Patient Information</h2>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row">
			<div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-xs-4"></div>
				<button class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-4 btn text-center btn-primary" id="generate-patient">Generate Patient</button>
			<div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-xs-4"></div>
		</div>
		<div class="row">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<table id="patient-info" class="table text-center">
					<thead>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Medicare No.</th>
						<th>Address</th>
						<th>Phone No.</th>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
	</main>
<?php generate_footer(array_pop(explode("/", __FILE__))); ?>
</body>
</html>