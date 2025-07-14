<?php

/*
===========================
String Interpolation & Escaping in PHP
===========================

Interpolation allows variables to be embedded directly within double-quoted strings.
Escaping is used to insert special characters into strings or to prevent variable parsing.
*/

/*
===========================
1. String Interpolation (Double Quotes)
===========================

Variables inside double-quoted strings are parsed and replaced with their values.
Example:
$name = "Jyotiram";
echo "Hello, $name!"; // Outputs: Hello, Jyotiram!
*/

/*
===========================
2. Curly Brace Syntax for Complex Variables
===========================

Useful when embedding arrays or clarifying variable boundaries:
Example:
$person = ["first" => "Jyotiram"];
echo "Hello, {$person["first"]}!";
*/

/*
===========================
3. No Interpolation in Single Quotes
===========================

Single-quoted strings treat variables as plain text:
$name = "Jyotiram";
echo 'Hello, $name!'; // Outputs: Hello, $name!
*/

/*
===========================
4. Escaping Characters
===========================

Use backslash (\) to escape characters inside strings.
Examples:
\n   New line
\t   Tab
\"   Double quote inside double-quoted string
\\   Backslash
*/

/*
===========================
Example: Interpolation & Escaping in PHP
===========================
*/

$name = "Jyotiram";
$language = "PHP";

// Interpolation
echo "Welcome, $name!\n";
echo "Welcome,\"$name!\"\n";

//