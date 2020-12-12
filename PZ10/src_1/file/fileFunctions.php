<?php 
	function writeInFile($content, $filename) {
		$current = file_get_contents($filename);
		$current .= $content;
		file_put_contents($filename, $current);
	}

	function isWordInStr($str, $content) {
		if (strpos($str, $content) !== false) {
    	return true;
		}
			return false;
	}

	function isWriteable() {
		$current = file_get_contents(FILE_NAME);
		if (isWordInStr($current, $_POST['name'])
				|| isWordInStr($current, $_POST['surname']
				|| isWordInStr($current, $_POST['email']))) {
			return false;
		}
			return true;
	}

	function writePostInFile() {
		writeInFile($_POST['name'].' ', FILE_NAME);
		writeInFile($_POST['surname'].' ', FILE_NAME);
		writeInFile($_POST['email'], FILE_NAME);
		writeInFile("\n", FILE_NAME);
	}
?>