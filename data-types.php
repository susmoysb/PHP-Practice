<?php

require 'header.php';

// PHP Data Types
// Variables can store data of different types, and different data types can do different things.
// PHP supports the following data types:
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

// PHP String
// A string is a sequence of characters, like "Hello world!". A string can be any text inside quotes. You can use single or double quotes:
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
var_dump($y);
echo "\n";

// PHP Integer
// An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
// Rules for integers:
// An integer must have at least one digit
// An integer must not have a decimal point
// An integer can be either positive or negative
// Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x), or octal (8-based - prefixed with 0)
$x = 5896520357;

var_dump($x);
echo "\n";

// PHP Float
// A float (floating point number) is a number with a decimal point or a number in exponential form.
$x = 10.365;
$y = 2.4e3;
$z = 8E-5;

var_dump($x);
var_dump($y);
var_dump($z);
echo "\n";

// PHP Boolean
// A Boolean represents two possible states: TRUE or FALSE.
$x = true;
$y = false;

var_dump($x);
var_dump($y);
echo "\n";

// PHP Array
// An array stores multiple values in one single variable.
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "\n";

// PHP Object
// Classes and objects are the two main aspects of object-oriented programming.
// A class is a template for objects, and an object is an instance of a class.
// When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
// Let's assume we have a class named Car that can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
// When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo "\n";

// PHP NULL Value
// Null is a special data type which can have only one value: NULL.
// A variable of data type NULL is a variable that has no value assigned to it.
// Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
// Variables can also be emptied by setting the value to NULL:

$x = "Hello world!";
$x = null;
var_dump($x);
echo "\n";

// Change Data Type
// If you assign an integer value to a variable, the type will automatically be an integer.
// If you assign a string to the same variable, the type will change to a string:
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);
echo "\n";

// PHP Resource
// The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
// A common example of using the resource data type is a database call.