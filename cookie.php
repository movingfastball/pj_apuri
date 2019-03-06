<?php
$count = 1;
if(isset($_COOKIE["count"])){
    $count = $_COOKIE["count"];
    $count++;
}
setcookie("count",$count,time()+100);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset = "UTF-8">
    <title>クッキーのテスト</title>
    </head>
    <body>
        クッキーのテスト<br>
        <br>
        <?php
        if($count==1){
        ?>
        
        初めての訪問です<br>
        <br>
        クッキー情報はありません<br>
        このページをリロードしてください<br>
        
        
        <?php
        }else{
        ?>
        
        あなたの訪問は<?=$count?>回目です。<br>
        <br>
        100秒以内にリロードするとカウントアップします。
        <?php
        }
        ?>
    </body>
</html>>

