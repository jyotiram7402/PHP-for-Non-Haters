<?php
$title="my blog";
$numPosts=10;
$hasPosts=$numPosts>0;
$numPostDisplay="\"$numPosts\"posts";

?>
<h1><?=$title ?></h1>
<h2><?=$numPostDisplay?></h2>

<?php echo $hasPosts? 'Post exist':'There is no posts'?>