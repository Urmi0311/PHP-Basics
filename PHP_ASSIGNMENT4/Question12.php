<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task12</title>
</head>

<body>
    <?php
    $original_string = 'The dog is table';
    $string_to_insert = 'under';
    $insert_pos = 11;
    $new_string = substr_replace($original_string, $string_to_insert . ' ', $insert_pos, 0);
    echo $new_string . "\n";
    ?>
</body>

</html>