<?php

    $card = array_shift($cards);

    if($card / 13 <= 1){
        $gara ="♡";
        $suuti = $card % 13 + 1; 
    }else if($card / 13 <= 2){
        $gara ="♢";
        $suuti = $card % 13 +1; 
    }else if($card / 13 <= 3){
        $gara ="♧";
        $suuti = $card % 13 +1; 
    }else if($card / 13 <= 4){
        $gara ="♤";
        $suuti = $card % 13 +1; 
    }else {
        $gara ="🃏";
        $suuti = "joker";
    }