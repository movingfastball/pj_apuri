<?php
if(isset($_POST["confirm"])){
?>

<?php
print $_POST["onamae"]."さんからのメッセージ";
print "<br><br>";
print "本文:<br>";
print nl2br($_POST["honbun"],false);
?>

<?php }elseif($_POST["back"]){
    
 ?>

<div style="font-size:14px">テキスト送信の</div>
<from name="form1" method="post" action="textsentadd.php">
    名前:<br>
    <input type="text" name="onamae" value="<?=$_POST["onamae"]?>">
    <br>
本文:<br>
<textarea name="honbun" cols="30" rows="5"><?=$_POST["honbun"]?></textarea>
<br>
<input type="submit" value="送　信">
<input type="hidden" name="user_id" value="<?=$_POST["user_id"]?>">
</from>
<?php
}else{
?>
エラーです
<a href="form.html">form.html</a>からアクセスしてください
<?php
}
?>
</body>
</html>