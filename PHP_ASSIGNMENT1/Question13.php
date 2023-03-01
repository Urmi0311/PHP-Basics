
    <?php
    
    function remove_duplicates($list1){
       $num_unique = array_values(array_unique($list1));
       return $num_unique;
    }

    $num = array(1,2,2,4,5,6);
    print_r(remove_duplicates($num));
