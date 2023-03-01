
    <?php
    $text = "techstudy";
    $searchchar = "t";
    $count = "0";
    for ($x = "0"; $x < strlen($text); $x++) {
        if (substr($text, $x, 1) == $searchchar) {
            $count = $count + 1;
        }
    }
    echo $count;
