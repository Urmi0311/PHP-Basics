<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task17</title>
</head>
<body>
<?php
$my_string = 'I take a walk with my dog in the evening. ';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 6))."\n";
?>
</body>
</html>