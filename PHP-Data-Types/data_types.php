<?php

/*
===========================
Scalar Data Types
===========================

int: Integer numbers like 1, 2, -5, 0x1A (hex), 0b1010 (binary)
float: Decimal numbers like 3.14, -2.5, 1.2e3
string: Text values like "Hello", 'PHP'
bool: Boolean values true or false
*/

/*
===========================
Compound Data Types
===========================

array: A collection of values
Example: [1, 2, 3] or ['key' => 'value']

object: An instance of a class
Example: new MyClass();

callable: A function or method that can be called
Example: 'strlen', [$object, 'method']

iterable: Can be used in a foreach loop (arrays or Traversable objects)
*/

/*
===========================
Special Data Types
===========================

null: Represents a variable with no value
Example: $x = null;

resource: A special variable referencing an external resource
Example: fopen("file.txt", "r"), mysqli_connect()
*/

/*
===========================
Type Checking Functions
===========================

is_int($var): Check if variable is integer
is_float($var): Check if variable is float
is_string($var): Check if variable is string
is_bool($var): Check if variable is boolean
is_array($var): Check if variable is array
is_object($var): Check if variable is object
is_null($var): Check if variable is null
*/

/*
===========================
PHP 8+ Features
===========================

Union types: A function parameter can accept multiple types
Example:
function example(int|float $x): string {
    return "Value: $x";
}

mixed: Accepts any type (int, string, array, etc.)

readonly: (PHP 8.1+) Used in classes to declare immutable properties

enum: (PHP 8.1+) Used to define a custom type with fixed values
*/

/*
===========================
Example: Check All Data Types in Action
===========================
*/

// Scalar types
$intVar = 42;
$floatVar = 3.14;
$stringVar = "Hello PHP";
$boolVar = true;

// Compound types
$arrayVar = [1, 2, 3];
class MyClass {}
$objectVar = new MyClass();
$callableVar = 'strlen';

// Special types
$nullVar = null;
$resourceVar = fopen(__FILE__, "r"); // file resource

// Display values and types
echo "intVar: $intVar (" . gettype($intVar) . ")<br>";
echo "floatVar: $floatVar (" . gettype($floatVar) . ")<br>";
echo "stringVar: $stringVar (" . gettype($stringVar) . ")<br>";
echo "boolVar: " . ($boolVar ? 'true' : 'false') . " (" . gettype($boolVar) . ")<br>";
echo "arrayVar: " . implode(', ', $arrayVar) . " (" . gettype($arrayVar) . ")<br>";
echo "objectVar: " . get_class($objectVar) . " (" . gettype($objectVar) . ")<br>";
echo "callableVar: $callableVar (" . (is_callable($callableVar) ? 'callable' : 'not callable') . ")<br>";
echo "nullVar: " . (is_null($nullVar) ? 'null' : 'not null') . "<br>";
echo "resourceVar: (" . gettype($resourceVar) . ")<br>";

fclose($resourceVar); // Close the resource
?>