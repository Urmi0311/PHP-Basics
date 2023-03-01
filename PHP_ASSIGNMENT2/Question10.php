
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

