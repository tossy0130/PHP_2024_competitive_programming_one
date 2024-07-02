<?php

/*

最大値の出力

・ 1 行目に整数 N が与えられます。
・ 2 行目に長さ N の数列 a が与えられます。

入力例2
5
1 5 4 3 2

出力例2
5

*/

$num_01 = fgets(STDIN);
$num_02 = fgets(STDIN);
$arr_01 = explode(" ", $num_02);

// === 仮の最大値 設定
$max_01 = $arr_01[0];

$idx = 0;
while (count($arr_01) > $idx) {
    if ($arr_01[$idx] > $max_01) {
        $max_01 = $arr_01[$idx];
    }
    $idx = $idx + 1;
}

print($max_01);
