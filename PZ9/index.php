<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PZ9 (4)</title>
</head>
<body>
	<?php
	function getWordsCountInFile($currFile, $ip) {
		$array = explode("\n", $currFile);
		$counter = 0;
		foreach ($array as $key => $value) {
			if (isWordInStr($value, $ip)) {
				$counter++;
			}
		}
		return $counter;
	}

	function isWordInStr($str, $ip) {
		if (strpos($str, $ip) !== false) {
	    return true;
		}
			return false;
	}

	function writeInFile($name, $content) {
		$file = $name;
		$current = file_get_contents($file);
		$ipCounters = getWordsCountInFile($current, $content);
		if (isWordInStr($current, $content)) {
			$countPos = strpos($current, $content) + strlen($content) + 1;
			$current .= $content." $ipCounters"."\n";
			file_put_contents($file, $current);
			return;
		}
		$current .= $content." 0\n";
		file_put_contents($file, $current);
	}
	$ip = $_SERVER['REMOTE_ADDR'];
	writeInFile("ips.txt", $ip);
	?>
</body>
</html>