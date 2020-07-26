<?php
// $students = [

//     '12'=>'Mahbub',
//      '13'=>'AAAA',
//      '14'=>'ZZZZ'

// ];
//echo $students[12];
$foods=[
    'vegetables'=>'carrot,capsicam,brocolli,brinjal',
    'fruits'=>'orange,banana,apple',
    'drinks'=>'water,milk'
];

foreach ($foods as $key=>$value){
    echo $key. "=".$value ."\n";
}
 