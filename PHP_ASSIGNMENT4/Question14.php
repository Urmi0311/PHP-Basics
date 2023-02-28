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
    $str1 = "12,34,66";
    $x = str_replace(',', '', $str1);
    if (is_numeric($x)) {
        echo $x . "\n";
    }
    ?>
</body>

</html>