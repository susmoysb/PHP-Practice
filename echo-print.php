<?php

require 'header.php';

// The PHP echo Statement
// The echo statement can be used with or without parentheses: echo or echo().
echo "Hello World!\n";
echo("Hello World!\n");

// Display Variables
// The following example shows how to output text and variables with the echo statement:
$txt = "Hello World! with echo";
echo "The text is: $txt\n"; // Output: The text is: Hello World!

// Using single quotes
echo 'The text is: ' . $txt . "\n"; // Output: The text is: Hello World!


// The PHP print Statement
// The print statement can be used with or without parentheses: print or print().
print "Hello World!\n";
print("Hello World!\n");

// Display Variables
// The following example shows how to output text and variables with the print statement:
$txt = "Hello World! with print";
print "The text is: $txt\n"; // Output: The text is: Hello World!

// Using single quotes
print 'The text is: ' . $txt . "\n"; // Output: The text is: Hello World!


// Note: The echo statement is faster than the print statement.
// The echo statement can take multiple parameters, while the print statement can take one argument.
echo "Hello", " ", "World", "!\n"; // Output: Hello World!

// The echo statement can output multiple lines.
echo "Hello\n", "World\n"; // Output: Hello
                           //         World


// "\n" only works with double quotes

// Difference between " and ':
// The difference between single-quoted and double-quoted strings in PHP is that
// double-quoted strings are parsed for variables and special characters, while single-quoted strings are not.

?>