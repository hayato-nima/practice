<?php
//初級編


// 整数値を2つ入力させ、1つめの値を2つめの値で割った結果を表示し、続けてその結果に2つめの値を掛けた結果を表示するプログラムを作成せよ。計算はすべて整数型で行うこと（割り切れない場合は自動的に小数点以下が切り捨てられる）。
// $num1 = 9;
// $num2 = 3;
// $wari =  $num1 / $num2;
// $kake = $wari * $num2;
// echo $wari . '<br>';
// echo $kake;

// 整数値を入力させ、その値が5よりも大きく、かつ、20よりも小さければOKと表示するプログラムを作成せよ。
// $num = rand(1,20);
// if (5 < $num && $num < 20) {
//     echo 'OK';
// }

// 整数値を入力させ、その値が-10以下、または、10以上であればOKと表示するプログラムを作成せよ。
// $num = rand(-20 , 20);
// if (-10 >= $num || $num >= 10) {
//     echo 'OK';
// }

// 整数値を入力させ、その値が-5以上10未満であればOK、そうでなければNGと表示するプログラムを作成せよ。
// $num = rand(-5, 9);
// if (-5 >= $num || $num < 10) {
//     echo 'OK';
// }else{
//     echo 'NG';
// }

// 整数値を入力させ、その値が-10以上0未満、または、10以上であればOK、そうでなければNGと表示するプログラムを作成せよ。
// $num = rand(-20, 20);
// if ((-10 >= $num && $num < 0) || $num >= 10) {
//     echo 'OK';
// } else {
//     echo 'NG';
// }

// 整数値を入力させ、その値が-10未満ならrange 1、-10以上0未満であればrange 2、0以上であればrange 3、と表示するプログラムを作成せよ。
// $num = rand(-20, 15);
// if (-10 > $num) {
//     echo 'range 1';
// } elseif (-10 <= $num && 0 > $num) {
//     echo 'range 2';
// } elseif (0 <= $num) {
//     echo 'range 3';
// }

// 整数値を入力させ、その値が1ならone、2ならtwo、3ならthree、それ以外ならothersと表示するプログラムをswicth文を使って作成せよ。
// $num = rand(1, 4);
// switch ($num) {
//     case 1:
//         echo 'one';
//         break;
//     case 2:
//         echo 'two';
//         break;
//     case 3:
//         echo 'three';
//         break;
//     default:
//         echo 'other';
//         break;
// }

// 整数値を入力させ、1からその値までの総和を計算して表示するプログラムを作成せよ。ただし、0以下の値を入力した場合は0と表示する。
// $num = 10;
// if ($num > 0) {
//     $total = 0;
//     for ($i=0; $i <= $num; $i++) {
//         $total = $total + $i;
//     }
// }
// echo $total;

// 整数値を入力させ、その値の階乗を表示するプログラムを作成せよ。ただし、0以下の値を入力した場合は1と表示する。
// $num = 5;
// echo factorial_of($num);
// function factorial_of($num)
// {
//     if ($num > 0) {
//         return $num *= factorial_of($num - 1);
//     }
//     return 1;
// }

// 整数値を入力させ、その個数だけ * を表示するプログラムを作成せよ。入力値が0以下の値の場合は何も書かなくてよい。
// $num = rand(0,8);
// if ($num > 0) {
//     for ($i=1; $i <= $num; $i++) {
//         echo '*';
//     }
// }

// 整数値を入力させ、その個数だけ * を、5個おきに空白（スペース）を入れて表示するプログラムを作成せよ。入力値が0以下の値の場合は何も書かなくてよい。
// $num = rand(0,20);
// if ($num > 0) {
//     for ($i = 1; $i <= $num; $i++) {
//         echo '*';
//         if ($i % 5 === 0) {
//             echo ' ';
//         }
//     }
// }

// 1から20まで順に表示するが、5の倍数の場合は数字の代わりにbarと表示するプログラムを作成せよ。
// for ($i = 1; $i <= 20; $i++) {
//     if ($i % 5 === 0) {
//         echo 'bar' . '<br>';
//     } else {
//         echo $i . '<br>';
//     }
// }

// 整数値を入力させ、1から9まで、入力値以外を表示するプログラムを作成せよ。
// $num = rand(1,9);
// for ($i = 1; $i <= 9; $i++) {
//     if ($i === $num) {
//     } else {
//         echo $i .'<br>';
//     }
// }

// 整数値を入力させ、1から9まで、入力値と入力値+1以外を表示するプログラムを作成せよ。入力値が9の場合は9のみ表示しない。
// $num = rand(1, 9);
// for ($i = 1; $i <= 9; $i++) {
//     if ($i === $num || $i === $num + 1) {
//     } else {
//         echo $i . '<br>';
//     }
// }

// {3, 7, 0, 8, 4, 1, 9, 6, 5, 2}で初期化される大きさ10の整数型配列を宣言し、整数値を入力させ、要素番号が入力値である配列要素の値を表示するプログラムを作成せよ。入力値が配列の要素の範囲外であるかどうかのチェックは省略してよい。
// $input = 4;
// $num = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];
// echo $num[$input - 1];


// {3, 7, 0, 8, 4, 1, 9, 6, 5, 2}で初期化される大きさ10の整数型配列を宣言し、整数値を2つ入力させ、要素番号が入力値である2つの配列要素の値の積を計算して表示するプログラムを作成せよ。入力値が配列の要素の範囲外であるかどうかのチェックは省略してよい。
// $input1 = 1;
// $input2 = 5;
// $num = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];
// echo $num[$input1 - 1] * $num[$input2 - 1];


// {3, 7, 0, 8, 4, 1, 9, 6, 5, 2}で初期化される大きさ10の整数型配列を宣言し、整数値を2つ入力させ、要素番号が入力値である2つの配列要素の値の積を計算して表示するプログラムを作成せよ。入力値が配列の要素の範囲外であるかどうかのチェックは省略してよい。
// $num = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];
// $input1 = 8;
// $sansyo = $num[$input1 - 1];
// echo $num[$sansyo - 1];


