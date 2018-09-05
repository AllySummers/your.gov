var form = document.getElementById("pinForm");
var button = document.getElementById("pinButton");
var missile = document.getElementById("missile");
var explosion = document.getElementById("explosion");
var missile = document.getElementById("missile");

form.addEventListener('submit', function(event) {
	event = event || window.event;
	var pin = document.forms["pinForm"]["pin"];
	var error = "";

	if (pin.value != "9876") {
		error = "Please enter correct PIN.";
		pin.focus();
	}

    if(error != "") {
        pinError.innerHTML = error;
    } else {
		form.style.display = "none";
		missile.style.display = "initial";
		window.setTimeout(showExplosion, 4000);
    }

	event.preventDefault();
	event.returnValue = false; 
}, false)

button.addEventListener('click', function() {
	var pinError = document.getElementById("pinError");
	button.style.display = "none";
	form.style.display = "initial";
})

function showExplosion() {
	explosion.style.display = "initial";
	missile.style.display = "none";
	window.setTimeout(hideExplosion, 1000);
}

function hideExplosion() {
	explosion.style.display = "none";
	button.style.display = "initial";
}