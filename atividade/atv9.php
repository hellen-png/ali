<?php
 $peg1= "sim";
 $peg2= "sim";
 $peg3= "nao";
 $peg4= "nao";
 $peg5= "sim";
 $res= 0;
 if ($peg1=="sim" ){
    $res = $res+1;
     }
 if ($peg2=="sim" ){
    $res = $res+1;
     }
 if($peg3=="sim" ){
    $res = $res+1;
       }
if ($peg4=="sim" ){
    $res = $res+1;
    }
if ($peg5=="sim" ){
    $res = $res+1;
 }
 if ($res==0){
    echo "inocente";
 }elseif ($res==1){
    echo "inocente";
 }elseif ($res==2){
    echo "suspeito";
 }elseif ($res==3){
    echo "cumplice";
 }elseif ($res==4){
    echo "cumplice";
 }else{
    echo "assassino";
 }



?>