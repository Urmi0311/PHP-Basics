<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task10</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 20;
    $third = $a;
    $a = $b;
    $b = $third;

    echo "After Swapping <br><br>";
    echo "a = $a b = $b";

    ?>
</body>
</html>