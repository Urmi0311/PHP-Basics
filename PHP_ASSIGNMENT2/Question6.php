<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task6</title>
</head>
<body>
<?php
    $arr = array("bmw","honda","dastun","maruti","volkswagen");
    $len_array = array_map('strlen', $arr);

    echo "The shortest array length is " . min($len_array) . ". <br> The longest array length is " . max($len_array).'.';
?>
</body>
</html>