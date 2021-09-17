<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>引数の参照渡し - honkaku</title>
</head>

<body>
    <pre>
<?php
/* 正の整数であれば真、そうでなければ偽を返す関数 */
function checkNumber($value)
{
    return is_numeric($value) && (int)$value > 0;
}

/* 2つの数値を足し算して返す関数 */
function add($a, $b, &$errorMessage): int //型宣言 戻り値のデータ型を指定する
{
    if (!checkNumber($a)) {
        $a = 0;
        $errorMessage = '(※エラー：1番目の引数が正の整数ではありません。)';
    }
    if (!checkNumber($b)) {
        $b = 0;
        $errorMessage = '(※エラー：2番目の引数が正の整数ではありません。)';
    }
    $total = $a + $b;
    return $total;
}

// メインルーチン
$errorMessage = null;
$result = add(3, 10, $errorMessage);
echo '計算結果：', $result, $errorMessage, PHP_EOL;

$errorMessage = null;
$result = add(4, -5, $errorMessage);
echo '計算結果：', $result, $errorMessage, PHP_EOL;
?>
</pre>

    <pre>
<?php
/* 税込金額を計算する関数 */
function calcPriceWithTax(int $price, float $tax = 0.08): float
{
    $result = $price * (1 + $tax);
    return $result;
}

// メインルーチン
$priceWithTax = calcPriceWithTax(1000);
echo "<p>計算結果：{$priceWithTax}</p>";

$priceWithTax = calcPriceWithTax(1000, 0.05);
echo "<p>計算結果：{$priceWithTax}</p>";
?>
</pre>

    <pre>
<?php
// 複数の数値を足し算して返す関数。
// 可変長引数は最後の引数にしか使えないことに注意してください。
function add2(string $header, int ...$numbers): string
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $header . $total;
}

$result = add2('計算結果：', 3, 2, 9, 1);
echo $result;
?>
</pre>
    <pre>
<?php
// 複数の数値を足し算して返す関数。
function add3(string $header, int $number1, int $number2, int $number3 = 0): string
{
    $total = $number1 + $number2 + $number3;
    return $header . $total;
}

// add関数に渡す数値配列。
$numbers = [3, 2, 4];

// 以下の場合、引数$number2が足りないため、エラーとなります。
// $numbers = [3];

// 以下の場合、引数$number3にはデフォルト値の0がセットされます。
// $numbers = [3, 2];

// 以下の場合、4番目の要素「12」は無視され、計算結果は「9」となります。
// $numbers = [3, 2, 4, 12];

$result = add3('計算結果：', ...$numbers);
echo $result;
?>
</pre>
</body>

</html>
