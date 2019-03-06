<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset = "UTF-8">
    <title>session_count</title>
    </head>
    
    <body>
        <div style="font-size:14px">session_count</div>
        <form name="form1" method="POST" action="confirm_count.php">
            名前:<br>
            <input type="text" name="onamae"><br>
            本文:<br>
            <textarea name="honbun" cols="30" rows="5"></textarea>
            <br>
            <input type="submit" value="送　信">
            <input type="hidden" name="user_id" value = "0001">
        </form>
    </body>
</html>
