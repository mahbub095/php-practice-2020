<?php
//class Name
class Human{
    public $name;
    function sayHi(){
        //echo "Mahbub\n";
        $this->sayName();
    }
    function sayName(){
        echo "My Name is {$this->name}\n";

    }
}
class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}
class Dog{
    function sayHi(){
       echo "woof";
    }
}

//Constructor
$h1= new Human();
$h1->name ="Runu\n";  //set
$c1= new Cat();
$d1= new Dog();

//call function
$h1 ->sayHi();
//echo $h1->name;   //get
$c1 ->sayHi();
