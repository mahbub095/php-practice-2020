<?php
$name ="Mahbub";
$string01 ="my name is $name\n";
echo $string01;

$heredoc=<<<'EOD'
Data 1
line {$name}
Text
EOD;
echo $heredoc;