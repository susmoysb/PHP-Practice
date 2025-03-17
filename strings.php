<?php

require 'header.php';

// PHP Strings
// A string is a sequence of characters, like "Hello world!".
// A string can be any text inside quotes. We can use single or double quotes:
echo "Hello World!\n";
echo 'Hello World!' . "\n"; // single quotes work too but can't parse variables or special characters like "\n"

// Get The Length of a String
// The PHP strlen() function returns the length of a string.
echo strlen("Hello World!") . "\n"; // Output: 12

// Count Words in a String
// The PHP str_word_count() function counts the number of words in a string.
echo str_word_count("Hello World!") . "\n"; // Output: 2

// Reverse a String
// The PHP strrev() function reverses a string.
echo strrev("Hello World!") . "\n"; // Output: !dlroW olleH

// Search For a Text Within a String
// The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
echo strpos("Hello World!", "World") . "\n"; // Output: 6

// Replace Text Within a String
// The PHP str_replace() function replaces some characters with some other characters in a string.
echo str_replace("World", "Universe", "Hello World!") . "\n"; // Output: Hello Universe!

// Concatenation
// The PHP concatenation operator (.) is used to combine two strings.
echo "Hello" . " " . "World!" . "\n"; // Output: Hello World!

// Concatenation Assignment
// The PHP .= operator is used to concatenate a string to the end of another string.
$txt = "Hello";
$txt .= " World!";
echo $txt . "\n"; // Output: Hello World!

// Escape Characters
// The backslash (\) is used to escape characters that have a special meaning in PHP, like double quotes, single quotes, and backslashes.
echo "Hello \"World!\"\n"; // Output: Hello "World!"
echo 'Hello \'World!\'' . "\n"; // Output: Hello 'World!'
echo "Hello \\World!\n"; // Output: Hello \World!

// Convert String to Upper Case
// The PHP strtoupper() function converts a string to uppercase.
echo strtoupper("Hello World!") . "\n"; // Output: HELLO WORLD!

// Convert String to Lower Case
// The PHP strtolower() function converts a string to lowercase.
echo strtolower("Hello World!") . "\n"; // Output: hello world!

// Capitalize the First Letter of Each Word
// The PHP ucwords() function capitalizes the first letter of each word in a string.
echo ucwords("hello world!") . "\n"; // Output: Hello World!

// Capitalize the First Letter of a String
// The PHP ucfirst() function capitalizes the first letter of a string.
echo ucfirst("hello world!") . "\n"; // Output: Hello world!

// Trim Whitespace from a String
// The PHP trim() function removes whitespace from both sides of a string (left and right) but not in the middle.
echo trim("  Hello       World!  ") . "\n"; // Output: Hello World!

// Repeat a String
// The PHP str_repeat() function repeats a string a specified number of times.
echo str_repeat("Hello ", 3) . "\n"; // Output: Hello Hello Hello 

// Compare Two Strings
// The PHP strcmp() function compares two strings. If the strings are equal, it returns 0. If the first string is less than the second string, it returns a negative number. If the first string is greater than the second string, it returns a positive number.
echo strcmp("Hello", "Hello") . "\n"; // Output: 0
echo strcmp("Hello", "World") . "\n"; // Output: -1
echo strcmp("World", "Hello") . "\n"; // Output: 1

// The strcasecmp() function compares two strings (case-insensitive).
echo strcasecmp("Hello world!", "HELLO WORLD!") . "\n"; // Output: 0

// Substring
// The PHP substr() function returns a part of a string.
echo substr("Hello World!", 6) . "\n"; // Output: World!
echo substr("Hello World!", 0, 5) . "\n"; // Output: Hello

// The explode() function breaks a string into an array.
$str = "Hello world. It's a beautiful day.";
print_r(explode(" ", $str));

// The str_split() function splits a string into an array.
print_r(str_split("Hello", 2));

// The implode() function returns a string from the elements of an array.
$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr) . "\n";

// The chop() function removes whitespaces or other predefined characters from the right end of a string.
echo chop("Hello World!", "World!") . "\n"; // Output: Hello

// The chr() function returns a character from the specified ASCII value.
// The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.
echo chr(52) . "\n"; // Decimal value Output: 4
echo chr(052) . "\n"; // Octal value Output: *
echo chr(0x52) . "\n"; // Hex value Output: R

// The ord() function returns the ASCII value of the first character of a string.
echo ord("h") . "\n"; // Output: 104
echo ord("hello") . "\n"; // Output: 104

// The chunk_split() function splits a string into a series of smaller parts.
echo chunk_split("Hello world!", 6, "...") . "\n"; // Output: Hello ...world!...

// The count_chars() function returns information about characters used in a string (for example, how many times an ASCII character occurs in a string, or which characters that have been used or not been used in a string).
echo count_chars("Hello World!", 3) . "\n"; // Output: !HWdelor

// The number_format() function formats a number with grouped thousands.
echo number_format("1000000", 2) . "\n"; // Output: 1,000,000.00

// The str_shuffle() function randomly shuffles all the characters of a string.
echo str_shuffle("Hello World") . "\n"; // Output: Generates random string every time

// The str_word_count() function counts the number of words in a string.
echo str_word_count("Hello world!") . "\n"; // Output: 2
