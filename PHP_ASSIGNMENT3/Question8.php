<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task8</title>
</head>

<body>
    <?php
    $total = 0;
    $number = 0;

    while ($number <= 10) {
        if ($number % 2 == 0) {
            $total = $total + $number;
        }
        $number++;
    }

    echo $total;

    ?>
</body>

</html>