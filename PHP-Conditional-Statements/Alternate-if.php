<?php
$title="my blog";
$numPosts=90;
$hasPosts=$numPosts>0;
$numPostDisplay="\"$numPosts\"posts";

?>
<h1><?=$title ?></h1>
<h2><?=$numPostDisplay?></h2>

<?php if($hasPosts):?>
    Post exist
<?php else:?>
    There are no posts.
<?php endif?>    