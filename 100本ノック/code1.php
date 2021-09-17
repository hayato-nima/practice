<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>100本ノック</title>
</head>

<body>
    <?php
    //Hello World!と表示
    // echo ('Hello World!');

    //足し算
    // echo 12345 + 23456;

    // 整数値を入力させ、その入力値を表示するプログラムを作成せよ。
    // $number = 123;
    // echo $number;

    // 整数値を入力させ、その入力値を3倍した計算結果を表示するプログラムを作成せよ。
    // $number = 12;
    // $seki3 = $number * 3;
    // echo  $seki3;

    //整数値を2つ入力させ、それらの値の和、差、積、商と余りを求めるプログラムを作成せよ。なお、差と商は1つ目の値から2つ目の値を引いた、あるいは割った結果とする。余りは無い場合も0と表示するのでよい。
    // $a = 10;
    // $b = 3;
    // echo ('$a = '  . "{$a}" . '$b = ' . "{$b}" . '<br>');
    // if (is_int($a) && is_int($b)) {
    //     echo ('和：' . ($a + $b) . '<br>');
    //     echo ('差：' . ($a - $b) . '<br>');
    //     echo ('積：' . ($a * $b) . '<br>');
    //     echo ('商：' . floor($a / $b) . ' 余り：' . ($a % $b) . '<br>');
    // } else {
    //     echo ('整数を入力してね');
    // }

    // 整数値を入力させ、値が0ならzeroと表示するプログラムを作成せよ。
    // $num = 0 ;
    // if ($num === 0) {
    //     echo ('zero');
    // }else {
    //     echo $num;
    // }

    // 整数値を入力させ、値が正であればpositiveと表示するプログラムを作成せよ。ただし0は正には含まない。
    // $num = 5;
    // if ($num > 0) {
    //     echo 'positive';
    // }

    // 整数値を入力させ、値が正であればpositive、負であればnegative、0であればzeroと表示するプログラムを作成せよ。
    // $num = 1;
    // if ($num >= 1) {
    //     echo 'positive';
    // }elseif ($num === 0) {
    //     echo 'zero';
    // }elseif ($num < 0) {
    //     echo 'negativve';
    // }

    //絶対値を求める:絶対値はゼロからの距離
    // $num = -5;
    // echo abs($num);
    //関数なしver
    // $num = 5;
    // if ($num < 0) {
    //     $abs = $num * -1;
    //     echo $abs;
    // }else {
    //     echo ($num);
    // }

    // Hello World!を10回繰り返して表示するプログラムを作成せよ。
    // for ($i = 0; $i < 10; $i++) {
    //     echo 'Hello World!' . '<br>';
    // }

    // 整数値を入力させ、その値の回数だけHello World!を繰り返して表示するプログラムを作成せよ。
    // $num = 8 ;
    // for ($i = 0; $i < $num; $i++) {
    //     echo 'Hello World!' . '<br>';
    // }

    // 整数値を入力させ、0から入力値まで数を1ずつ増やして表示するプログラムを作成せよ。
    // $num = 8 ;
    // for ($i = 0; $i <= $num; $i++) {
    //     echo $i . '<br>';
    // }

    //整数値を入力させ、入力値から0まで数を1ずつ減らして表示するプログラムを作成せよ。
    // $num = 8 ;
    // for ($i = $num; $i > 0; $i--) {
    //     echo $i . '<br>';
    // }

    // 整数値を入力させ、0から入力値を超えない値まで2ずつ増やして表示するプログラムを作成せよ。
    // $num = 8;
    // for ($i = 0; $i <= $num; $i++) {
    //     if ($i % 2 === 0) {
    //         echo $i . '<br>';
    //     }
    // }

    // 要素数10の整数型の配列を宣言し、i番目の要素の初期値をiとし、順に値を表示するプログラムを作成せよ。
    // $num = [1,2,3,4,5,6,7,8,9,10];
    // foreach($num as $number){
    //     echo $number .'<br>';
    // }

    // 要素数10の整数型の配列を宣言し、整数値を入力させ、すべての配列の要素を入力値として、すべての要素の値を表示するプログラムを作成せよ。
    // $input = 8;
    // for ($i=0; $i < 10; $i++) {
    //     $num[] = $input;
    // }
    // foreach ($num as $number) {
    //     echo $number . '<br>';
    // }

    // 要素数5の整数型の配列を宣言し、すべての配列に対して順に入力された整数値を代入し、すべての要素の値を表示するプログラムを作成せよ。
    for ($i=0; $i < 5; $i++) {
        $input = rand(1,10);
        $num[] = $input;
    }
    foreach ($num as $number) {
        echo $number . '<br>';
    }


    ?>

</body>

</html>
