<?php
function printN($i){
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    //again call
    printN($i);
}
//printN(0);

function printNumber($counter,$send){
    if($counter>$send){
        return;
    }
    echo $counter."\n";
    $counter++;
    printNumber($counter,$send);
}
printNumber(21,37);