<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ゲーム画面</title>
</head>
<body>
    <?php
    
     echo "<p>現在の試合数は".$_SESSION['count']."!</p>";
     echo "<p>カードは".$_SESSION['tefuda']."!</p>";
    if(isset($kekka)){
        echo "<p>引いたカードは".$tefuda."!</p>";
        if($kekka =="kati"){
            echo "YOU WIN!";
            
        }elseif($kekka =="make"){
            echo "YOU LOSE!";
        }else{
            echo "引き分け！もう一度引く！";
        }
        $_SESSION['tefuda'] = $tefuda; 
    }
    if(! isset($kekka)){
        $kekka ="a";
    }
    ?>
    <form action="ConTro.php" method="post">
        <input type="hidden" name="playH" value="H&L">
        <?php
            if($_SESSION['count'] > 9 || $kekka=="make"){  echo'<input type="submit" name="playt" value="high" disabled >High';}
            else{ echo'<input type="submit" name="playt" value="high" >High!';}

            if($_SESSION['count'] > 9 || $kekka=="make"){  echo'<input type="submit" name="playt" value="low" disabled>Low！';
            }else{ echo '<input type="submit" name="playt" value="low" >Low！';}
        ?>
    </form>
    <!--<?php
    if(isset($_SESSION['kekka'])){
        if($kekka=="make"){
        session_destroy();
        }
}
    ?>-->
    <form action="ConTro.php" method="post">
     <input type="hidden" name="play" value="H&L"/>
     <p><input type="submit" value="もう一度"></p>
     </form>
    <a href="ConTro.php">ゲーム一覧へ戻る
</body>
</html>