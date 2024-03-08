<?php
declare(strict_types=1);

require_once "functions.php";

$limit = 1000;
$sum = sumMultiples($limit, 3) + sumMultiples($limit, 5) - sumMultiples($limit, 15);
echo "Алгоритм работает за константное время O(1)" . PHP_EOL;
echo $sum;