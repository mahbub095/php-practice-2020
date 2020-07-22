<?php  
 $factorial = 1;  
// for ($i=1; $i<=3; $i++)   
// {  
//   $factorial = $factorial * $i;  
// }  
// echo "Factorial of $i, is $factorial";  

$n=4;
for($i=$n , $factorial =1 ; $i>=1 ;$i--){
      $factorial = $factorial * $i;  
}
printf("Factorial of %d is %d", $n, $factorial);

 

  

