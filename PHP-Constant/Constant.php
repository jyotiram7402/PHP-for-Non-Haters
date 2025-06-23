<?php

/*
===========================
PHP Constant Variables
===========================

Constants are like variables, but once defined, they cannot be changed or undefined. They are useful for storing fixed values.
*/

/*
===========================
1. Defining Constants
===========================

Use the define() function:
define("SITE_NAME", "MyWebsite");

Or use the const keyword (only inside classes or at the top-level of code):
const SITE_VERSION = "1.0.0";
*/

/*
===========================
2. Naming Rules for Constants
===========================
- Constant names are usually written in uppercase by convention.
- They do not start with a dollar sign ($).
- They are globally accessible.
*/

/*
===========================
3. Checking If Constant Is Defined
===========================
Use defined("CONSTANT_NAME") to check if a constant is already defined.
*/

/*
===========================
4. Magic Constants (Predefined by PHP)
===========================
These start and end with double underscores __
Some useful ones include:
- __LINE__       : Current line number in the file
- __FILE__       : Full path and filename of the file
- __DIR__        : Directory of the file
- __FUNCTION__   : Name of the function
- __CLASS__      : Name of the class
- __METHOD__     : Class method name
*/

/*
===========================
Example: Using Constants in PHP
===========================
*/

define("APP_NAME", "ChatBuddy");
define("APP_VERSION", "2.5");

// Output constant values
echo "Welcome to " . APP_NAME . "!\n";
echo "Version: " . APP_VERSION . "\n";

// Using a magic constant
echo "This line of code is on line: " . __LINE__ . "\n";
echo "This file is located at: " . __FILE__ . "\n";
