<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task7</title>
</head>

<body>
    <?php
    $a = range(21, 30);
    shuffle($a);
    for ($x = 0; $x < 20; $x++) {
        echo $a[$x] . ' ';
    }
    echo "\n"
        ?>

</body>

</html>