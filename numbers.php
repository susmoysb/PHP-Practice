<?php

require 'header.php';

// PHP Numbers
// There are three main numeric types in PHP:
    // Integer
    // Float
    // Number Strings
// In addition, PHP has two more data types used for numbers:
    // Infinity
    // NaN

$a = 5;
$b = 5.34;
$c = "25";

var_dump($a); // Output: int(5)
var_dump($b); // Output: float(5.34)
var_dump($c); // Output: string(2) "25"

// PHP Integers
// PHP has the following predefined constants for integers:
    // PHP_INT_MAX - The largest integer supported
    // PHP_INT_MIN - The smallest integer supported
    // PHP_INT_SIZE -  The size of an integer in bytes
// PHP has the following functions to check if the type of a variable is integer:
    // is_int()
    // is_integer() - alias of is_int()
    // is_long() - alias of is_int()
echo PHP_INT_MAX . " " . PHP_INT_MIN . " " . PHP_INT_SIZE . "\n"; // Output: 9223372036854775807 -9223372036854775808 8

// Check if the type of a variable is integer:
$x = 5985;
var_dump(is_int($x)); // Output: bool(true)

$x = 59.85;
var_dump(is_int($x)); // Output: bool(false)

// PHP Floats
// The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.
// PHP has the following predefined constants for floats (from PHP 7.2):
    // PHP_FLOAT_MAX - The largest representable floating point number
    // PHP_FLOAT_MIN - The smallest representable positive floating point number
    // PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
    // PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
// PHP has the following functions to check if the type of a variable is float:
    // is_float()
    // is_double() - alias of is_float()
echo PHP_FLOAT_MAX . " " . PHP_FLOAT_MIN . " " . PHP_FLOAT_DIG. " " . PHP_FLOAT_EPSILON . "\n"; // Output: 1.7976931348623E+308 2.2250738585072E-308 15 2.2204460492503E-16

// Check if the type of a variable is float:
$x = 10.365;
var_dump(is_float($x)); // Output: bool(true)

// PHP Infinity
// A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
// PHP has the following functions to check if a numeric value is finite or infinite:
    // is_finite()
    // is_infinite()
$x = 1.9e411;
var_dump($x); // Output: float(INF)

// PHP NaN
// NaN stands for Not a Number.
// NaN is used for impossible mathematical operations.
// PHP has the following functions to check if a value is not a number:
    // is_nan()
$x = acos(8);
var_dump($x); // Output: float(NAN)

// PHP Numerical Strings
// The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.
$x = 5985;
var_dump(is_numeric($x)); // Output: bool(true)

$x = "5985";
var_dump(is_numeric($x)); // Output: bool(true)
$x = "59.85" + 100;
var_dump(is_numeric($x)); // Output: bool(true)

$x = "Hello";
var_dump(is_numeric($x)); // Output: bool(false

// PHP Casting Strings and Floats to Integers
// Sometimes you need to cast a numerical value into another data type.
// The (int), (integer), and intval() functions are often used to convert a value to an integer.)
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast; // Output: 23465

echo "\n";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast; // Output: 23465