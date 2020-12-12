<?php 
	function emptyFields() {
		if (empty($_POST['name'])
			|| empty($_POST['surname'])
			|| empty($_POST['email'])) {
			return true;
		}
			return false;
	}

	function emailValidation() {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	   	return true;
	  }
	  	return false;
	}

	function languageCheck() {
		if (!preg_match('/[^A-Za-z0-9]/', $_POST['name'])
	    || !preg_match('/[^A-Za-z0-9]/', $_POST['surname'])) {
	    return true;
	  }
	  	return false;
	}

	function nameSurnameLengthCheck() {
		if (!((strlen($_POST['name']) > 2) && (strlen($_POST['name']) <= 20))
				&& !((strlen($_POST['surname']) > 2) 
					&& (strlen($_POST['surname']) <= 20))) {
	    return true;
	  }
	  	return false;
	}
?>
