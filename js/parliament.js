var counter = 0;
var form = document.getElementById("voting");

for (var i = 0; i < document.getElementsByClassName("candidate-input").length; i++) {
	document.getElementsByClassName("candidate-input")[i].addEventListener("focus", function(event) {
		event = event || window.event;
		if (counter < 4) {
			elmt = event.currentTarget;
			counter++;
			elmt.value = counter;
		}
	})
}

form.addEventListener('submit', function(event) {
	var event = event || window.event;
	var form_success = document.getElementById("form-success");
	var this_form = document.forms["voting"];
	var first_name = this_form["first-name"];
	var last_name = this_form["last-name"];
	var date_of_birth = this_form["date-of-birth"];
	var email = this_form["email"];
	var error = false;

	if (first_name.value === "") {
		error = true;
		first_name.focus();
		document.getElementById("first-name-error").removeAttribute("hidden");
	}
	else {
		document.getElementById("first-name-error").setAttribute("hidden", true);
	}

	if (last_name.value === "") {
		error = true;
		last_name.focus();
		document.getElementById("last-name-error").removeAttribute("hidden");
	}
	else {
		document.getElementById("last-name-error").setAttribute("hidden", true);
	}

	if (email.value === "") {
		document.getElementById("email-error").innerHTML = "This is a required field.";
		document.getElementById("email-error").removeAttribute("hidden");
	}
	else if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email.value)) {
		error = true;
		email.focus();
		document.getElementById("email-error").innerHTML = "Please enter a valid email address.";
		document.getElementById("email-error").removeAttribute("hidden");
	}
	else {
		document.getElementById("email-error").setAttribute("hidden", true);
	}

	if (date_of_birth.value === "") {
		document.getElementById("date-of-birth-error").innerHTML = "This is a required field.";
		document.getElementById("date-of-birth-error").removeAttribute("hidden");
	}
	else if (!/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/.test(date_of_birth.value)) {
		error = true;
		date_of_birth.focus();
		document.getElementById("date-of-birth-error").innerHTML = "Please enter a valid date.";
		document.getElementById("date-of-birth-error").removeAttribute("hidden");
	} else if (moment().diff(moment(date_of_birth.value, 'DD/MM/YYYY'), 'years') < 18) {
		error = true;
		date_of_birth.focus();
		document.getElementById("date-of-birth-error").innerHTML = "You must be at least 18 years of age to vote.";
		document.getElementById("date-of-birth-error").removeAttribute("hidden");
	}
	else {
		document.getElementById("date-of-birth-error").setAttribute("hidden", true);
	}

	var votes = [this_form["candidate-1"].value, this_form["candidate-2"].value, this_form["candidate-3"].value, this_form["candidate-4"].value];

	votes.forEach(function(item, i) {
		candidate = document.getElementById("candidate-" + (i + 1));
		candidate_error = document.getElementById("candidate-" + (i + 1) + "-error");
		if (candidate.value < 1 || candidate.value > 4) {
			if (candidate.value === "0") {
				candidate_error.innerHTML = "This is a required field.";
			} else {
				candidate_error.innerHTML = "Please enter a value from 1 to 4.";
			}
			error = true;
			candidate_error.removeAttribute("hidden");
		} else if (votes.indexOf(item) != i) {
			document.getElementById("candidate-" + (votes.indexOf(item) + 1) + "-error").innerHTML = "Please ensure value " + item + " is only used once.";
			document.getElementById("candidate-" + (votes.indexOf(item) + 1) + "-error").removeAttribute("hidden");
			candidate_error.innerHTML = "Please ensure value " + item + " is only used once.";
			error = true;
			candidate_error.removeAttribute("hidden");
		} else {
			candidate_error.setAttribute("hidden", true);
		}
	})

	event.preventDefault();

	if (!error) {
		document.getElementById("last-name-error").setAttribute("hidden", true);
		document.getElementById("email-error").setAttribute("hidden", true);
		document.getElementById("date-of-birth-error").setAttribute("hidden", true);
		document.getElementById("candidate-1-error").setAttribute("hidden", true);
		document.getElementById("candidate-2-error").setAttribute("hidden", true);
		document.getElementById("candidate-3-error").setAttribute("hidden", true);
		document.getElementById("candidate-4-error").setAttribute("hidden", true);
		document.getElementById("first-name-error").setAttribute("hidden", true);
		form.setAttribute("hidden", true);
		form_success.removeAttribute("hidden");
	}
}, false)