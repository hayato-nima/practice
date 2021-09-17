<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    //switch文はゆるやかな比較によって値を比較するので注意する
    $message = '';
    $extension = 'gif';
    switch ($extension) {
        case 'jpg':
            $message = 'jpg画像です。';
            break;
        case 'png':
            $message = 'png画像です。';
            break;
        case 'gif':
            $message = 'gif画像です。';
            break;
        case 'bmp':
        case 'svg':
            //上の２行は if($extension == 'bmp' || $extension == 'svg') と同じ意味
            $message = 'bmpまたはsvg画像です。';
            break;
        default:
            $message = 'その他の形式です。';
    }
    ?>
    <p>メッセージ：<?= $message ?></p>

    <?php
    //breakを省略するとその後のcase文の処理も実行される
    $number = 1;
    switch ($number) {
        case 0:
            echo 'number=0の処理<br>';
        case 1:
            echo 'number=1の処理<br>';
            // break;
        case 2:
            echo 'number=2の処理<br>';
        default:
            echo 'defaultの処理<br>';
    }
    ?>

    <?php
    $score = -100;
    if ($score < 0) {
        die('スコアは正の数でなければなりません。');
    }
    ?>
</body>

</html>
