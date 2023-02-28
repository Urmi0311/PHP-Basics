<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task14</title>
</head>
<body>
<?php
$primes = array();
$is_prime_no = false;
for ($i = 2; $i<200; $i++) {
     $is_prime_no = true; 
        for ($j = 2; $j<=($i/2); $j++) {
                if ($i%$j==0) {
                          $is_prime_no = false;
                                  break;
                                }
                   }
        if ($is_prime_no) {
               array_push($primes,$i);
                  }
        if (count($primes)==200) {
               break;
                  }
}
echo array_sum($primes)."\n";
?>
</body>
</html>