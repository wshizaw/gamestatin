<?php
    $count =0;
    $cards = range(0,51);
    shuffle($cards);
        require "trunpcard.php";
        $tefuda = "$gara  \n  $suuti";
        $count++;


    $_SESSION['cards'] = $cards;
    $_SESSION['tefuda'] =$tefuda;
    $_SESSION['suuti'] =$suuti;
    $_SESSION['count'] =$count;
   require_once "gameviewH&L.php"; 