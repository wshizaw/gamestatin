<?php
$kazu=0;
if(isset($_POST['playt'])){
    $game =$_POST['playt'];
        $cards = $_SESSION['cards'];
        require "trunpcard.php";

            $tefuda= "$gara  \n  $suuti";
            $_SESSION['count']++;
            $suutiS = $suuti;
            $suutiM = $_SESSION['suuti'];
        switch($suutiM){
                case 1 :
                    $suutiM +=13;
                    break;
                case 2 :
                    $suutiM +=13;
                    break;
                default :
                    break;
        }
        switch($suutiS){
            case 1 :
                $suutiS +=13;
                break;
            case 2 :
                $suutiS +=13;
                break;
            default :
                break;
        }
        if($game=="high"){
          if($suutiM < $suutiS){
            $kekka ="kati";
            $kazu++;
          }elseif($suutiM > $suutiS) {
            $kekka = "make";
          }else{
            $kekka = "hiki";
          }
      }
      if($game=="low"){
        if($suutiM < $suutiS){
            $kekka ="make";
        }elseif($suutiM > $suutiS) {
            $kekka ="kati";
            $kazu++;
        }else{
            $kekka ="hiki";
        }
    }

    $_SESSION['cards'] =$cards;
    $_SESSION['suuti'] = $suuti;
require_once "gameviewH&L.php";
}