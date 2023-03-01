
<?php
    $arr = array("bmw","honda","dastun","maruti","volkswagen");
    $len_array = array_map('strlen', $arr);

    echo "The shortest array length is " . min($len_array) . ". <br> The longest array length is " . max($len_array).'.';
