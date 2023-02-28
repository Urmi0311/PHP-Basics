<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasl15
    </title>
</head>
<body>
<?php
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
     if ($j == 1) {
       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     }
  }
  echo "<br>";
}
?>
</body>
</html>