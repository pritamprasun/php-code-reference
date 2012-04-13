<?php
class MyClass
{
    const constant = 'constant value';

    function showConstant() {
        echo  self::constant . "<br />";
    }
}

echo MyClass::constant . "<br />";

$classname = "MyClass";
echo $classname::constant . "<br \>"; // As of PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo $class::constant."<br />"; // As of PHP 5.3.0
?>
