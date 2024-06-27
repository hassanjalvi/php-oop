<?php
class Encapuslation
{
    private $Id;
    //setter method
    public function setId($Id)
    {
        $this->Id=$Id;
    }
    // getter method

    public function getID()
    {
        return $this->Id;
    }
}
$obj=new Encapuslation();
$obj->setId(10);
echo $obj->getID();
?>