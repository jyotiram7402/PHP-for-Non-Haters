<?php
$title="my blog";
$numPosts=1;
$hasPosts=$numPosts>0;
$numPostDisplay="\"$numPosts\"posts";

$message=match($numPosts)
{
    0=>"There is no post",
    1=>"There is only one post",
    2,3,4,5,6=>"There are many post",
    default=>"There are just a defult post"
}

?>
<H1><?= $title?></H1>
<h2><?=$message?></h2>