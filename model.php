<?php
$hands=['グー','チョキ','パー'];
//require_once(dbaccess.php);

if(isset($_REQUEST['zyanken'])){  
 $zyanken=$_POST['zyanken'];
}
$key = array_rand($hands);
$teki=$hands[$key];

 switch($zyanken){
     case ($zyanken==$teki):
     $answer="引き分け";
     break;
     case 'グー':
      if($teki=='チョキ'){
          $answer='勝ち';
          break;
      }
      else if($teki=='パー'){
          $answer='負け';
          break;
      }
      case 'チョキ':
      if($teki=='パー'){
          $answer='勝ち';
          break;
      }
      else if($teki=='グー'){
          $answer='負け';
          break;
      }
      case 'パー':
      if($teki=='グー'){
          $answer='勝ち';
          break;
      }
      else if($teki=='チョキ'){
          $answer='負け';
          break;
      }
 }
