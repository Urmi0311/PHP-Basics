
    <?php
    $original_string = 'The dog is table';
    $string_to_insert = 'under';
    $insert_pos = 11;
    $new_string = substr_replace($original_string, $string_to_insert . ' ', $insert_pos, 0);
    echo $new_string . "\n";
