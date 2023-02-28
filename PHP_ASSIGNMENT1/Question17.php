<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function multiply_two_lists($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}
echo multiply_two_lists(("11 15 13"), ("5 4 6"))."\n";
?>
</body>
</html>