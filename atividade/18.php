<?php
for ($num = 1; $num <= 100;$num++){
    if ($num % 3 == 0){
        echo "EEIIIIIIIIII\";
    } elseif ($num % 5 == 0){
        echo "ACORDAAAAAA\n";
    } elseif ($num % 3 == 0 && $num % 5 == 0){
        echo "EEIIIIIIIIII  ACORDAAAAAA";
    }
}

?>