<?php
$a= array(1,2,3);
$b= array(4,5,6,7);

// $c= array_unshift($a,$b);
print_r(array_merge_recursive($a, $b));
print"<br \>";

$values= array("first" => 2, "last" => 20);
print_r($values);
print"<br \>";
print_r(array_flip($values));
?>
