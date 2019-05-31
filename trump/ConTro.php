<?php
session_start();

if(isset($_POST['game'])){
    $view =$_POST['game'];

    switch($view){
        case "BJ" :
        $Controller="Blackjack.php";
        break;
        case "H&L" :
        $Controller="High&Low.php";
        break;
    }
    require_once $Controller;
    $a = 1;
}
if(isset($_POST['play'])){
    $games =$_POST['play'];
        switch ($games){
            case "BJ":
                $Controller="playbj.php";
                break;
            case "H&L":
                $Controller="playH&L.php";
                break;
}
require_once $Controller;
$a = 1;
}
if(isset($_POST['plays'])){
    $playto =$_POST['plays'];
    
        switch ($playto){
            case "draw":
                $Controller="addbj.php";
                break;
            case "go":
                $Controller="gokekka.php";
                break;
}
require_once $Controller;
$a = 1;
}
if(isset($_POST['playH'])){
    $playto =$_POST['playH'];
    
        switch ($playto){
            case "H&L":
                $Controller="addH&L.php";
                break;
            default :
                break;
}
require_once $Controller;
$a = 1;
}
if(! isset($a)){
    require_once "trump.php";
}

?>