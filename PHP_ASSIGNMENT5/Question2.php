<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>

<body>
    <?php
    function listsort($arr)
    {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            for ($j = 0; $j < count($arr) - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $ex = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $ex;
                }
            }
        }
        return $arr;

    }
    $arr = array(1, 2, 3, 5, 4, 6, 9, 8, 7, 0);
    echo "Without sort :- " . implode("  ", $arr) . "<br>";
    echo "After sort :- " . implode("  ", listsort($arr));
    ?>

</body>

</html>