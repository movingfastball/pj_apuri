<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>カウンター</title>
    </head>
    <body>
        <?php
        if (isset($_POST["confirm"])) {
            ?>
            <?php
            print $_SESSION["onamae"] . "さんからのメッセージ";
            print "<br><br>";
            print "本文:<br>";
            print nl2br($_SESSION["honbun"], false);
            ?>
            <br>
            <br>
            <a href="session_comf.php">もう一度試すにはここをクリック</a>
            <hr>
            <pre>
                <?php print_r($_SESSION); ?>
            </pre>
            <hr>
            <?php
        } elseif (isset($_POST["back"])) {
            ?>

            <div style = "font-size:14px">テキスト送信のテスト</div>
            <form name="form1" method="post" action="confirm_count.php">
                名前：<br>
                <input type="text" name="onamae" value="<?= $_SESSION["onamae"] ?>">
                <br>
                本文:<br>
                <textarea name="honbun" cols="30" rows="5"><?= $_SESSION["honbun"] ?></textarea>
                <br>
                <input type="submit" value="送　信">
                </from>

                <?php
            } else {
                ?>

                エラーです<br>
                <a href="session_comf.php">session_comf.php</a>からアクセスしてください。
                <?php
            }
            ?>
    </body>
</html>






