<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    //判定結果が確定した時点で、その後の条件式は無視されます。
    $t = true;
    $f = false;
    $t && print(1);
    $f && print(2); //表示されない
    $t || print(3); //表示されない
    $f || print(4);
    echo '<br>';
    ?>
    <?php
    // 以下のコメントを外すと、出力結果はwww.example.comになります。
    // define('URL_BASE', 'http://www.example.com');

    defined('URL_BASE') || define('URL_BASE', 'http://default.example.com');
    echo 'URL_BASE is: ', URL_BASE;
    ?>
    <?php
    // ボタンごとの桁番号を設定する
    define('BIT_RED',       1 << 0); // 赤ボタンの定義は「0001」
    define('BIT_BLUE',      1 << 1); // 青ボタンの定義は「0010」
    define('BIT_YELLOW',    1 << 2); // 黄ボタンの定義は「0100」
    define('BIT_GREEN',     1 << 3); // 緑ボタンの定義は「1000」

    $colors = 0; // 初期値では全てのボタンがOFF

    // 現在は青と黄がONであると仮定したビット値を変数$colorsに入れる。
    // $colorsは「0110」というビット列になる。
    $colors = BIT_BLUE | BIT_YELLOW;

    // ボタン色ごとのON・OFFを判定し、結果を連想配列に保存する
    $statuses = [
        'red'       => ($colors & BIT_RED)      > 0,
        'blue'      => ($colors & BIT_BLUE)     > 0,
        'yellow'    => ($colors & BIT_YELLOW)   > 0,
        'green'     => ($colors & BIT_GREEN)    > 0
    ];
    ?>
    <p>赤のボタンはONですか？<?php var_dump($statuses['red']); ?></p>
    <p>青のボタンはONですか？<?php var_dump($statuses['blue']); ?></p>
    <p>黄のボタンはONですか？<?php var_dump($statuses['yellow']); ?></p>
    <p>緑のボタンはONですか？<?php var_dump($statuses['green']); ?></p>

</body>

</html>
