<?php
//print uncommon value from 1st array 
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8 ,'blue' => 1);

var_dump(array_diff_key($array1, $array2));
?>