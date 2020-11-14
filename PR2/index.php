<?php
function createArr(&$arr, $size, $from, $to) {
	for ($i = 0; $i < $size; $i++) {
		array_push($arr, rand($from, $to));
	}
}

function showArray($arr, $name) {
	echo "$name: "; print_r($arr);
	echo "<br>";
	echo "<br>";
}
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/
function forFillZ($arr, &$Z) {
	for ($i = 0; $i < sizeof($arr); $i++) {
		$currStr = strval($arr[$i]);
		$currSum = 0;
		for ($j = 0; $j < sizeof($currStr) + 1; $j++) {
			$currSum += $currStr[$j];
		}
		if ($currSum % 2 !== 0) {
			array_push($Z, $arr[$i]);
		} 
	}
}
function fillZ($arr, $arr2, &$Z) {
	$arrs = array($arr, $arr2);
	for ($a = 0; $a < 2; $a++)
	{
		forFillZ($arrs[$a], $Z);
	}
}
// /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
function threeMaxEls($arr) {
	for ($j = 0; $j < 3; $j++) {
		$curr = $j;
		for ($i = 0; $i < sizeof($arr) + 1; $i++) {;
			if ($arr[$i] > $arr[$curr] ) {
				$curr = $i;
			}
		}
		echo "<br>";
		echo $arr[$curr];
		unset($arr[$curr]);
	}
	echo "<br>";
}

$X = array();
$Y = array();
$Z = array();
createArr($X, 10, 0, 100);
createArr($Y, 10, 0, 100);

showArray($X, '$X');
showArray($Y, '$Y');

fillZ($X, $Y, $Z);
showArray($Z, '$Z');
threeMaxEls($Z);
?>