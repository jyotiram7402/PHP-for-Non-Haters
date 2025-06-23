<?php

/*
===========================
PHP Comments
===========================

Comments are used to describe the code, leave notes, and make the script more readable. PHP supports 3 types of comments:
*/

/*
1. Single-line comment using double slashes:
// This is a single-line comment
*/

// Example:
// echo "Hello World!"; // This is a comment at the end of a line

/*
2. Single-line comment using hash:
# This is also a single-line comment
*/

# Example:
# echo "Hello PHP!";

/*
3. Multi-line comment using slash and asterisk:
/*
   This is a multi-line comment.
   You can write multiple lines here.
*/

/*
===========================
Best Practices for Comments
===========================

- Use comments to explain *why* something is done, not *what* is done (which should be obvious from code).
- Keep comments updated — outdated comments can mislead.
- Avoid excessive or obvious comments (e.g., // add 1 to x — when the code is just $x++).
*/

/*
===========================
Example: Demonstrating All Types of Comments
===========================
*/

// This is a single-line comment using slashes
# This is a single-line comment using hash

/*
This is a multi-line comment
explaining the next line of code:
*/
echo "Comments in PHP are easy to use!\n";

// echo "This won't be executed";
# echo "Neither will this";

/*
===========================
Executable Example to Show Comment Behavior
===========================
*/

$name = "Jyotiram"; // Assigning name to a variable
$language = "PHP"; # Programming language being used

/*
Printing the message using the variables above.
The following line will display a message in the browser.
*/
echo "Hello, $name! Welcome to $language learning.\n";

?>