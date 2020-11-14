<?php
function odd($num) {
	return ($num % 2 === 0) ? 'true': 'false';
}

function sum(...$nums) {
	$totalSum = 0;
	foreach ($nums as $num) {
		$totalSum += $num;
	}
	return $totalSum;
}

function output($string, $value) {
	echo $string." ".$value."<br>";
}

output('Function odd of 15:', odd(15));
output('Function odd of 16:', odd(16));
output('Function sum of 1, 3, 5, 10, 10, 10, 10:', 
				sum(1, 3, 5, 10, 10, 10, 10));
output('Function function_exists of odd:', function_exists(odd));
output('Function function_exists of sum:', function_exists(sum));
output('Function function_exists of odd:', function_exists(function_exists));
output('Function function_exists of odd:', function_exists(no_function));
?>