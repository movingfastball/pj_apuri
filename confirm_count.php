<?php
session_start();
$_SESSION["onamae"] = $_POST["onamae"];
$_SESSION["honbun"] = $_POST["honbun"];
if(isset($_POST["user_id"])){
    $_SESSION["user_id"] = $_POST["user_id"];
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset = "UTF-8">
    <title>PHPのテスト</title>
    </head>
    <body>
    確認画面
    <form name="form1" method="post" action="view10.php">
        <?php
        print "名前:";
        print $_POST["onamae"];
        print "<br><br>";
        print "本文:<br>";
        print nl2br($_POST["honbun"],false);
        ?>
<br>
<input type = "submit" value = "確　認" name = "confirm">
<input type = "submit" value = "戻　る" name = "back">
    </form>
    </body>
</html>
    