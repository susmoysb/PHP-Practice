<?php

declare(strict_types=1); // strict requirement
// To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
require 'header.php';

// PHP Functions

function setHeight($minHeight = 50)
{
    echo "The height is : $minHeight \n";
}
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo "\n";

function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . sum(5, 10) . "\n";
echo "7 + 13 = " . sum(7, 13) . "\n";
echo "2 + 4 = " . sum(2, 4) . "\n";
echo "\n";

// Passing Arguments by Reference
// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
echo "\n";

// Variable Number of Arguments
// By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.
// The variadic function argument becomes an array.
// The variadic argument must be the last argument:
function myFamily($lastName, ...$firstName)
{
    $txt = "";
    $len = count($firstName);
    for ($i = 0; $i < $len; $i++) {
        $txt = $txt . "Hi, $firstName[$i] $lastName.\n";
    }
    return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
echo "\n";

function addNumbers(float $a, float $b): float
{
    return $a + $b;
}
echo addNumbers(1.2, 5.2);
echo "\n";

// User-Defined Function
function greet($name)
{
    return "Hello, $name!";
}

// Built-in Function (e.g., array_map)
$names = ["Alice", "Bob", "Charlie"];
$greetings = array_map('greet', $names);  // Applies greet function to each element

// Anonymous Function
$filter = function ($name) {
    return strlen($name) > 3;
};

// Filtering names using the anonymous function
$filteredNames = array_filter($names, $filter);

print_r($greetings);  // Outputs: Array ( [0] => Hello, Alice! [1] => Hello, Bob! [2] => Hello, Charlie! )
print_r($filteredNames);  // Outputs: Array ( [0] => Alice [1] => Charlie )
