<?php
/*
Template Name: Redirect
*/
if (have_posts()) {
the_post();
$pattern = '@[a-zA-z]+://[^\s]*@';
preg_match($pattern, get_the_excerpt(), $matches);
if ($matches[0]) header('Location: '.$matches[0]);
else echo '施工中...';
}
?>