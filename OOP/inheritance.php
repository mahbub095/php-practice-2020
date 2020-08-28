<?php
class Animal{
    public function eat(){
      echo "I am eating";
    }
    public function run(){
        echo "I am running";
    }
    public function sleep(){
        echo "I am sleeping";
    }
    public function greet(){}
}
class Human extends Animal{
    public function greet(){
        echo "Hi";

    }
}
class Cat extends Animal{
    public function greet(){
        echo "Meow";
    }
     

}

$rasel = new Human();
echo $rasel->greet();

$cat1 = new Cat();
$cat1->greet();