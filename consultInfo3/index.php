<?php

function sumMultiples($limit, $multiple) {
	$n = floor(($limit - 1) / $multiple);
	return $multiple * ($n * ($n + 1)) / 2;
}

$limit = 1000;
$sum = sumMultiples($limit, 3) + sumMultiples($limit, 5) - sumMultiples($limit, 15);
echo "Алгоритм работает за константное время O(1)" . PHP_EOL;
echo $sum;
?>