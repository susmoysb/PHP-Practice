<?php

require 'header.php';

// PHP Conditional Statements
// In PHP we have the following conditional statements:
    // if statement - executes some code if one condition is true
    // if...else statement - executes some code if a condition is true and another code if that condition is false
    // if...elseif...else statement - executes different codes for more than two conditions
    // switch statement - selects one of many blocks of code to be executed

if (5 > 3) {
    echo "5 is greater than 3\n";
}

$t = 14;
if ($t < 20) {
    echo "$t is smaller than 20\n";
}

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c) {
    echo "Both conditions are true\n";
}

$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
    echo "$a is a number between 2 and 7\n";
}

$number = 50;
if ($number == 50) {
    echo "The number is 50!\n";
} else {
    echo "The number is not 50!\n";
}

if ($number < 50) {
    echo "The number is less than 50!\n";
} elseif ($number > 50) {
    echo "The number is greater than 50!\n";
} else {
    echo "The number is 50!\n";
}

// Nested If
$a = 13;
if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20\n";
    } else {
        echo " but not above 20\n";
    }
}

// The PHP switch Statement
$color = "red";
switch ($color) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
