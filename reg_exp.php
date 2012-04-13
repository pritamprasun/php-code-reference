<?php
function autolink($string)
{
$content_array = explode(" ", $string);
$output = '';

foreach($content_array as $content)
{
//starts with http://
if(substr($content, 0, 7) == "http://")
$content = '<a href="' . $content . '">' . $content . '</a>';

//starts with www.
if(substr($content, 0, 4) == "www.")
$content = '<a href="http://' . $content . '">' . $content . '</a>';

$output .= " " . $content;
}

$output = trim($output);
return $output;
}

echo autolink("I m live at http://pritam.me. please ping me there");
?>
