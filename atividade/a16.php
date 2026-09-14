<?php
$forca = 46;
$agilidade = 35;
$inteligencia = 67;
if ($forca > $agilidade and $forca > $inteligencia) {
    echo "guerreiro";
}elseif ($agilidade > $forca and $agilidade > $inteligencia) {
    echo "arqueiro";
} elseif ($inteligencia > $forca and $inteligencia > $agilidade) {
    echo "mago";
} else {
    echo "personagem equilibrado";
}




?>