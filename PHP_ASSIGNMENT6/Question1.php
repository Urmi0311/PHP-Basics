
    <?php
    $json = '{"name":"urmi",
        "company" : "sigma"}';

    $obj = json_decode($json);
    
    echo $obj->{'name'};
    echo "<br>";
    echo $obj->{'company'};
    



