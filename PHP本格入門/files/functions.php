<?php
/* 生年月日を元に年齢を計算して返す関数 */
function calcAge(int $birthday): int
{
    return (int)((date('Ymd') - $birthday) / 10000);
}
//PHPプロフラムだけ書かれたファイル（HTMLと混在しないファイル）はPHPの閉じタグを書かない
//→半角スペースや改行が認識されて正確にプログラムが動かなくなる可能性がある
