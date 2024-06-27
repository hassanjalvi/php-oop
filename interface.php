<?php
interface Sum
{
    function sum($a,$b);
}
interface Subtract
{
    function subtract($c,$d);
}
class ChildClass implements Sum,Subtract
{
    function sum($a,$b)
    {
        return $a+$b;
    }
    function subtract($c,$d)
    {
        return $c-$d;
    }
}
$obj=new ChildClass();
echo $obj->sum(10,20);
echo "<br>";
echo $obj->subtract(20,10);
?>