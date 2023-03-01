
    <?php
    
   function password_generate($charcs)
   {
    $data1 = "35667hjbbnjcvnjnSDJMGNBKFDFJIGJVIBGJI";
    return substr(str_shuffle($data1),0,$charcs);

   }
   echo password_generate(5)."\n";
