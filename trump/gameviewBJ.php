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
        foreach($_SESSION['tefuda'] as $all){
            echo $all." ";
        }
        echo "<p>合計".$_SESSION['sum']." </p>";
        if($_SESSION['sum'] > 21){
            echo "バースト！あなたの負け！";
        }
    ?>
    <form action="ConTro.php" method="post">
    <?php
        if($_SESSION['sum'] >21 || isset($_SESSION['tekitefuda'])){  echo'<input type="submit" name="plays" value="draw"disabled>もう一枚引く';}
        else{ echo'<input type="submit" name="plays" value="draw">もう一枚引く';}

         if( $_SESSION['sum'] > 21 || isset($_SESSION['tekitefuda'])){  echo'<input type="submit" name="plays" value="go" disabled>勝負！';
            }else{  echo '<input type="submit" name="plays" value="go"  >勝負！';}
            ?>
    </form>
    <?php
    if(isset($_SESSION['tekitefuda'])){
     foreach($_SESSION['tekitefuda'] as $all){
        echo $all." ";
        }
        echo "<p>合計".$_SESSION['tekisum']." </p>";
        if(($_SESSION['sum'] > $_SESSION['tekisum'] || $_SESSION['tekisum'] > 21)){
            echo "あなたの勝ち！";
        }elseif (($_SESSION['sum'] < $_SESSION['tekisum'])){
            echo "あなたの負け！";
        }else{
            echo "同点！";
        }
        session_destroy();
}
    ?>
    <form action="ConTro.php" method="post">
     <input type="hidden" name="play" value="BJ"/>
     <p><input type="submit" value="もう一度"></p>
     </form>
    <a href="ConTro.php">ゲーム一覧へ戻る
</body>
</html>