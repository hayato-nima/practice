<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php $point = 85; ?>
    <pre>
<?php
var_dump($point == 85); // true
var_dump($point == '85'); // true
var_dump($point === 85); // true
var_dump($point === '85'); // false
var_dump($point != 85); // false
var_dump($point != '85'); // false
var_dump($point !== 85); // false
var_dump($point !== '85'); // true
var_dump($point > 85); // false
var_dump($point >= 85); // true
var_dump($point > '85'); // false
var_dump($point >= '85'); // true
?>
</pre>

    <pre>
<?php
/* 以下は、abs関数をもちいた比較 */
$a = 1.2340;
$b = 1.2345;

// 小数部1桁目までが等しければ等しいとみなす。結果：true
var_dump(abs($a - $b) < 0.1);
// 小数部2桁目までが等しければ等しいとみなす。結果：true
var_dump(abs($a - $b) < 0.01);
// 小数部3桁目までが等しければ等しいとみなす。結果：true
var_dump(abs($a - $b) < 0.001);
// 小数部4桁目までが等しければ等しいとみなす。結果：false
var_dump(abs($a - $b) < 0.0001);
// 小数部5桁目までが等しければ等しいとみなす。結果：false
var_dump(abs($a - $b) < 0.00001);

/* 以下は、bccomp関数をもちいた比較 */
$c = '1.2340';
$d = '1.2345';
// 小数部1桁目までが等しければ等しいとみなす。結果：0
var_dump(bccomp($c, $d, 1));
// 小数部2桁目までが等しければ等しいとみなす。結果：0
var_dump(bccomp($c, $d, 2));
// 小数部3桁目までが等しければ等しいとみなす。結果：0
var_dump(bccomp($c, $d, 3));
// 小数部4桁目までが等しければ等しいとみなす。結果：-1
var_dump(bccomp($c, $d, 4));
// 小数部5桁目までが等しければ等しいとみなす。結果：-1
var_dump(bccomp($c, $d, 5));
?>

<?php //三項演算子
$a = -100;
echo $a < 0 ?  0 : $a;
echo '<br>';
$a = 100;
echo $a < 0 ?  0 : $a;
echo '<br>';
//null合体演算子
$a = 'some';
echo $a ?? 'nullだよ';
?>
<pre>
<?php
/* 三項演算子をもちいた例(1) */
$greeting = null;
$message = $greeting === null ? 'Hello' : $greeting;
echo 'あいさつは', $message, PHP_EOL;

/* 三項演算子をもちいた例(2) */
$greeting = 'Good Morning';
$message = $greeting === null ? 'Hello' : $greeting;
echo 'あいさつは', $message, PHP_EOL;

/* null合体演算子をもちいた例(1) */
$greeting = null;
$message = $greeting ?? 'Hello';
echo 'あいさつは', $message, PHP_EOL;

/* null合体演算子をもちいた例(2) */
$greeting = 'Good Morning';
$message = $greeting ?? 'Hello';
echo 'あいさつは', $message, PHP_EOL;
?>
</pre>

    </pre>

    <pre>
<?php
$temperature = 39; // 現在の水温は39℃です

// 適温の範囲「内」であるかを調べる
$isSuitable = $temperature >= 40 && $temperature <= 41;
var_dump($isSuitable);      // 結果：false

// 適温の範囲「外」であるかを調べる(1)
$isNotSuitable = $temperature < 40 || $temperature > 41;
var_dump($isNotSuitable);   // 結果：true

// 適温の範囲「外」であるかを調べる(2)
$isNotSuitable = !($temperature >= 40 && $temperature <= 41);
var_dump($isNotSuitable);   // 結果：true
?>
</pre>

</body>

</html>
