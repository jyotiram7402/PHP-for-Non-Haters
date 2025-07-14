<?php

/*
===========================
Create a Constant in PHP
===========================

Constants are used to store values that do not change during the execution of the script.
They are defined using the define() function or the const keyword.
*/

/*
===========================
1. Using define()
===========================


*/
define("SITE_NAME", "MyAwesomeSite");
echo "Site Name: " . SITE_NAME . "\n";

/*
===========================
2. Using const (only at global scope or inside classes)
===========================
*/

const VERSION = "1.0.0";
echo "Version: " . VERSION . "\n";

/*
===========================
3. Notes
===========================
- Constants do not start with a dollar sign ($)
- They are automatically global across the script
- Once defined, constants cannot be changed or undefined
*/
