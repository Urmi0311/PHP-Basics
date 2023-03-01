
    <?php
     $email = "urmikothari03@gmail.com";

     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
     echo("$email is a valid email address");
    }
     else{
        echo("$email is not a valid email address");
     }
