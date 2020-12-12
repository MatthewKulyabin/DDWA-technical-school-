<?php
	require 'fileFunctions.php';

	if (!file_get_contents(FILE_NAME)) {
		writePostInFile();
	}

	if (isWriteable()) {
		writePostInFile();
	}
?>
	