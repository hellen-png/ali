<?php
$velocidade = 100;
$cansaco = true;
$chuva = false;
if ($cansaco == true){
    $velocidade = 15;
}
if ($chuva == true){
    $velocidade = 12;
}
if ($velocidade >= 10 && $velocidade <= 20  ){
    echo "velocidade segurinha";
}else{
    echo "velocidade insegurinha";
}


?>          