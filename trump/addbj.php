<?php
if(! isset($_SESSION['x'])){
    $_SESSION['x']=0;
}
if(isset($_POST['plays'])){
    $draw =$_POST['plays'];
    if($draw=="draw"){
        $cards = $_SESSION['cards'];
        require "trunpcard.php";

            $tefuda[ $_SESSION['x']] = "$gara  \n  $suuti";
            $suutiS[]= $suuti;
        
            if($suutiS[0] >= 10){
                $_SESSION['sum'] += 10;
            }else if($suutiS[0]>=2){
                $_SESSION['sum'] +=$suutiS[0];
                // echo 't';
            }else{
                if( $_SESSION['sum'] <= 10){
                    $_SESSION['sum'] += 11;
                }else{
                    $_SESSION['sum'] += 1;
                }
                // echo 'f';
            }
        }

    array_push($_SESSION['tefuda'],$tefuda[$_SESSION['x']]); 
    $_SESSION['x']++;
    $_SESSION['cards'] =$cards;

require_once "gameviewBJ.php";
}