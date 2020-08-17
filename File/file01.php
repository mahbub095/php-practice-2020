<?php
$filename='E:\php 2020\1\File\Data\M.txt';
$fp=fopen($filename,'r');
//$line= fgets($fp,3);
while($line = fgets($fp)){
    echo $line;
}
fclose($fp);

