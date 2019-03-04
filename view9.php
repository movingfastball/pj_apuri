<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>リストボックス</title>
    </head>
    <body>
        <?php
        if(isset($_POST["hobby"])){
            print "選択したNoは以下の通りです<br><br>";
            foreach($_POST["hobby"]as $hobby){
                print $hobby;
                print "<br>";
            }
        }else{
            print "Noなし";
        }
        ?>
    </body>
</html>