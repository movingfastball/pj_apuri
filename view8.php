<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>プルダウン</title>
    </head>
    <body>
        <?php
        if($_POST["test"]!=""){
            print "選択No:<br>";
            print $_POST["test"];
        }else{
            print "Noを選択してください<br>";
        }
        ?>
    </body>
</html>