<?php
function json_error_message($json_str)
{
$json[] = $json_str;
echo $json;
foreach ($json as $string)
{
echo 'Decoding: ' . $string."\n";
json_decode($string);

switch (json_last_error())
{
case 0:
echo ' - No errors'."\n";
break;
case 1:
echo ' - Maximum stack depth exceeded'."\n";
break;
case 2:
echo ' - Underflow or the modes mismatch'."\n";
break;
case 3:
echo ' - Unexpected control character found'."\n";
break;
case 4:
echo ' - Syntax error, malformed JSON'."\n";
break;
case 5:
echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."\n";
break;
default:
echo ' - Unknown error'."\n";
break;
}
}
}
json_error_message('{"color1": "Red Color"}');