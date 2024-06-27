<?php
class Person
{
    public $name,$age;
    function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function show()
    {
        echo $this->name. "." .  $this->age;
    }
}
$p =new Person('Hassan Jalvi','21');
$p->show();
?>