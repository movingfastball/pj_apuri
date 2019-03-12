<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>チェックボックス</title>
        <link href = "../../css/style.css" rel = "stylesheet">
    </head>
    <body>
        <div>
            <?php
            require_once("ERROR.php");
            if (!cken($_POST)) {
                $encoding = mb_internal_encoding();
                $err = "Encoding Error! The expected encoding is " . $encoding;

                exit($err);
            }
            $_POST = es($_POST);
            ?>
            
            
            
            <?php
            
            $error = [];
            
            $min = 1;
            $max = 10;
            
            if(isSet($_POST["taste"])){
                $taste = $_POST["taste"];
                
                $isTaste = ctype_digit($taste) && ($taste>=$min) && ($taste<=$max);
                if(!$isTaste){
                    $error[] = "甘みの値にエラーがありました。";
                    $taste = $min;
                }
                }else{
                
                $taste = round(($min+$max)/2);
                $isTaste = true;
               }
               ?>
            
            
            <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']);?>">
                <ul>
                    <li><span>甘み:</span>
                         <input type="range" name="taste" min="1" max="10" step="1" value="<?php echo $taste;?>">
                    </li>
                    <li><input type="submit" value="送信する"></li>
                </ul>
            </form>
            <?php
            
            if($isTaste){
                $tasteList = ["クソあまい","まぁあまい","あまい","少し甘い","普通","よくわからん普通","苦い","クソ苦い","苦過ぎじゃね","クイモンジャアリマセン"];
                echo"<HR>";
                echo "甘みは「{$taste}.{$tasteList[$taste-1]}です」";
            }
            ?>
        </div>
    </body>
</html>
