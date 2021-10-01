<?php
//標準入力の値の取り方
//     $input_line = fgets(STDIN);
//     for ($i = 0; $i < $input_line; $i++) {
//     $s = trim(fgets(STDIN));
//     $s = str_replace(array("\r\n","\r","\n"), '', $s);
//     $s = explode(" ", $s);
//     echo $s[0].' '.$s[1].' '.$s[2]."\n";
// }

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

// 母音を削除する
// https://qiita.com/SOJO/items/bb24e7d09320ea96cfc3
// https://qumeru.com/magazine/82
// $name = 'Torvalds';
// $arr = explode(' ','a i u e o A I U E O');
// $adana = str_replace($arr, '', $name);
// echo $adana;
// var_dump($arr);

// 簡易カードゲーム
// https://singoro.net/note/get-the-number/
// $card = 8888;
// // $get1 = substr($s[0], 0, 1);
// // $get2 = substr($s[0], 1, 1);
// // $get3 = substr($s[0], 2, 1);
// // $get4 = substr($s[0], 3, 1);
// $get1 = substr($card, 0, 1);
// $get2 = substr($card, 1, 1);
// $get3 = substr($card, 2, 1);
// $get4 = substr($card, 3, 1);
// $numbers[] = $get1;
// $numbers[] = $get2;
// $numbers[] = $get3;
// $numbers[] = $get4;
// var_dump($numbers);
// if (($get1 === $get2) && ($get1 === $get3) && ($get1 === $get4)) {
//     echo 'Four card';
// }

//Dateオブジェクトを使って日付を表示
// $input_line = fgets(STDIN);
// for ($i = 0; $i < $input_line; $i++) {
//     $s = trim(fgets(STDIN));
//     $s = str_replace(array("\r\n", "\r", "\n"), '', $s);
//     $s = explode(" ", $s);
//     // echo $s[0].' '.$s[1].' '.$s[2]."\n";
//     $date = new DateTime($s[0]);
//     $date->add(new DateInterval("PT{$s[1]}H{$s[2]}M"));
//     echo $date->format('H:i') . "\n";
// }


// $nmk = trim(fgets(STDIN));
// [$n, $m, $k] = explode(' ', $nmk);
// for ($i = 0; $i < $n; $i++) {
//     $a = explode(' ', trim(fgets(STDIN)));
//     $ans = 0;
//     for ($j = 0; $j < $m; $j++) {
//         if ($a[$j] === $k) {
//             $ans++;
//         }
//     }
//     echo $ans . "\n";
// }

