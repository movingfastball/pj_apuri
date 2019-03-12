<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>チェックボックス</title>
    </head>
    <body>
        <?php
        $resizeX = 150;
        $thumbnail_name = "tumbnail.jpg";
        $file_dir = 'C:\Cake\htdocs\image\\';

        $file_path = $file_dir.$_FILES["uploadfile"]["name"];
        $thumbnail_file_path = $file_dir.$thumbnail_name;

        if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path)) {
            $img_dir = "/image/";
            $img_path = $img_dir . $_FILES["uploadfile"]["name"];
            $thumbnail_img_path = $img_dir.$thumbnail_name;

            if (mb_strpos($_FILES['uploadfile']['type'], 'jpeg')) {
                $gdimg_in = imagecreatefromjpeg($file_path);
                $ix = imagesx($gdimg_in);
                $iy = imagesy($gdimg_in);

                $ox = $resizeX;
                $oy = ($ox * $iy) / $ix;

                $gdimg_out = imagecreatetruecolor($ox, $oy);
                imagecopyresized($gdimg_out, $gdimg_in, 0, 0, 0, 0, $ox, $oy, $ix, $iy);
                
                imagejpeg($gdimg_out,$thumbnail_file_path);
                
                
                imagedestroy($gdimg_in);
                imagedestroy($gdimg_out);

                $size = getimagesize($file_path);
                $size2 = getimagesize($thumbnail_file_path);
                ?>

                ファイルアップロード完了しました<br>
                <img src="<?= $img_path ?>"<?= $size[3] ?>><br>
                <img src ="<?=$thumbnail_img_path?>"<?=$size2[3]?>>
                 <br>
                <strong><?= $_POST['comment'] ?></strong><br>
                <?php
            }else{
                print"JPEG形式の画像をアップロードしてください";
            }
            } else {
                ?>
                正常にアップロード処理されませんでした<br>
                <?php
            }
            ?>
    </body>
</html>
