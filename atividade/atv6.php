<?php
$nota1=5;
$nota2=8;
$media= ($nota1+$nota2)/2;
if ($media >=9){
    echo "Sua nota foi A,parabens vc foi aprovado";
}elseif ($media=9 and $media >=7.5){
    echo "sua nota foi B,parabens vc foi aprovado";
}elseif ($media=7.5 and $media>=6){
    echo "sua nota foi C,parabens vc foi aprovado";
}elseif ($media=6 and $media >=4){
    echo "sua nota foi D,infelizmente vc nao foi aprovado";
}elseif ($media=4 and $media >=0){
    echo "sua nota foi E,infelizmente vc nao foi aprovado";
}

?>