<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset = "UTF-8">
    <title>hidden結果</title>
    </head>
    
    <body>
       確認画面
       <form name="form1" method="post" action="view5.php">
        <?php
        print $_POST["onamae"]."さんからのメッセージ";
        print"<br><br>";
        print"本文:<br>";
        print nl2br($_POST["honbun"],false);
        ?>
       <br>
       <input type="submit" value="確　認" name="confirm">
       <input type="submit" value="戻　る" name="back">
       <input type="hidden" name="onamae" value="<?=$_POST["onamae"]?>">
       <input type="hidden" name="honbun" value="<?=$_POST["honbun"]?>">
       <input type="hidden" name="user_id" value="<?=$_POST["user_id"]?>">
       
        
    </body>
</html>