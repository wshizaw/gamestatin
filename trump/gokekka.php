<?php
$sum=0;
if(isset($_POST['plays'])){
    $draw =$_POST['plays'];
    if($draw=="go"){
        $cards = $_SESSION['cards'];
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
            for($i=2;$sum<17;$i++){
                
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
    
            $_SESSION['tekitefuda'] =$tefuda;
            $_SESSION['tekisum'] =$sum;
        }
        require_once "gameviewBJ.php";
    }