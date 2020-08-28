<?php
abstract class Ourclass{ // super 
    function sayHi(){
        echo "Hi ";
    }
    abstract function eat();
}

class MyClass extends OurClass{
    function eat(){

    }
}
$mc= new MyClass();
$mc->sayHi();
