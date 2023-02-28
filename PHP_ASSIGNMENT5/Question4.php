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

$str = "$12,334.00A";
echo "Sample String : " . $str . "<br>";
echo "Output : " . preg_replace("/[^0-9,.]/", "", $str) . "\n";



?>
</body>
</html>