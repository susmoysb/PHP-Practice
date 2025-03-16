<?php

require 'header.php';

// PHP code goes here
echo "Hello World!\n";

// Note: PHP statements end with a semicolon (;).

// PHP Case Sensitivity
// In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.

// In the example below, all three echo statements below are equal and legal:
ECHO "Hello World!\n";
echo "Hello World!\n";
EcHo "Hello World!\n";

// However, all variable names are case-sensitive.
// In the example below, $color, $COLOR, and $coLOR are three different variables:
$color = "red";
echo "My car is " . $color . "\n"; // Outputs: My car is red
// echo "My house is " . $COLOR . "\n"; // Outputs: My house is
// echo "My boat is " . $coLOR . "\n"; // Outputs: My boat is

?>