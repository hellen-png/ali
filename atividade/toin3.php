<?php
$num1 = 12;
$num2 = 15;
$num3 = 10;
if ($num1 > $num2 && $num2 > $num3)
    echo "$num1,$num2,$num3";
else if ($num1 > $num3 and $num3 > $num2)
    echo "$num1,$num3,$num2";
else if ($num2 > $num1 && $num1 > $num3)
    echo "$num2,$num1,$num3";
else if ($num2 > $num3 && $num3 > $num1)
    echo "$num2,$num3,$num1";
else if ($num3 > $num1 && $num1 > $num2)
    echo "$num3,$num1,$num2";
else
    echo "$num3,$num2,$num1";



?>