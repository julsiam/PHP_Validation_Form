
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

	if (pw1 <8) {
		document.getElementById("errorConfirmPass").innerHTML = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
		return false;

	}else{
		return true;
	}
}


