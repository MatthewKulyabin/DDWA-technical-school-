<?php
	require 'errorFunctions.php';
	
	$errors = [];
  if (!empty($_POST)) {
	  if (emptyFields()) {
	  	array_push($errors, 'The text fields have not been filled');
	  }

	  if (emailValidation()) {
	  	array_push($errors, 'The email is incorect');
	  }

	  if (languageCheck()) {
	  	array_push($errors, 'Name and Surname must be on Russian');
	  }

	  if (nameSurnameLengthCheck()) {
	  	array_push($errors, 'Name and Surname must be less than 20 and more than 2 symbols');
	  }

	  if (empty($errors)) {
    	require './file/fileHandler.php';
 	 	}
  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo "<p>$error</p>";
    }
  }
?>
