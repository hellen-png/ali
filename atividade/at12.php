<?php
$peso =70;
$altura = 1.90
;
$imc = $peso / ($altura * $altura);
echo $imc;
if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Acima do peso";
} elseif ($imc >= 30 && $imc <= 40) {
    echo "Obeso";
} else {
    echo "Obesidade grave";
}

?>