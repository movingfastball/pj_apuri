<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>テキスト送信のテスト</title>
    </head>

    <body>
        <div style="font-size:14px">テキスト送信のテスト</div>
        <form name="form1" method="POST" action="view2.php">
            名前:<br>
            <input type="text" name="onamae"><br>
            本文:<br>
            <textarea name="honbun" cols="30" rows="5"></textarea>
            <br>
            <input type="submit" value="送　信">
        </form>
    </body>
</html>