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
    function min_values_not_zero(array $values)
    {
        return min(array_diff(array_map('intval', $values), array(0)));
    }
    print_r(min_values_not_zero(array(-500, 0, 300, -3, 5, 10)) . "\n");
    ?>
</body>

</html>