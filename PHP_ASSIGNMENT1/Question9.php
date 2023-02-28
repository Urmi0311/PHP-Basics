<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task9</title>
</head>
<body>
    <?php
    function test($a){
        $b = $a > 30
        ? "greater than 30"
        : ($a > 20
        ? "greater than 20"
        : ($a >10
        ? "greater than 10"
        // : ($a >5
        // ? "greater than 5"
        : "Input a number atleast greater than 5!"));
        echo $a. ":" .$b. "\n";

    }
    test(34);
    test(14);
    test(26);
    test(2);
    ?>
</body>
</html>