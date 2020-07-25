<?php
function isEven($n){
    if ($n%2==0){
        return true;

    }return false;
}
// $x=13;
// if(isEven($x)){
//     echo "{$x} is an even Number";
// }
//     else{
//         echo "{$x} is an odd Number";
//     }

function factorial( int $n){
    $result = 1;
    for($i=$n;$i>1;$i--){
        $result *=$i;

    }
    return $result;
}