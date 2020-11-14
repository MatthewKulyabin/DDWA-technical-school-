<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PZ9 (2)</title>
</head>
<body>
	<?php
	function getSubStr($str, $subStr) {
		$arrStr = explode(" ", $str);
		$res = array();
		foreach ($arrStr as $word) {
			if (strpos($word, $subStr) > -1) {
				array_push($res, $word);
			}
		}
		return implode("", $res);
	}

	function outputValue($value, $str) {
		echo $str.$value;
		echo "<br>";
	}

	$browserAgent = $_SERVER['HTTP_USER_AGENT'];
	outputValue(getSubStr($browserAgent, "Mozilla/5.0"),
				"Name of browser and his version: ");
	outputValue(getSubStr($browserAgent, "Win64"),
				"Name of OS: ");
	?>
</body>
</html>