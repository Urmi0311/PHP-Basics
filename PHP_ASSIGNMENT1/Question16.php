
    <?php
    $n1 = 23456;
   $sum = 0;
   while($n1>0){
    $d = $n1%10;
    $sum = $sum +$d;
    $n1 = $n1/10;
   }
   echo "Sum of the digits :" .$sum;
