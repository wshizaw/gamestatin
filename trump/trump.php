<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トランプゲーム</title>
</head>
<body>
    <h1>トランプゲーム一覧</h1>
    <form action="ConTro.php" method="post">
        <input type="hidden" name="game" value="BJ"/>
            <p><input type="submit" value="ブラックジャック"></p>
        </form>
        <form action="ConTro.php" method="post">
        <input type="hidden" name="game" value="H&L"/>
            <p><input type="submit" value="high&low"></p>
        </form>
   

</body>
</html>