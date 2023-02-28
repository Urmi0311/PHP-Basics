<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task9</title>
</head>
<body>
    <?php
    
   function password_generate($charcs)
   {
    $data1 = "35667hjbbnjcvnjnSDJMGNBKFDFJIGJVIBGJI";
    return substr(str_shuffle($data1),0,$charcs);

   }
   echo password_generate(5)."\n";
    ?>

</body>
</html>