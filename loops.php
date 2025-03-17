<?php

require 'header.php';

// PHP Loops
// we have the following loop types:

// while - loops through a block of code as long as the specified condition is true
    // do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    // for - loops through a block of code a specified number of times
    // foreach - loops through a block of code for each element in an array

// The PHP while Loop
// The while loop executes a block of code as long as the specified condition is true.

$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
echo "\n";

$i = 1;
while ($i < 6) {
    if ($i == 3) break; // With the break statement we can stop the loop even if the condition is still true
    echo $i;
    $i++;
}
echo "\n";

$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) continue; // With the continue statement we can stop the current iteration, and continue with the next
    echo $i;
}
echo "\n";

// The PHP do...while Loop
// The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.
$i = 1;
do {
    echo $i;
    $i++;
} while ($i < 6);
echo "\n";

$i = 8;
do {
    echo $i;
    $i++;
} while ($i < 6);
echo "\n";
// Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false.

// The PHP for Loop
// The for loop is used when you know how many times the script should run.
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x \n";
}
echo "\n";

// The foreach Loop on Arrays
// The most common use of the foreach loop, is to loop through the items of an array.

// Loop through the items of an indexed array:
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    echo "$x \n";
}
echo "\n";

// Loop through the items of an associative array:
$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($members as $x => $y) {
    echo "$x : $y \n";
}
echo "\n";

// The foreach Loop on Objects
// The foreach loop can also be used to loop through properties of an object:
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");
foreach ($myCar as $x => $y) {
    echo "$x: $y \n";
}
echo "\n";
