<?php
$string ="Hello World, How are you";
$parts = explode(" " ,$string);
print_r($parts);

echo PHP_EOL;
$original = join(" ", $parts);
echo $original;

$parts2 =str_split($string);
print_r($parts2);