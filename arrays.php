<?php

require 'header.php';

// PHP Arrays
// An array is a special variable that can hold many values under a single name, and we can access the values by referring to an index number or name.
// PHP Array Types
// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays

// Array Functions
// The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars) . "\n";

// PHP Indexed Arrays
// In indexed arrays each item has an index number.
// By default, the first item has index 0, the second item has item 1, etc.
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

// use the array_push() function to add a new item, the new item will get the index 3:
array_push($cars, "Ford");
var_dump($cars);

foreach ($cars as $x) {
    echo "$x ";
}
echo "\n";

// PHP Associative Arrays
// Associative arrays are arrays that use named keys
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $car["model"] . "\n";

$car["year"] = 2024;
var_dump($car);

foreach ($car as $x => $y) {
    echo "$x: $y \n";
}

// if array has string keys, added elements will always have numeric keys
$a = array("a" => "red", "b" => "green");
array_push($a, "blue", "yellow");
print_r($a);

// Add Array Item
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
var_dump($fruits);

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
var_dump($cars);

// Add Multiple Array Items
// To add multiple items to an existing array, use the array_push() function.
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);

// Add Multiple Items to Associative Arrays
// To add multiple items to an existing array, you can use the += operator.
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
var_dump($cars);

// Remove Array Item
// To remove an existing item from an array, use the array_splice() function.
// With the array_splice() function specify the index (where to start) and how many items to delete.
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);

// Using the unset Function
// also use the unset() function to delete existing array items.
// Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]); // unset($cars[0], $cars[1]);
var_dump($cars);

// Using the array_diff Function
// use the array_diff() function to remove items from an associative array.
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newArray = array_diff($cars, ["Mustang", 1964]);
var_dump($newArray);

// Remove the Last Item
// The array_pop() function removes the last item of an array.
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);

// Remove the First Item
// The array_shift() function removes the first item of an array.
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);

// PHP Sorting Arrays
// PHP - Sort Functions For Arrays
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

// PHP Multidimensional Arrays
// A multidimensional array is an array containing one or more arrays.
// PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

// We can store the data from the table above in a two-dimensional array, like this:
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".\n";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".\n";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".\n";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".\n";
echo "\n";

// We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
for ($row = 0; $row < 4; $row++) {
    echo "Row number $row: ";
    for ($col = 0; $col < 3; $col++) {
        echo $cars[$row][$col] . " ";
    }
    echo "\n";
}
