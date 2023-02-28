<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task11</title>
</head>

<body>
    <?php
    $sub_string = 'urmi';
    $str = 'urmikothari03';
    if (substr($str, 0, strlen($sub_string)) == $sub_string) {
        $str = substr($str, strlen($sub_string));
    }
    echo $str . "\n";
    ?>
</body>

</html>