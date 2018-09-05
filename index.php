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
		<div class="row no-border">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<p class="text-center">
					This website was made for a web design assignment. It was of no option to me to use Bootstrap as a base. It includes lots of custom styling that is also complemented by Bootstrap.
					<br>
					Welcome to the Australian Government Your.Gov portal! This website contains links to pages useful for both citizens and parliament members alike. Please enjoy your time.
				</p>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<img src="img/portal.png" alt="Portal Logo">
				<a href="#"><h3>Portal</h3></a>
				<p>The portal page is the home page of all Australian Government services and pages. This is also the current page.</p>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<img src="img/defence.svg" alt="Department of Defence Logo">
				<a href="defence.php"><h3>Department of Defence</h3></a>
				<p>The Australian Defence Force (ADF) is constituted under the Defence Act 1903, its mission is to defend Australia and its national interests. In fulfilling this mission, Defence serves the Government of the day and is accountable to the Commonwealth Parliament which represents the Australian people to efficiently and effectively carry out the Government's defence policy.</p>
				<a href="https://en.wikipedia.org/wiki/Australian_Defence_Force">Source</a>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<img src="img/environment.png" alt="Department of Environment & Energy Logo">
				<a href="environment.php"><h3>Department of Environment & Energy</h3></a>
				<p>The Department of Environment & Energy designs and implements policies and programs to protect and preserve the environment, water, heritage, promote climate action and provide adequate, relaible and affordable energy.</p>
				<a href="http://www.aemo.com.au/About-AEMO">Source</a>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<img src="img/communication.svg" alt="Department of Communication & The Arts Logo">
				<a href="communication.php"><h3>Department of Communication & The Arts</h3></a>
				<p>The Department of Communication & The Arts promotes innovative and competitive communication and arts sectors and based on their analyses, advice and programs they aim to make digital technologies, communications and cultural experiences better for everyone.</p>
				<a href="https://www.communications.gov.au/what-we-do">Source</a>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<img src="img/humanservices.png" alt="Department of Human Services Logo">
				<a href="humanservices.php"><h3>Department of Human Services</h3></a>
				<p>The Department of Human Services are responsible for the development of service delivery policy and provide access to social, health and other payments and services. They manage services such as Medicare, Centrelink as well as Child Support.</p>
				<a href="https://www.humanservices.gov.au/organisations/about-us/our-department">Source</a>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<img src="img/parliament.png" alt="Parliament House Logo">
				<a href="parliament.php"><h3>Parliament House</h3></a>
				<p>The Parliament consists of two Houses (the House of Representatives and the Senate), and the Queen, represented in Australia by the Governor General. Parliament makes laws, authorises the Government to spend public money, scrutinises government activities, and is a forum for debate on national issues.</p>
				<a href="https://www.aph.gov.au/About_Parliament">Source</a>
			</div>
		</div>
	</main>
<?php generate_footer(array_pop(explode("/", __FILE__))); ?>
</body>
</html>