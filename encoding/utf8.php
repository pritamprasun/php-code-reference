<?php
$string = "hello World ^%$%^!@*&&*(&";
$encode = utf8_encode($string);
echo $encode;
echo utf8_decode($encode);
?>
