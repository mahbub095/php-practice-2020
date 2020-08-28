<?php
abstract class Shape{
 abstract   function getArea();
 abstract   function getPerimeter();
}
class Rectangle extends Shape{
    private $base, $height;

    function __construct($base,$height){
        $this->base = $base;
        $this->base = $height;

    }
    public function setBase($base){
        $this->base = $base;
    }
    public function setheight($height){
        $this->height = $height;
    }
    //override method
      function getArea(){
        return $this->base*$this->$height;

    }
      function getPerimeter(){
        //return $this->base*$this->$height;
      

    }
}
class Triangle extends Shape{
    function getArea(){
        return $this->base*$this->$height;

    }
    function getPerimeter(){
         

    }

}
$tringel  = new Rectangle(10,10);
echo $tringel ->getArea();
$shape = new Shape();
