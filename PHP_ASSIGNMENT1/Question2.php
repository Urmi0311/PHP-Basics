<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>
    <form method = 'POST'>
        <h2>Your Name </h2>
        <input type = "text" name = "fname">
        <input type="submit" value="Submit Name">
    </form>

    <?php
    $name = $_POST['fname'];
    echo "$name";
    
    ?>


</body>
</html>