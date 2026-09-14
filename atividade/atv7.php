<?php
$l1=7;
$l2=3;
$l3=5;
if ($l1==$l2 and $l2== $l3){
    echo "seu triangilo e equilatero";
}elseif ($l1 != $l2 and $l2 != $l3){
    echo "seu triangulo e escaleno";
}elseif ($l1 == $l2 and $l2 != $l3){
    echo "seu triangulo e isosceles";
}

?>