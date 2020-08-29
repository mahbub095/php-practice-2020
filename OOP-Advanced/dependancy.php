<?php

interface BaseStudent{
    function displayName();
}

class Student implements BaseStudent{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    function displayName(){
       echo "Hello From " .$this->name;
    }
}

class StudentManager{
    function introduceStudent($name){
        $st = new Student($name);
        $st->displayName();
         
    }
}
// class StudentManager{
//     function introduceStudent($student){
    
//         $st->displayName();
         
//     }
// }

$st = new StudentManager();
 
$st->introduceStudent("John Deo");