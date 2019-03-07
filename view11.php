<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>チェックボックス</title>
    </head>
    <body>
        <?php
        $file_dir = 'C:\Cake\htdocs\image\\';
        
        $file_path = $file_dir .$_FILES["uploadfile"]["name"];
        
        if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$file_path)){
            $img_dir = "/image/";
            $img_path = $img_dir.$_FILES["uploadfile"]["name"];
            $size = getimagesize($file_path);
        ?>

        ファイルアップロード完了しました<br>
        <img src="<?=$img_path?>"<?=$size[3]?>><br>
        <strong><?=$_POST['comment']?></strong><br>
        <?php
        }else{
         ?>
        正常にアップロード処理されませんでした<br>
        <?php 
        }
        ?>
    </body>
</html>
