<?php
$students= array(
    "rahim",
    "karim",
    122,
    "monir"

);
//var_dump ($students);
//echo count($students);

for($i=0;$i<count($students);$i++){
    echo $students[$i]."\n";
}