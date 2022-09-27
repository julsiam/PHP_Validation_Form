
function validateRegForm() {
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var pw1 = document.getElementById("pswd1").value;
	var pw2 = document.getElementById("pswd2").value;

	if (!isNaN(fname)) {
		document.getElementById("charMessage").innerHTML = "Input valid Firstame*";
		return false;
	}

	if (!isNaN(lname)) {
		document.getElementById("charMessage2").innerHTML = "Input valid Surname*";
		return false;
	}

	if (pw1 != pw2) {
		document.getElementById("errorConfirmPass").innerHTML = "Incorrect Password";
		return false;

	}
}


