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
				<h1>Department of Communication & The Arts</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="logo" src="img/communication.svg">
			</div>
		</div>
		<div class="row">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<p class="text-center">
					We advise the Australian Government about the communications and arts sectors and deliver programs so Australians can enjoy the benefits of modern communications and cultural experiences.
				</p>
				<ul>
					<li>Internet - Advise the Australian Government about all Australians having access to high-quality, reliable and affordable Internet services. <a href="https://www.communications.gov.au/what-we-do/internet">Source</a></li>
					<li>Television - Advise the Australian Government about the TV industry and its regulation and services. <a href="https://www.communications.gov.au/what-we-do/television">Source</a>
					<li>Phone - Advise the Australian Government about how all Australians can have reasonable access to a standard and reliable phone service. <a href="https://www.communications.gov.au/what-we-do/phone">Source</a></li>
					<li>Radio - Advise the Australian Government on how to ensure all Australians can access radio.  <a href="https://www.communications.gov.au/what-we-do/radio">Source</a></li>
					<li>Post - Advise the Australian Government about the postal industry and develop policy and draft legislation. <a href="https://www.communications.gov.au/what-we-do/post">Source</a></li>
					<li>Spectrum - Advise the Australian Government about how this scarce resource can be managed effectively and efficiently. <a href="https://www.communications.gov.au/what-we-do/spectrum">Source</a></li>
				</ul>
				<a href="https://www.communications.gov.au/what-we-do" class="description source">Source</a>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row special-feature">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<h2>Communication Network Status</h2>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row text-center">
			<div class="col xl-2 lg-2 md-1"></div>
			<div id="service-1" class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-12">
				<h4>NBN</h4>
				<i class="fas fa-hourglass-half"></i>
				<p>Loading, please wait...</p>
			</div>
			<div class="col-xl-1 col-lg-1"></div>
			<div id="service-2" class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-12">
				<h4>ADSL</h4>
				<i class="fas fa-hourglass-half"></i>
				<p>Loading, please wait...</p>
			</div>
			<div class="col-xl-1 col-lg-1"></div>
			<div id="service-3" class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-12">
				<h4>VDSL</h4>
				<i class="fas fa-hourglass-half"></i>
				<p>Loading, please wait...</p>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row text-center">
			<div class="col xl-2 lg-2 md-1"></div>
			<div id="service-4" class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-12">
				<h4>Net Phone</h4>
				<i class="fas fa-hourglass-half"></i>
				<p>Loading, please wait...</p>
			</div>
			<div class="col-xl-1 col-lg-1"></div>
			<div id="service-5" class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-12">
				<h4>Landline</h4>
				<i class="fas fa-hourglass-half"></i>
				<p>Loading, please wait...</p>
			</div>
			<div class="col-xl-1 col-lg-1"></div>
			<div id="service-6" class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-12">
				<h4>Mobile</h4>
				<i class="fas fa-hourglass-half"></i>
				<p>Loading, please wait...</p>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
	</main>
<?php generate_footer(array_pop(explode("/", __FILE__))); ?>
</body>
</html>