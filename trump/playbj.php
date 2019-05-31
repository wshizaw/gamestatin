<?php
    $sum=0;
    $cards = range(0,51);
    shuffle($cards);
    for($i=0;$i<2;$i++){
        require "trunpcard.php";
        $tefuda[] = "$gara  \n  $suuti";
        $suutiS[]= $suuti; 
        if($suutiS[$i] >= 10){
            $sum += 10;
        }else if($suutiS[$i]>=2){
            $sum +=$suutiS[$i];
            // echo 't';
        }else{
            if($sum <= 10){
                $sum += 11;
            }else{
                $sum += 1;
            }
            // echo 'f';
        }
    }
    $_SESSION['cards'] = $cards;
    $_SESSION['tefuda'] =$tefuda;
    $_SESSION['sum'] =$sum;
   require_once "gameviewBJ.php"; 