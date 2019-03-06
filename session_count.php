<?php
session_start();
$count = 1;
if(isset($_SESSION["count"])){
    $conut = $_SESSION["count"];
    $count++;
}
$_SESSION["count"]=$count;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset = "UTF-8">
    <title>セッションカウントのテスト</title>
    </head>
    <body>
        セッションカウントのテスト<br>
        <br>
        <?php
        if($count == 1){
        ?>
        初めての訪問です<br>
        <br>
        セッション変数にデータがありません<br>
        このページをリロードしてください<br>
        <?php
        }else{
        ?>
        あなたの訪問は<?=$count?>回目です<br>
        
        <?php
        } 
        ?>
    </body>
</html>
    
        