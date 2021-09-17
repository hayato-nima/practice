<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    for ($i = 0; $i < 5; $i++) {
        echo "Hello!({$i}回目)", '<br>';
    }
    ?>

    <?php
    $lines = [
        'いろはにほへと',
        'ちりぬるを',
        'わかよたれそ'
    ];
    for ($lineNumber = 1; $lineNumber <= count($lines); $lineNumber++) {
        echo $lineNumber, '行目：', $lines[$lineNumber - 1], '<br>';
    }
    ?>

    <?php
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo '$i：', $i, '$j：', $j, "<br>";
        }
    }
    ?>
    <pre>
    <?php
    $num = 100;
    while ($num < 300) {
        echo $num, PHP_EOL;
        $num += 30;
    }
    echo '$numが300を超えた為、ループを抜けました。';
    ?>
    </pre>
</body>

</html>
