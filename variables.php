<?php

require 'header.php';

// PHP Variables
// A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).

// Rules for PHP variables:

// A variable starts with the $ sign, followed by the name of the variable
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE are two different variables)

$name = "Susmoy Biswas";
$age = 25;
echo "My name is " . $name . " and I am " . $age . " years old.\n";

$number_1 = 10;
$number_2 = 20;
echo $number_1 + $number_2 . "\n"; // Output: 30    

// Get the Type of a Variable
// The PHP var_dump() function returns the data type and value of a variable.
var_dump($name); // Output: string(13) "Susmoy Biswas"
var_dump($age); // Output: int(25)

// PHP is a Loosely Typed Language
// In the example above, notice that we did not have to tell PHP which data type the variable is.
// PHP automatically converts the variable to the correct data type, depending on its value.


var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

// Assign Multiple Values
// You can assign multiple values in one line:
$x = $y = $z = 5;
echo $x . "\n"; // Output: 5


echo "PHP Variables Scope\n";
// PHP Variables Scope
// In PHP, variables can be declared anywhere in the script.
// The scope of a variable is the part of the script where the variable can be referenced/used.

// PHP has three different variable scopes:
    // local
    // global
    // static

// Local Scope
// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
function myFunction() {
    $x = 5; // local scope
    echo $x . "\n"; // Output: 5
}
myFunction();
// echo $x; // This will generate an error

// Global Scope
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
$y = 10; // global scope
function myFunction2() {
    // echo $y . "\n"; // This will generate an error
}
myFunction2();
echo $y . "\n"; // Output: 10

// The global keyword
// The global keyword is used to access a global variable from within a function.
$z = 15; // global scope
function myFunction3() {
    global $z;
    echo $z . "\n"; // Output: 15
}
myFunction3();

// The PHP $GLOBALS array
// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
function myFunction4() {
    echo $GLOBALS['z'] . "\n"; // Output: 15
}
myFunction4();

// Static Scope
// A variable declared as static retains its value between function calls:
function myFunction5() {
    static $a = 0;
    echo $a . "\n";
    $a++;
}
myFunction5(); // Output: 0
myFunction5(); // Output: 1
myFunction5(); // Output: 2

?>