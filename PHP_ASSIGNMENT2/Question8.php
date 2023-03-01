
    <?php
    function min_values_not_zero(array $values)
    {
        return min(array_diff(array_map('intval', $values), array(0)));
    }
    print_r(min_values_not_zero(array(-500, 0, 300, -3, 5, 10)) . "\n");
