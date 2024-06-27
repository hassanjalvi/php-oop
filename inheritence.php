<?php
class Employee
{
    public $name,$age,$sallary;
    function __construct($name,$age,$sallary)
    {
        $this->name=$name;
        $this->age =$age;
        $this->sallary=$sallary;
    }
   function info()
   {
    echo "<h3>Employee</h3>"."<br>";
    echo "Employee name:". $this->name ."<br>";
    echo "Employee age:". $this->age ."<br>";
    echo "Employee salary:". $this->sallary ."<br>";
   }
}
class Manager extends Employee
{
    function info()
    {
     echo "<h3>Manager</h3>"."<br>";
     echo "Employee name:". $this->name ."<br>";
     echo "Employee age:". $this->age ."<br>";
     echo "Employee salary:". $this->sallary ."<br>";
    }
}
$emp=new Employee('Yasir','20','30');
$manager=new Manager('Hassan','20','50');
$emp->info();
$manager->info();
?>