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
    function array_union($x, $y)
    {
        $aunion = array_merge(
            array_intersect($x, $y),
            array_diff($x, $y),
            array_diff($y, $x)
        );
        return $aunion;
    }
    $a = array(1, 2, 3, 4);
    $b = array(2, 3, 4, 5, 6);
    print_r(array_union($a, $b));
    ?>
</body>

</html>