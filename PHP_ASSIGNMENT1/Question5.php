<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $value = "Urmi Kothari";
    $value = preg_replace('/(\b[a-z])/i', '<span style="color:blue">\1</span>', $value);
     
    echo $value;

    ?>
</body>
</html>