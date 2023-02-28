<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tak10</title>
</head>

<body>
    <?php

    $char = 'l';
    $nextchar = ++$char;

    if (strlen($nextchar) > 1) {
        $nextchar = $nextchar[0];
    }
    echo $nextchar . "<br />";

    ?>
</body>

</html>