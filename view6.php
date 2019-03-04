<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>チェックボックス</title>
    </head>
    <body>
        <?php
        if(isset($_POST["hobby"])){
            $hobby = implode('と',$_POST["hobby"]);
            print"私の趣味は";
            print $hobby;
            print "です。";
        }else{
            print "私の趣味ではありません";
        }
        ?>
    </body>
</html>