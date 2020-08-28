<?php
//class Name
class Human{
    public $name;
    public $age;
    function __construct($personName,$personAge){
        echo "New Human Object is Created\n";
        $this->name =$personName;
        $this->age =$personAge;

    }

    function sayHi(){
        echo "Mahbub\n";
        $this->sayName();
    }
    function sayName(){
        echo "My Name is {$this->name}, I am {$this->age } years old\n";

    }
}

//Constructor
$h1= new Human("Runu",24);
$h1->sayHi();