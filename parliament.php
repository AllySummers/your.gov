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
				<h1>Parliament House</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="logo" src="img/parliament.png">
			</div>
		</div>
		<div class="row">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<p class="text-center">The Parliament consists of two Houses (the House of Representatives and the Senate), and the Queen, represented in Australia by the Governor General. Parliament makes laws, authorises the Government to spend public money, scrutinises government activities, and is a forum for debate on national issues.</p>
				<a href="https://www.aph.gov.au/About_Parliament" class="description source">Source</a>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<div class="row special-feature">
			<div class="col xl-2 lg-2 md-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
				<h2>Electronic Voting Form</h2>
			</div>
			<div class="col xl-2 lg-2 md-1"></div>
		</div>
		<form name="voting" id="voting" method="POST" novalidate>
			<div class="form-row">
				<div class="col-md-2 col-lg-2 col-xl-3"></div>
				<div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<label for="first-name" class="col-form-label">First Name:</label>
					<input type="text" class="form-control" id="first-name" name="first-name" placeholder="John" required>
					<p id="first-name-error" class="form-error" hidden>This is a required field.</p>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
					<label for="last-name" class="col-form-label">Last Name:</label>
					<input type="text" class="form-control" id="last-name" name="last-name" placeholder="Smith" required>
					<p id="last-name-error" class="form-error" hidden>This is a required field.</p>
				</div>
				<div class="col-md-2 col-lg-2 col-xl-3"></div>
			</div>
			<div class="form-row">
				<div class="col-md-2 col-lg-2 col-xl-3"></div>
				<div class="form-group col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xl-4">
					<label for="email" class="col-form-label">Email:</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="john.smith@yahoo.com" required>
					<p id="email-error" class="form-error" hidden>Please enter a valid email</p>
				</div>
				<div id="date-container" class="form-group col-xs-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
					<label for="date-of-birth" class="col-form-label">Date of Birth:</label>
					<input type="text" class="form-control" id="date-of-birth" name="date-of-birth" placeholder="01-01-2000" required>
					<p id="date-of-birth-error" class="form-error" hidden>This is a required field.</p>
				</div>
				<div class="col-md-2 col-lg-2 col-xl-3"></div>
			</div>
			<div class="form-row candidate-div">
				<div class="col-md-2 col-lg-2"></div>
				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 candidate">
					<label for="candidate-1" class="col-form-label">Kevin Rudd</label>
					<input type="number" class="form-control candidate-input" id="candidate-1" name="candidate-1" min="1" max="4" value="0" placeholder="0" required>
					<p id="candidate-1-error" class="form-error last-row-error" hidden>This is a required field.</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 candidate">
					<label for="candidate-2" class="col-form-label">Julia Gillard</label>
					<input type="number" class="form-control candidate-input" id="candidate-2" name="candidate-2" min="1" max="4" value="0" placeholder="0" required>
					<p id="candidate-2-error" class="form-error last-row-error" hidden>This is a required field.</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 candidate">
					<label for="candidate-3" class="col-form-label">Malcolm Turnbull</label>
					<input type="number" class="form-control candidate-input" id="candidate-3" name="candidate-3" min="1" max="4" value="0" placeholder="0" required>
					<p id="candidate-3-error" class="form-error last-row-error" hidden>This is a required field.</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 candidate">
					<label for="candidate-4" class="col-form-label">Tony Abbott</label>
					<input type="number" class="form-control candidate-input" id="candidate-4" name="candidate-4" min="1" max="4" value="0" placeholder="0" required>
					<p id="candidate-4-error" class="form-error last-row-error" hidden>This is a required field.</p>
				</div>
				<div class="col-md-2 col-lg-2"></div>
			</div>
			<div class="form-row">
				<div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
				<button class="btn btn-primary col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2" type="submit">Submit Vote</button>
				<div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
			</div>
		</form>
		<h4 id="form-success" hidden>Thank you for your vote!</h4>
	</main>
<?php generate_footer(array_pop(explode("/", __FILE__))); ?>
<script type="text/javascript">
$('#date-container input').datepicker({
	format: "dd-mm-yyyy",
	autoclose: true,
	orientation: "bottom auto"
});
</script>
</body>
</html>