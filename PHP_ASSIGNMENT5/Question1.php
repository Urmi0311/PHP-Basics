
   <?php
  
  function reverse($str){
      $result=" ";
      echo "string before reversing : $str"."<br>";
      for($i=strlen($str)-1;$i>=0;$i--){
          $result.=$str[$i];
      }
      echo "string after reversing : $result";
  }
  $str="urmi";
  reverse($str);