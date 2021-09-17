<?php
// 変数を定義して1から12のいずれかの数字を代入し、
// 代入されている数字に応じた季節を表示するプログラムを作成してください。
// 3, 4, 5 ⇒ 春
// 6, 7, 8 ⇒ 夏
// 9,10,11 ⇒ 秋
// 12, 1, 2 ⇒ 冬
// $month = 9;
// function season($value)
// {
//     if (($value >= 1) && ($value <= 12)) {
//         # code...
//         if (($value >= 3) && ($value <= 5)) {
//             echo '春';
//         } elseif (($value >= 6) && ($value <= 8)) {
//             echo '夏';
//         } elseif (($value >= 9) && ($value <= 11)) {
//             echo '秋';
//         }else{
//             echo '冬';
//         }
//     }else {
//         echo '1~12で入力しなさい。';
//     }
// }
// echo season($month);


// 問題
// 数え年と性別から厄年を判定するプログラムを作成してください。
// 変数を2つ定義し、1つ目は数えの年齢、2つ目は性別を代入。
// 厄年の定義は以下の通り。
// 男性：数えで25歳、42歳、61歳
// 女性：数えで19歳、33歳、37歳
// $age = 19;
// $gender = 'man';
// $yakudoshi = array("man"=>array(25,42,61), "woman" => array(19, 33, 37));
// // var_dump($yakudoshi);
// if (in_array($age,$yakudoshi[$gender])) {
//     echo "厄年です";
// }else{
//     echo "厄年ではありません";
// }


// 以下の要素を持つ配列を作成してください。
// {“宮島”, “天橋立”, “松島”}
// $sima = ['宮島', '天橋立', '松島'];


// 以下の要素を持つ連想配列を作成してください。
// (
// “残業” => “zangyo”,
// “財閥” => “zaibatsu”,
// “過労死” => “karoshi”
// )
// $zzz = [
// '残業' => 'zangyo',
// '財閥' => 'zaibatsu',
// '過労死' => 'karoshi'
// ];
// var_dump($zzz);


// 1から100までの合計を求めるプログラムを作成してください。
// $total = 0;
// for ($i=1; $i < 100; $i++) { 
//     $total += $i;
// }
// echo $total;


//カレンダー
// for ($i = 1; $i <= 31; $i++) {
//     echo $i < 10 ? "&nbsp;&nbsp;&nbsp;" . $i : "&nbsp;" . $i;
//     if ($i % 7 === 0) {
//         echo '<br>';
//     }
// }
//&nbsp; 半角スペースを入れたいときに使う
// echo "<table border=1>";
// echo "<tr align='right'>";
// for ($i = 1; $i <= 31; $i++) {
//     echo "<td>" . $i . "</td>";
//     if ($i % 7 == 0) {
//         echo "</tr><tr align='right'>";
//     }
// }
// echo "</tr>";
// echo "</table>";


// for文を使って、1～10のランダムな数字が入った配列を作成してください。
// for ($i=0; $i < 3; $i++) {
//     $number = rand(1,10);
//     $arr[] = $number ;
// }
// var_dump($arr);


// 以下の要素を持つ配列を作成。
// “aaa”, “bbb”, “ccc”
// for文やforeach文を使って配列の全ての要素を表示するプログラムを作成してください。
// $abc = ['aaa', 'bbb', 'ccc'];
// foreach ($abc as $key => $value) {
//     echo $key . $value . "<br>";
// }


// 以下のような異なる数字を持つ配列を作成。
// 60, 50, 90, 70, 80
// 配列の要素のうち、最大値を求めるプログラムを作成してください。
// 関数を使って求める方法
// $number = [60, 50, 90, 70, 80 ];
// echo max($number);//最大値を求める max関数
//for文を使って求める方法
// $number = [60, 50, 90, 70, 80 ];
// $max = 0;
// for ($i=0; $i < count($number); $i++) {
//     if ($number[$i] > $max) {
//         $max = $number[$i];
//     }
// }
// echo $max;


// 以下の要素を持つ配列を作成。
// [“ccc”, “bbb”, “aaa”]
// 0番目と2番目の値を入れ替えるプログラムを作成してください。
// $abc = ['ccc', 'bbb', 'aaa',];
// $tmp = $abc[0];
// $abc[0] = $abc[2];
// $abc[2] = $tmp;
// var_dump($abc);


// 以下のような異なる数字を持つ配列を作成。
// 60, 50, 90, 70, 80
// 配列の要素を降順(高い順)に表示してください。
// $arr = [60, 50, 90, 70, 80];
// rsort($arr);
// foreach($arr as $value){
//     echo $value ."<br>";
// }
// 配列の中身をソート
// for ($i = 0; $i < count($arr) - 1; $i++) {
//     // $i番目以降で最大の値が入った部屋を検索
//     $maxIndex = $i;
//     for ($j = $i + 1; $j < count($arr); $j++) {
//         if ($arr[$j] > $arr[$maxIndex]) {
//             $maxIndex = $j;
//         }
//     }
//     // $i番目の値と最大値の値を入れ替える
//     $tmp = $arr[$i];
//     $arr[$i] = $arr[$maxIndex];
//     $arr[$maxIndex] = $tmp;
// }
// // 配列の中身を表示する
// foreach ($arr as $a) {
//     echo $a . "<br>";
// }



