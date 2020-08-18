<?php
// $filename='E:\php 2020\1\File\Data\M.txt';
// $fp = fopen($filename ,"r+");
// $line =fgets($fp);
// echo $line;
// fwrite($fp,"QA Ninja");
// $line =fgets($fp);
// echo $line;

//for write

$filename='E:\php 2020\1\File\Data\M.txt';
$fp = fopen($filename ,"w+");
$line =fgets($fp);
echo $line;
fwrite($fp,"QA Ninja");