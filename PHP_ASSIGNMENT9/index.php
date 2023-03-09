<!DOCTYPE html>
<html>
<head>
  <title>Upload PHP File</title>
  <style>
      
      
    body{
        
        background: linear-gradient(90deg, rgb(227, 226, 236) 0%, rgb(207, 207, 221) 35%, rgba(240, 217, 247, 0.651) 100%);
    }
    .form{
        margin: 8% 18% 0% 16%;
        text-align: center;
        font-size: larger;
        font-family:'Palatino';
        background-color: aliceblue;
        color: rgb(25, 12, 66);
        

    }
    h1{
      margin-top:30px;
    }
    .form input{
        font-size: x-large;
        margin-top: 5%;
        margin-bottom:5%;
        text-align: center;
    }
    .form fieldset{
        border-radius: 30px;
    }

      </style>
</head>
<body>
<center>
        <h1>READ CSV FILE USING PHP</H1>
   <div class=form>
  <form action="Question1.php" method="POST" enctype="multipart/form-data">
    <input type="file" id="php-file" name="php-file" accept=".csv" />
    <input type="submit" name="submit" value="Upload" />

  </form>
</div>
</center>

</body>