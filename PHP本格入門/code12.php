<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <pre>
<?php
//足し算の関数
function add($a, $b)
{
    $total = $a + $b;
    return $total;
}
echo add(3, 10);
?>

</pre>

    <pre>
<?php
//足し算の関数
function add2($a, $b)
{
    if ($a <= 0) {
        echo '引数aは正の数で指定してください。';
        return;
    }
    if ($b <= 0) {
        echo '引数bは正の数で指定してください。';
        return;
    }


    $total = $a + $b;
    return $total;
}
echo add2(3, 10);
?>

</pre>
    <pre>

<?php
// はじめて現れる画像の拡張子を返す関数
function findImageExtension($extensions)
{
    foreach ($extensions as $extension) {
        if ($extension == 'jpg' || $extension == 'gif' || $extension == 'png') {
            return $extension;
        }
    }
    return 'NOT FOUND';
}

$extensions = ['pdf', 'docx', 'gif', 'exe'];
$foundImageExtension = findImageExtension($extensions);
echo $foundImageExtension;
?>
</pre>
    <pre>

<?php
//正の整数であればtrue,そうでなければfalseを返す関数
function checkNumber($value)
{
    return is_numeric($value) && (int)$value > 0;
}

function add3($a, $b)
{
    //関数の中に関数を書くこともできる
    if (!checkNumber($a) || !checkNumber($b)) {
        return 'INVALDO';
    }
    $total = $a + $b;
    return $total;
}

echo add3(3, 10) . '<br>';

echo add3(3, -10);

?>
</pre>

    <pre>
<?php
function add4($a)
{
    $a += 10;
}
// メインルーチン
$argument = 5;
add4($argument);
echo '$argumentは', $argument, 'です。';
?>

</pre>

    <pre>
<?php
function add5(&$a)
{
    $a += 10;
}
// メインルーチン
$argument = 5;
add5($argument);
echo '$argumentは', $argument, 'です。';
?>
</pre>

</body>

</html>
