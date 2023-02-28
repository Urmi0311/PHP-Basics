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
    $num = 5;
    for ($i = 1; $i <= 10; $i++) {
        $product = $i * $num;
        echo "$num * $i = $product";
        echo '<br>';
    }
    ?>
</body>

</html>