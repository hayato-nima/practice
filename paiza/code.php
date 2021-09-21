<?php
// $personNumber = 6;
// if (2 <= $personNumber && $personNumber <= 100) {
//     $battleNumber = ($personNumber * ($personNumber -1)) / 2;
//     echo $battleNumber;
// }


// 【キャンペーン問題】枠で囲む
// $title = 'asdfghjklfdadfafdfa';
// $upper = mb_strlen($title);
// $cross = ($upper + 2);
// function enclose($val)
// {
//     for ($i = 1; $i < $val; $i++) {
//         echo '+';
//     }
// };
// echo (enclose($cross)) . "\n", "+{$title}+" . "\n", enclose($cross);


// $n = trim(fgets(STDIN));//trimは文字列の最初と最後の空白を取り除く関数です。
// $zaisan = [];

// for ($i = 0; $i < $n; $i++) {
//     [$s, $a] = explode(' ', trim(fgets(STDIN)));// explode関数とは、文字列を指定した文字列で分割する関数です。
//     $zaisan[$s] = $a;
// }

// $S = trim(fgets(STDIN));

// echo $zaisan[$S] . "\n";
// $zaisan = []; とすることで $zaisan を初期化します。
// $zaisan に $s に対応する値 $a を追加するには $zaisan[$s] = $a; とします。
// $zaisan における $S に対応する値にアクセスするには $zaisan[$S] とします。

// C020
// $zanpan = '10 31 52';
// $nakami = explode(' ', $zanpan);
// $m = $nakami[0];
// $p = $nakami[1] / 100;
// $q = $nakami[2] / 100;
// $hanbai1 = $m * $p;
// $souzai = $m - $hanbai1;
// $hanbai2 = $souzai * $q;
// $nokori = $souzai - $hanbai2;
// echo $nokori;


// var_dump($nakami) ;
