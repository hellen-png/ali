<?php
$horasdiarias = 60; 
$diastrabalhados = 4;
$descanco = 0;
$horaextra = 26;

if ($horaextra >= 1 ){
    for ($i=1; $i <= $horaextra; $i++){
        $descanco += 1.3;
    }
    echo $descanco;
} elseif ($horaextra == 0){
    $descanco = 0;
    echo $descanco;
}   

?>