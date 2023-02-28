<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task5</title>
</head>
<body>
    <?php
    
    $str1= 'Sigma Infosolutions'; 
    echo substr(chunk_split($str1, 3, ':'), 0, -1)."\n";
    ?>

</body>
</html>