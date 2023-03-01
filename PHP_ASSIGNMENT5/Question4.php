
<?php

$str = "$12,334.00A";
echo "Sample String : " . $str . "<br>";
echo "Output : " . preg_replace("/[^0-9,.]/", "", $str) . "\n";



