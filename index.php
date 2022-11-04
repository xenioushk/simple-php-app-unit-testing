<?php

require_once './inc/Calculator.php';

use Inc\Calculator;

$myCalculator = new Calculator();

echo $addition = $myCalculator->add(1, 2);
echo "<br>";

echo $subtract = $myCalculator->subtract(2, 1);
echo "<br>";