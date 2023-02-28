<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task16</title>
</head>
<body>
    <?php
    $n1 = 23456;
   $sum = 0;
   while($n1>0){
    $d = $n1%10;
    $sum = $sum +$d;
    $n1 = $n1/10;
   }
   echo "Sum of the digits :" .$sum
    ?>

</body>
</html>