
    <?php

    $value = "Urmi Kothari";
    $value = preg_replace('/(\b[a-z])/i', '<span style="color:blue">\1</span>', $value);
     
    echo $value;

