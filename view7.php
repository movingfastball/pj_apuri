<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>ラジオボックス</title>
    </head>
    <body>
        <?php
        
        if(isset($_POST["gender"])&&($_POST["gender"]=="男"||$_POST["gender"]=="女")){
            print "性別:<br>";
            print $_POST["gender"];
        }else{
            print "性別を選んでください。<br>";
        }
        ?>
    </body>
</html>