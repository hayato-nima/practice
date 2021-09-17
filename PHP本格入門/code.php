<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>キャスト - honkaku</title>
</head>
<body>
    <?php $total = 500 * 1.08;  ?>
    <p>税込金額は:<?php echo $total ?>円です</p>
    <p><?php
        var_dump($total);
        //浮動小数点数をあらわすfloatが表示される
        ?></p>
    <?php
    $boolValue = true;
    ?>
    <p><?php var_dump($boolValue) ?></p>

    <p>
        <?php
        echo <<< EOM
本文です。
本文です。
EOM;
        //ヒアドキュメント
        ?>
    </p>
    </pre>
</body>

</html>
