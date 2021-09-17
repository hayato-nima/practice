<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $colors = ['赤', '青', '黄'];
    foreach ($colors as $color) {
        echo "<p>{$color}<p/>";
    }
    ?>
    <?php
    //配列ループでもキー名を取得できる。これはPHPが配列と連想配列の違いがない為なのである。
    $colors = ['赤', '青', '黄'];
    foreach ($colors as $key => $value) {
        echo "<p>キー:{$key}  値:{$value}<p/>";
    }
    ?>

    <?php
    $colors = [
        'red'  => '赤',
        'blue'  => '青',
        'yellow'  => '黄'
    ];
    foreach ($colors as $key => $value) {
        echo "<p>キー:{$key}  値:{$value}<p/>";
    }
    ?>

    <?php
    $numbers = [3, 5, -1, 2];
    foreach ($numbers as &$number) {
        if ($number < 0) {
            $number = 0;
        }
    }
    // ループ処理が終わった後は、必ずunset命令でリファレンスを消して下さい。
    unset($number);
    ?>
    <pre><?php print_r($numbers); ?></pre>

    <?php
    $colors = [
        'red'       => '赤',
        'blue'      => '青',
        'yellow'    => '黄'
    ];
    foreach ($colors as $key => &$value) {
        $value = 'カラー名：' . $value;
    }
    unset($value);
    ?>
    <pre><?php print_r($colors); ?></pre>
</body>

</html>
