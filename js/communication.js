var services = ["NBN", "ADSL", "VDSL", "Net Phone", "Landline", "Mobile"]; 
var service_elmts = ["service-1", "service-2", "service-3", "service-4", "service-5", "service-6"];
var counter = 0;

function service_updates(elmt) {
	var rand_num = Math.random();
	var elmt = document.getElementById(elmt);
	elmt.children[1].removeAttribute("class");

	if (rand_num >= 0 && rand_num < 0.34) {
		elmt.children[1].setAttribute("class", "fas fa-check good");
		elmt.children[2].innerHTML = services[counter] + " is healthy!";
	} else if (rand_num >= 0.34 && rand_num < 0.67) {
		elmt.children[1].setAttribute("class", "fas fa-check ok");
		elmt.children[2].innerHTML = services[counter] + " is running mostly ok!";
	} else if (rand_num >= 0.67 && rand_num <= 1) {
		elmt.children[1].setAttribute("class", "fas fa-times bad");
		elmt.children[2].innerHTML = services[counter] + " is experiencing issues!";
	}

	if (counter < 6) {
		counter++;
	} else {
		counter = 0;
	}
}

window.addEventListener("load", function () {
	service_elmts.forEach(function(elmt) {
		service_updates(elmt);
	})
}, false)

window.setInterval(function () {
	service_elmts.forEach(function(elmt) {
		service_updates(elmt);
	})
}, 30000)