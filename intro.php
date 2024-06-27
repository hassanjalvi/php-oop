<?php
class Calculation
{
//class consits two things
#1)Properties
#2)Mthods
    public $a,$b,$c;//properties
    function sum()//method 1
    {
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    function subtract ()//method 2
    {
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}
  //object used to call class
  $sum=new Calculation();
  $sum->a=20;
  $sum->b=30;

  $subtract=new Calculation();
  $subtract->a=30;
  $subtract->b=20;
  echo "The sum of two numbers: ";
  echo $sum->sum();
  echo "\n";
  echo "\n";
  echo "The subtraction of two numbers: ";
  echo $subtract->subtract();
?>