<?php
// Polymorphism example to calculate the area of different shapes
class Circle
{
    public $r;
    public $pi;

    function __construct($r, $pi)
    {
        $this->r = $r;
        $this->pi = $pi;
    }

    function calculateArea()
    {
        return $this->pi * pow($this->r, 2);
    }
}

class Square
{
    public $s;

    function __construct($s)
    {
        $this->s = $s;
    }

    function calculateArea()
    {
        return pow($this->s, 2);
    }
}

$objCircle = new Circle(10, pi());
echo 'Area of circle: ';
echo $objCircle->calculateArea();
echo "<br>";

$objSquare = new Square(10);
echo 'Area of square: ';
echo $objSquare->calculateArea();
echo "<br>";
?>
