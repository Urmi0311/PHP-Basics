
<?php
$my_string = 'I take a walk with my dog in the evening. ';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 6))."\n";
