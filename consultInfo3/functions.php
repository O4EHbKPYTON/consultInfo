<?php
function sumMultiples($limit, $multiple): float|int
{
	$n = floor(($limit - 1) / $multiple);
	return $multiple * ($n * ($n + 1)) / 2;
}