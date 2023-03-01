
    <?php
    $str1 = "12,34,66";
    $x = str_replace(',', '', $str1);
    if (is_numeric($x)) {
        echo $x . "\n";
    }
