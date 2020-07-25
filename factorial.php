<?php  
 $factorial = 1;  
// for ($i=1; $i<=3; $i++)   
// {  
//   $factorial = $factorial * $i;  
// }  
// echo "Factorial of $i, is $factorial";  


// for($i=$n , $factorial =1 ; $i>=1 ;$i--){
//       $factorial = $factorial * $i;  
// }
//printf("Factorial of %d is %d", $n, $factorial);

// for($n=10;$n>=1;$n--){
//       for($i=$n , $factorial =1 ; $i>=1 ;$i--){
//                    $factorial = $factorial * $i;  
//              }
//       echo "Factorial of {$n} {$factorial} \n";
//
// }
for($n = 10; $n>=1; $n--){
      for( $i = $n, $fac=1; $i>1; $i--){
          $fac = $i * $fac;
          echo "$i*";
      }
      echo  "1=$fac <br>";
  }
 
// for($i=1;$i<=5;$i++){  
//       for($j=5-$i;$j>1;$j--){
//           //   for
//             $factorial = $factorial* $j;   
//       echo "$j ";  
//       }  
//       echo "\n ";  
//       }  
//      
 ?>  
  

