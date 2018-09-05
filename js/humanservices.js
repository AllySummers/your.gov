var firstNames = ["Mariette", "Georgiann", "Stefania", "Fannie", "Arnetta", "Elaine", "Ozell", "Rita", "France", "Chloe"];
var lastNames = ["Vitagliano", "Borgen", "Setzer", "Padmore", "Mounce", "Healey", "Buller", "Felmlee", "Estey", "Jaynes"];
var medicareNums = ["258286491","402397291","466850529","482276984","476493459","619244724","670757238","849763450","725354418","424630725"];
var addresses = ["2 Selby Ave., Kennesaw, GA 30144", "9479 James Road, Fort Mill, SC 29708", "111 South 6th Rd., Brunswick, GA 31525", "8555 Harvard Rd., Selden, NY 11784", "12 Cemetery Street, Galloway, OH 43119", "8439 E. Third Ave., Crystal Lake, IL 60014", "620 Lafayette Street, Tewksbury, MA 01876", "693 Selby Drive, Gibsonia, PA 15044", "474 Kingston Dr., Wappingers Falls, NY 12590", "356 Gregory Avenue, Honolulu, HI 96815"];
var phoneNums = ["02 1892 9592", "03 1414 5156", "04 1234 5678", "04 1122 3344", "04 1122 3334", "01 0195 1156", "06 0022 5567", "05 1123 5567", "04 1199 8877", "02 1234 9876"];

document.getElementById('generate-patient').addEventListener('click', function () {
	var row = document.getElementById('patient-info').insertRow();
	var cell = row.insertCell(0);
	cell.innerHTML = firstNames[Math.floor(Math.random() * 10)];
	cell = row.insertCell(1);
	cell.innerHTML = lastNames[Math.floor(Math.random() * 10)];
	cell = row.insertCell(2);
	cell.innerHTML = medicareNums[Math.floor(Math.random() * 10)];
	cell = row.insertCell(3);
	cell.innerHTML = addresses[Math.floor(Math.random() * 10)];
	cell = row.insertCell(4);
	cell.innerHTML = phoneNums[Math.floor(Math.random() * 10)];
})