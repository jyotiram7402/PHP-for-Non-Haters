<?php

/*
===========================
Create a Boolean Variable in PHP
===========================

Boolean variables can hold only two values: true or false.
Use var_dump() to display the type and value.
*/

/*
===========================
1. Declaring Boolean Variables
===========================
*/

$isLoggedIn = true;
$isAdmin = false;

/*
===========================
2. Using var_dump() to Check Type and Value
===========================
*/

var_dump($isLoggedIn); // Output: bool(true)
var_dump($isAdmin);    // Output: bool(false)

/*
===========================
3. Boolean in Conditions
===========================
*/

if ($isLoggedIn) {
    echo "User is logged in.\n";
} else {
    echo "User is not logged in.\n";
}

if ($isAdmin) {
    echo "User is an admin.\n";
} else {
    echo "User is not an admin.\n";
}
