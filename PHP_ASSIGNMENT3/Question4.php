<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task4</title>
</head>

<body>
    <?php
    $text = "techstudy";
    $searchchar = "t";
    $count = "0";
    for ($x = "0"; $x < strlen($text); $x++) {
        if (substr($text, $x, 1) == $searchchar) {
            $count = $count + 1;
        }
    }
    echo $count;
    ?>
</body>

</html>