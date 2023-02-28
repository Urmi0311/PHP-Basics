<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
</head>

<body>
   <?php
  
  function reverse($str){
      $result=" ";
      echo "string before reversing : $str"."<br>";
      for($i=strlen($str)-1;$i>=0;$i--){
          $result.=$str[$i];
      }
      echo "string after reversing : $result";
  }
  $str="urmi";
  reverse($str);
  ?>

</body>

</html>