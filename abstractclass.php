<?php
abstract class ParentClass
{
    abstract function calculate($a,$b);
}
class ChildClass
{
    function calulate($a,$b)
    {
        return $a+$b;
    }
}
$obj=new ChildClass();
echo $obj->calulate(10,20);
?>