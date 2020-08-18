<?php
$filename='E:\php 2020\1\File\Data\RW.txt';
$students = array(
     array(
         'fname' =>'Mahbubur',
         'lname'=>'Rahman',
          'age'=>24,
          'class'=>12,
          'roll'=>144

     ),
     array(
        'fname' =>'Runu',
        'lname'=>'Shanta',
         'age'=>24,
         'class'=>12,
          'roll'=>144

    ),
    array(
        'fname' =>'Mahbubur',
        'lname'=>'Rahman',
         'age'=>24,
         'class'=>12,
         'roll'=>144

    ),
);

$fp=fopen($filename,"w");
foreach($students as $student){
    $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
    fwrite($fp,$data);
}
fclose($fp);