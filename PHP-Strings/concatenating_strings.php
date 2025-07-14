<?php

/*
===========================
Concatenating Strings in PHP
===========================

String concatenation is the process of joining two or more strings together.
In PHP, the dot operator (.) is used to concatenate strings.
*/

/*
===========================
1. Basic Concatenation
===========================

Use the dot operator to join strings:
$name = "Jyotiram";
$greeting = "Hello, " . $name . "!";

// Result: "Hello, Jyotiram!"
*/

/*
===========================
2. Concatenation Assignment
===========================

You can append to an existing string using the .= operator:
$message = "Hello";
$message .= ", how are you?";

// Result: "Hello, how are you?"
*/

/*
===========================
3. Mixing Strings and Variables
===========================

Variables can be directly combined with strings:
$language = "PHP";
echo "We are learning " . $language . " today.";
*/

/*
===========================
4. Double Quotes vs Single Quotes
===========================

Double quotes allow variable interpolation:
echo "Welcome $name"; // Outputs: Welcome Jyotiram

Single quotes treat variables as plain text:
echo 'Welcome $name'; // Outputs: Welcome $name
*/

/*
===========================
Example: Concatenating Strings in PHP
===========================
*/

$firstName = "Jyotiram";
$lastName = "Kamble";
$fullName = $firstName . " " . $lastName;
echo "Full Name: $fullName\n";

$welcome = "Welcome, ";
$welcome .= $fullName;
echo $welcome . "!\n";

$language = "PHP";
echo "We are learning " . $language . " today.\n";
echo "Using variable in double quotes: Hello $firstName\n";
echo 'Using variable in single quotes: Hello $firstName\n';
