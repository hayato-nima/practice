<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    /* (0.1 + 0.7) × 10 を切り捨てします。*/

    // 素直に計算する例(丸め誤差がおきる)
    $result1 = floor((0.1 + 0.7) * 10);

    // 文字列型にキャストする(正しい計算結果になる)
    $result2 = floor((string)(0.1 + 0.7) * 10);

    // BCMath関数を使って計算する(正しい計算結果になる)
    $result3 = floor((int)bcmul(bcadd(0.1, 0.7, 2), 10, 2));

    echo sprintf('%.50f', (0.1 + 0.7) * 10); //結果7.999999999999.......
    //浮動小数点数の計算結果は近似値になる。
    ?>
    <h4>(0.1 + 0.7) × 10の切り捨ての計算結果</h4>
    <p>result1：<?= $result1 ?></p>
    <p>result2：<?= $result2 ?></p>
    <p>result3：<?= $result3 ?></p>

    <?php
    $sum  = 3;
    $sum *= 5;

    $greeting  = 'Hello';
    $greeting .= 'World.';
    ?>
    <p>sum：<?= $sum ?></p>
    <p>greeting：<?= $greeting ?></p>

    <?php
    // $greeting2には値ではなく参照が入ります。
    $greeting1 = 'Hello';
    $greeting2 = &$greeting1;
    $greeting1 = 'World';
    ?>
    <p>greeting1：<?= $greeting1 ?></p>
    <p>greeting2：<?= $greeting2 ?></p>
</body>

</html>
