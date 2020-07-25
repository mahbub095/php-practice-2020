<?php
function isEven($n){
    if ($n%2==0){
        return true;

    }return false;
}
$x=13;
if(isEven($x)){
    echo "{$x} is an even Number";
}
    else{
        echo "{$x} is an odd Number";
    }
