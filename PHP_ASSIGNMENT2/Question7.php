
    <?php
    $a = range(21, 30);
    shuffle($a);
    for ($x = 0; $x < 20; $x++) {
        echo $a[$x] . ' ';
    }
    echo "\n";
