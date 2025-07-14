<?php

$title=(integer) 'my blog';
$numPosts=(string) 10;


/*
The casts allowed are:
(int), (integer) - cast to int
(bool), (boolean) - cast to bool
(float), (double), (real) - cast to float
(string) - cast to string
(array) - cast to array
(object) - cast to object
(unset) - cast to NULL
*/
      
?>

<h1><?= $title ?></h1>
<h1><?= gettype($title )?></h1>
<h1><?= $numPosts ?></h1>
<h1><?= gettype($numPosts) ?></h1>