var form = document.getElementById("form-credentials");
var login_btn = document.getElementById("login");
var enable_power_btn = document.getElementById("enable-power");
var power_enabled = false;
var rand_num = 0.3;

login_btn.addEventListener('click', function() {
	login_btn.setAttribute("hidden", "true");
	form.removeAttribute("hidden");
})

form.addEventListener('submit', function(event) {
	event = event || window.event;
	var this_form = document.forms["form-credentials"];
	var username = this_form["username"];
	var password = this_form["password"];
	var error = false;

	if (username.value === "") {
		error = true;
		username.focus();
		document.getElementById("username-error").removeAttribute("hidden");
	}
	else {
		document.getElementById("username-error").setAttribute("hidden", true);
	}

	if (password.value === "") {
		error = true;
		password.focus();
		document.getElementById("password-error").removeAttribute("hidden");
	}
	else {
		document.getElementById("password-error").setAttribute("hidden", true);
	}

	if (!error) {
		document.getElementById("username-error").setAttribute("hidden", true);
		document.getElementById("password-error").setAttribute("hidden", true);
		if (username.value != "admin" || password.value != "the_password") {
			error = true;
			username.focus();
			document.getElementById("form-error").removeAttribute("hidden");
		}
	}

	if (!error) {
		document.getElementById("username-error").setAttribute("hidden", true);
		document.getElementById("password-error").setAttribute("hidden", true);
		document.getElementById("form-error").setAttribute("hidden", true);
		form.setAttribute("hidden", true);
		enable_power_btn.removeAttribute("hidden");
		}

	event.preventDefault();
})

enable_power_btn.addEventListener('click', function() {
	if (power_enabled === false) {
		enable_power_btn.innerHTML = "Disable";
		enable_power_btn.classList.remove("btn-success");
		enable_power_btn.classList.add("btn-danger");
		power_enabled = true;
		station_1(event, rand_num * 0.5);
		station_2(event, rand_num * 0.5);
	} else if (power_enabled === true) {
		enable_power_btn.innerHTML = "Enable";
		enable_power_btn.classList.remove("btn-danger");
		enable_power_btn.classList.add("btn-success");
		power_enabled = false;
		station_1(event, rand_num * 2);
		station_2(event, rand_num * 2);
	}
})

function station_1(event, num) {
	event = event || window.event;
	var power_elmts = document.getElementsByClassName("power-1-colours");
	var gradientA = document.getElementById('power-1-gradientA');
	var gradientB = document.getElementById('power-1-gradientB');

	while (gradientA.firstChild) {
	    gradientA.removeChild(gradientA.firstChild);
	}
	while (gradientB.firstChild) {
	    gradientB.removeChild(gradientB.firstChild);
	}

	var text = document.getElementById('power-1-value');
	var current = gradientA.getAttribute("offset");

	if (num <= 0.35) {
		var colour = 'lime';
	} else if (num > 0.35 && num <= 0.75) {
		var colour = 'yellow';
	} else if (num > 0.75 && num <= 1) {
		var colour = 'red';
	}

	for (var i = 0; i < power_elmts.length; i++) {
		power_elmts[i].setAttribute("stop-color", colour);
	}

	text.innerHTML = Math.floor((num)*100) + "%";

	var animate_elmt = document.createElementNS("http://www.w3.org/2000/svg", "animate");
	animate_elmt.setAttribute("attributeName", "offset");
	animate_elmt.setAttribute("values", current + ";" + num);
	animate_elmt.setAttribute("repeatCount", "0");
	animate_elmt.setAttribute("fill", "freeze");
	animate_elmt.setAttribute("dur", "1s");
	animate_elmt.setAttribute("start", "0s");
	var animate_elmt_cln = animate_elmt.cloneNode(true);

	if (current < num) {
		gradientA.appendChild(animate_elmt);
		var animate_elmt_cln = animate_elmt.cloneNode(true);
		gradientB.appendChild(animate_elmt_cln);
		document.getElementById("power-1-parent").setCurrentTime(0);

		window.setTimeout(function() {
			gradientA.setAttribute('offset', num);
			gradientB.setAttribute('offset', num);
		}, 1100)
	} else {
		gradientA.setAttribute('offset', num);
		var animate_elmt_cln = animate_elmt.cloneNode(true);
		gradientB.setAttribute('offset', num);
		gradientA.appendChild(animate_elmt);
		gradientB.appendChild(animate_elmt_cln);
		document.getElementById("power-1-parent").setCurrentTime(0);
	}
}


function station_2(event, num) {
	event = event || window.event;
	if (power_enabled) {
		var power_elmts = document.getElementsByClassName("power-2-colours");
		var gradientA = document.getElementById('power-2-gradientA');
		var gradientB = document.getElementById('power-2-gradientB');

		while (gradientA.firstChild) {
		    gradientA.removeChild(gradientA.firstChild);
		}
		while (gradientB.firstChild) {
		    gradientB.removeChild(gradientB.firstChild);
		}

		var text = document.getElementById('power-2-value');
		var current = gradientA.getAttribute("offset");

		if (num <= 0.35) {
			var colour = 'lime';
		} else if (num > 0.35 && num <= 0.75) {
			var colour = 'yellow';
		} else if (num > 0.75 && num <= 1) {
			var colour = 'red';
		}

		for (var i = 0; i < power_elmts.length; i++) {
			power_elmts[i].setAttribute("stop-color", colour);
		}

		text.innerHTML = Math.floor((num)*100) + "%";

		var animate_elmt = document.createElementNS("http://www.w3.org/2000/svg", "animate");
		animate_elmt.setAttribute("attributeName", "offset");
		animate_elmt.setAttribute("values", current + ";" + num);
		animate_elmt.setAttribute("repeatCount", "0");
		animate_elmt.setAttribute("fill", "freeze");
		animate_elmt.setAttribute("dur", "1s");
		animate_elmt.setAttribute("start", "0s");
		var animate_elmt_cln = animate_elmt.cloneNode(true);

		if (current < num) {
			gradientA.appendChild(animate_elmt);
			var animate_elmt_cln = animate_elmt.cloneNode(true);
			gradientB.appendChild(animate_elmt_cln);
			document.getElementById("power-2-parent").setCurrentTime(0);

			window.setTimeout(function() {
				gradientA.setAttribute('offset', num);
				gradientB.setAttribute('offset', num);
			}, 1000)
		} else {
			gradientA.setAttribute('offset', num);
			var animate_elmt_cln = animate_elmt.cloneNode(true);
			gradientB.setAttribute('offset', num);
			gradientA.appendChild(animate_elmt);
			gradientB.appendChild(animate_elmt_cln);
			document.getElementById("power-2-parent").setCurrentTime(0);
		}
	} else if (!power_enabled) {
		var gradientA = document.getElementById('power-2-gradientA');
		var gradientB = document.getElementById('power-2-gradientB');
		var text = document.getElementById('power-2-value');
		text.innerHTML = "0% (Off)";
		var power_elmts = document.getElementsByClassName("power-2-colours");
		var current = gradientA.getAttribute("offset");
		while (gradientA.firstChild) {
		    gradientA.removeChild(gradientA.firstChild);
		}
		while (gradientB.firstChild) {
		    gradientB.removeChild(gradientB.firstChild);
		}
		gradientA.setAttribute('offset', "1");
		gradientB.setAttribute('offset', "1");
		var animate_elmt = document.createElementNS("http://www.w3.org/2000/svg", "animate");
		animate_elmt.setAttribute("attributeName", "offset");
		animate_elmt.setAttribute("values", current + ";1");
		animate_elmt.setAttribute("repeatCount", "0");
		animate_elmt.setAttribute("fill", "freeze");
		animate_elmt.setAttribute("dur", "1s");
		animate_elmt.setAttribute("start", "0s");
		var animate_elmt_cln = animate_elmt.cloneNode(true);
		gradientA.appendChild(animate_elmt_cln);
		gradientB.appendChild(animate_elmt_cln);
		document.getElementById("power-2-parent").setCurrentTime(0);
		for (var i = 0; i < power_elmts.length; i++) {
			power_elmts[i].setAttribute("stop-color", "lightgray");
		}
	}
}

document.getElementById('btn_refresh').addEventListener('click', function () {
	rand_num = Math.random().toFixed(2);
	if (power_enabled === true) {
		rand_num /= 2;
	}
	station_1(event, rand_num);
	station_2(event, rand_num);
}, false)

window.setInterval(function () {
	rand_num = Math.random().toFixed(2);
	if (power_enabled === true) {
		rand_num /= 2;
	}
	station_1(event, rand_num);
	station_2(event, rand_num);
}, 60000)