<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    /* 単一の条件式 */
    $point = 90;
    if ($point >= 80) {
        $message = 'ハイスコアです。'; // このブロックに入ります
    } else {
        $message = '通常スコアです';
    }
    ?>
    <p>メッセージ：<?= $message ?></p>

    <?php
    /* 論理演算子(&&や||など)を使った複合的な条件式 */
    $point = -30;
    if ($point < 0 || $point > 100) {
        $message = 'ポイント値が不正です。'; // このブロックに入ります
    } else {
        $message = 'ポイント値は正常です。';
    }
    ?>
    <p>メッセージ：<?= $message ?></p>

    <?php
    /* 真偽値を返すPHPの命令を使った条件式 */
    $point = '90A';
    if (is_numeric($point)) {
        $message = 'ポイントは数値です。';
    } else {
        $message = 'ポイントが数値ではありません。'; // このブロックに入ります
    }
    ?>
    <p>メッセージ：<?= $message ?></p>

    <?php
    /* 論理演算子の否定(!)を使って真偽値を逆転させる */
    $point = '90A';
    if (!is_numeric($point)) {
        $message = 'ポイントが数値ではありません。'; // このブロックに入ります
    } else {
        $message = 'ポイントは数値です。';
    }
    ?>
    <p>メッセージ：<?= $message ?></p>

    <?php
    /* 数値を返すPHPの命令を使った条件式。数値は暗黙的に真偽値に型変換される。 */
    $places = ['東京', '京都', 'ニューヨーク'];
    if (count($places)) {
        $message = '場所が1つ以上存在します。'; // このブロックに入ります
    } else {
        $message = '場所が1つも存在しません。';
    }
    ?>
    <p>メッセージ：<?= $message ?></p>





    <pre>
    <?php
    /* × あいまいな空欄チェック。文字列型「0」が空文字と認識されてしまう。 */
    $value = '0';
    if (!$value) {
        echo '変数は空です。', PHP_EOL; // このブロックに入ります(誤判定)
    } else {
        echo '変数は空ではありません。', PHP_EOL;
    }
    ?>

    <?php
    /* × あいまいな空欄チェック。数値「0」は空文字と同じ扱いとなる。 */
    $value = 0;
    if ($value == '') {
        echo '変数は空です。', PHP_EOL; // このブロックに入ります(誤判定)
    } else {
        echo '変数は空ではありません。', PHP_EOL;
    }
    ?>

    <?php
    /* × あいまいな空欄チェック。「0」が空文字と誤認識される。*/
    $value = '0';
    if (empty($value)) {
        echo '変数は空です。', PHP_EOL; // このブロックに入ります(誤判定)
    } else {
        echo '変数は空ではありません。', PHP_EOL;
    }
    ?>

    <?php
    /* △ 空文字は判定できるが、nullは判定できないケース。
              プログラマーの意図によってはこれでよい場合もある。 */
    $value = null;
    if ($value === '') {
        echo '変数は空です。', PHP_EOL;
    } else {
        echo '変数は空ではありません。', PHP_EOL; // このブロックに入ります
    }
    ?>

    <?php
    /* △ nullは判定できるが、空文字は判定できないケース。
              プログラマーの意図によってはこれでよい場合もある。 */
    $value = '';
    if (is_null($value)) {
        echo '変数は空です。', PHP_EOL;
    } else {
        echo '変数は空ではありません。', PHP_EOL; // このブロックに入ります
    }
    ?>

    <?php
    /* ○ 空文字もNULLも正しく判断できる空欄チェック。 */
    $value = null;
    if (is_null($value) || $value === '') {
        echo '変数は空です。', PHP_EOL; // このブロックに入ります
    } else {
        echo '変数は空ではありません。', PHP_EOL;
    }
    ?>

    <?php
    /* ○ 空文字もNULLも正しく判断できる空欄チェック。フォームを作る場合などに使います */
    $value = '';
    if (is_null($value) || $value === '') {
        echo '変数は空です。', PHP_EOL; // このブロックに入ります
    } else {
        echo '変数は空ではありません。', PHP_EOL;
    }
    ?>

    <?php
    /* ○ 空文字もNULLも正しく判断できる空欄チェック。 */
    $value = 0;
    if (is_null($value) || $value === '') {
        echo '変数は空です。', PHP_EOL;
    } else {
        echo '変数は空ではありません。', PHP_EOL; // このブロックに入ります
    }
    ?>
</pre>
</body>

</html>
