<?php
class Someclass{
    static $instance;
    private $name;
    function __construct($name=null){
        $this->name = $name;
        echo "New Instance Created\n";
    }
    static function getInstance($name=null){
        if(!self::$instance){
            self::$instance = new SomeClass($name);
            
        }
        else{
            echo "Old Instance Supplied\n";
        }
        return self::$instance;

    }
    function sayName(){
        echo $this->name."\n";
    }

}

$sc1 = Someclass::getInstance("Mahbub");
$sc2 = Someclass::getInstance("Runu");
$sc3 = Someclass::getInstance("Love");

$sc1->sayName();
$sc2->sayName();
$sc3->sayName();
