<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $team = ['T', 'G', 'C', 'D', 'S', 'B'];
    $team[] = 'F';
    ?>

    <p><?= $team[0]; ?></p>
    <p><?= $team[1]; ?></p>
    <p><?= $team[2]; ?></p>
    <p><?= $team[3]; ?></p>

    <p>
    <pre><?php print_r($team); ?></pre>
    </p>

    <?php
    $userData = [12345, 'Tarou Yamada', 'Tokyo', 32];
    list($id, $name, $prefecture, $age) = $userData;
    ?>
    <p>ユーザID：<?= $id ?></p>
    <p>ユーザ名：<?= $name ?></p>
    <p>都道府県：<?= $prefecture ?></p>
    <p>年齢：<?= $age ?></p>
    <?php
    define('TAX_PERCENT', 0.08);
    ?>
    <p>消費税率は<?= TAX_PERCENT; ?></p>
    <?php
    function someFunction()
    {
        echo '現在の関数名は：', __FUNCTION__, 'です。<br>';
    }
    echo '現在のファイル名は：', __FILE__, 'です。<br>';
    echo '現在の行番号は：', __LINE__, 'です。<br>';
    echo '現在のディレクトリは：', __DIR__, 'です。<br>';
    someFunction();
    ?>
</body>

</html>
