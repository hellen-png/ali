<?php
$kwh = 350; 
$valor = 0;
if ($kwh <= 100) {
    $valor = $kwh * 0.50;
} elseif ($kwh <= 200) {
    $valor = (100 * 0.50) + (($kwh - 100) * 0.75);
} elseif ($kwh <= 300) {
    $valor = (100 * 0.50) + (100 * 0.75) + (($kwh - 200) * 1.20);
} else {
    $valor = (100 * 0.50) + (100 * 0.75) + (100 * 1.20) + (($kwh - 300) * 1.50);
}
echo "O valor da conta de luz é: R$ $valor\nKWh consumidos: $kwh";

?>