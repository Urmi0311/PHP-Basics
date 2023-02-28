<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task13</title>
</head>
<body>
    <?php
    
    function remove_duplicates($list1){
       $num_unique = array_values(array_unique($list1));
       return $num_unique;
    }

    $num = array(1,2,2,4,5,6);
    print_r(remove_duplicates($num));

    ?>
</body>
</html>