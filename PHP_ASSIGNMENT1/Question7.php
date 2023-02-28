<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task7</title>
</head>
<body>
    <?php
     $email = "urmikothari03@gmail.com";

     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
     echo("$email is a valid email address");
    }
     else{
        echo("$email is not a valid email address");
     }


    ?>
</body>
</html>