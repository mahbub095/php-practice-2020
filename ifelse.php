<?php
$n=12;
if( $n %2 == 0){
    echo"$n is evan";
}
else{
    echo "$n is odd"; 
}

$alam = 100;
$rahim =1100;

if($alam >=$rahim){
    echo "Alam has same amount money as Rahim";

}
elseif($alam>$rahim){
    echo"Alam has more money than Rahim";

}
elseif($alam<$rahim){
    echo"Alam has less money than Rahim";
}



$age =13;
if($age>=13 && $age<=19){
    echo"This person is a teenager";

}else{
    echo"This person is not teenager";
}