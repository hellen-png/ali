<?php
$n1=35;
$n2=76;
$n3=9;
$n4=10;
echo "o maior e o menor número entre $n1,$n2,$n3 e $n4 é: ";
if ($n1>$n2 and $n1>$n3 and $n1>$n4) {
    echo "Maior: $n1";
}elseif ($n2>$n1 and $n2>$n3 and $n2>$n4) {
    echo "Maior: $n2";
}elseif ($n3>$n1 and $n3>$n2 and $n3>$n4){
    echo "maior: $n3";
}elseif ($n4>$n1 and $n4>$n2 and $n4>$n3){
    echo "maior: $n4";
}
 if ($n1<$n2 and $n1<$n4 and $n1<$n4){
    echo " e o menor: $n1";
 }elseif ($n2<$n1 and $n2<$n3 and $n2<$n4){
    echo " e o menor: $n2";
 }elseif ($n3<$n1 and $n3<$n2 and $n3<$n4){
    echo " e o menor: $n3";
 }elseif ($n4<$n1 and $n4<$n2 and $n4<$n3 ){
    echo " e o menor:$n4";
 }



?>