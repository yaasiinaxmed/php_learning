<?php 

$results = array();

$a = 5 > 9; // false
$b = 10 == 10; // true

$results["c"] = $a && $b; // false
$results["d"] = $a || $b; // true
$results["e"] = $b && $results["c"]; // false
// $b && $a && $b
$results["f"] = $a || $results["d"]; // true

var_dump($results);