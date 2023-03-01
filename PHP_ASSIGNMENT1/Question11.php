
    <?php
    $num=153;  
    $total=0;  
    $a=$num;  
    while($a!=0)  
    {  
    $b=$a%10;  
    $total=$total+$b*$b*$b;  
    $a=$a/10;  
    }  
    if($num==$total)  
    {  
    echo "Yes it is an Armstrong number";  
    }  
    else  
    {  
    echo "No it is not an armstrong number";  
    }  
 