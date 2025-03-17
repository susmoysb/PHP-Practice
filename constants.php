<?php

require 'header.php';

// PHP Constants
// A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
// A valid constant name starts with a letter or underscore (no $ sign before the constant name).
// Note: Unlike variables, constants are automatically global across the entire script.

// To create a constant, use the define() function.
// Create a constant with a case-sensitive name:
define("GREETING", "Welcome to PHP Practice!");
echo GREETING . "\n";

// PHP const Keyword
// Create a case-sensitive constant with the const keyword:
const COUNTRY = "Bangladesh";
echo COUNTRY . "\n";

// const vs. define()
    // const cannot be created inside another block scope, like inside a function or inside an if statement.
    // define can be created inside another block scope.

// Constants are Global
// Constants are automatically global and can be used across the entire script.
define("TITLE", "Welcome to the project!");

function myTest()
{
    echo TITLE . "\n";
}

myTest();
