<?php
class my_class
{
var $my_var;
function my_class ($var)
{
global $obj_instance;
$obj_instance = $this;
$this->my_var = $var;
}
}
$obj = new my_class (“something”);
echo $obj->my_var."<br \>";
echo $obj_instance->my_var;
?>

