<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task3</title>
</head>
<body>
<?php

function rev($str)
{
    $arr = array();
    $len = strlen($str);
    for ($i = $len; $i > 0; $i--) {
        $arr[$len - $i] = $str[$i - 1];
    }
    return implode("", $arr);
}

function palindrome($str){
    $reverse = rev($str);  
    if ($reverse == $str) {
    echo $str ." is Palindrome" ."<br>";
} else {
    echo $str ." is not Palindrome" ."<br>";
}
}

palindrome("abcba");
palindrome("urmi");
?>
</body>
</html>