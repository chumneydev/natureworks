<?php namespace ProcessWire;

// basic-page.php template file 
// See README.txt for more information

$headerImage = $page->images->first()->url;
// Primary content is the page's body copy
$content = "<img src=\"$headerImage\" />";
$content .= $page->body; 
