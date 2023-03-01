
    <?php
    $total = 0;
    $number = 0;

    while ($number <= 10) {
        if ($number % 2 == 1) {
            $total = $total + $number;
        }
        $number++;
    }

    echo $total;
