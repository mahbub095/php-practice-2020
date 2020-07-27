<?php
$foods=[
    'vegetables'=>explode(',','carrot,capsicam,brocolli,brinjal'),
    'fruits'=>explode(',','orange,banana,apple'),
    'drinks'=>explode(',','water,milk')
];

//print_r($foods);
array_push($foods['drinks'],'orange juice');
//print_r($foods);
echo $foods['vegetables'][3];