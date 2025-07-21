<?php
$title="my blog";
$numPosts=1;
$hasPosts=$numPosts>0;
$numPostDisplay="\"$numPosts\"posts";
 switch($numPosts)
 {
    case 0:
    $message="There are no Post";
    break;
    case 1:
    $message="There are only one post";
    break;

    case 2:
    $message="There are only 2 post";
    break;

    default:
    $message="There are many posts";
    break;
 
 }
?>
<h1><?=$title ?></h1>
<h2><?=$message ?></h2>

