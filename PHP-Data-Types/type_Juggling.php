<?php

/*
===========================
Type Juggling (Type Coercion) in PHP
===========================

Type juggling refers to PHP's ability to automatically convert variables from one data type to another depending on the context.
*/

/*
===========================
Examples of Type Juggling
===========================

1. String to Integer:
   When a string is used in an arithmetic operation, PHP tries to convert it to a number.
   Example: $x = "10" + 5; // $x becomes 15

2. Boolean Conversion:
   Non-zero numbers and non-empty strings convert to true.
   Zero, "0", empty string, null, or empty array convert to false.

3. Loose Comparison:
   When using ==, PHP may juggle types to compare values.
   Example: "0" == 0 is true
            0 == false is true
            "" == 0 is true

4. Strict Comparison:
   When using ===, PHP does NOT convert types.
   Example: "0" === 0 is false (string vs integer)
*/

/*
===========================
Caution with Type Juggling
===========================
- Loose comparisons (==) can lead to unexpected behavior.
- Always prefer strict comparisons (===) when checking both value and type.
*/

/*
===========================
Example: Demonstrating Type Juggling
===========================
*/


$title = 'My Blog';
$numPosts = 10 * '10';
?>
<h1><?= $title ?></h1>
<p><?= gettype($title) ?></p>
<h2><?= $numPosts ?></h2>
<p><?= gettype($numPosts) ?></p>