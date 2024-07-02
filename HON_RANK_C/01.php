<?php

/*

あなたは異世界に転生した勇者です。この世界にはレベルという概念があり、戦闘を起こした際、レベルが高い方が勝利となります。勝利した側は相手のレベルの半分 (小数点以下切り捨て) だけレベルが上昇し、敗北した側はレベルが半分 (小数点以下切り捨て) になります。またレベルが同じ場合戦闘は引き分けとなり、レベルの変動は起きません。

例えばあなたのレベルが 20 で、戦闘相手のレベルが 11 のとき、あなたの勝利となります。戦闘後、あなたのレベルは 5 上昇し 25 に、相手のレベルは 5 になります。

あなたはこの世界でのレベルの変化をシミュレーションしようと考えています。
戦闘を始める前のあなたのレベルと、N 回の戦闘で戦う相手のレベルが順に与えられるので、N 回の戦闘後にあなたのレベルがいくつになったかを出力してください。

入力例 1 では以下の表のようにレベルが遷移します。

初めのあなたのレベルは 10 で、5 人と戦闘します。
1 人目と 2 人目、それぞれとの戦闘はあなたの勝利で、それぞれの戦闘でレベルが 2, 5 上昇します。
3 人目との戦闘時点でのあなたのレベルは 17 なので、レベル が 20 である相手に敗北してレベルが 8 に変化します。
4 人目との戦闘は引き分けでレベルの変化は生じません。
最後に 5 人目との戦闘に勝利し、レベルが 3 上昇してレベル 11 となります。


入力例1
5 10
5
11
20
8
7

出力例1
11

*/

$str_01 = fgets(STDIN);
$arr = explode(" ", $str_01);

$arr_val = [];
$result_val = $arr[1];

// === 値 取得
$idx = 0;
while ($arr[0] > $idx) {
    $arr_val[$idx] = fgets(STDIN);
    $idx += 1;
}

// print_r($arr_val);

$idx = 0;
while ($arr[0] > $idx) {
    // 勝ち
    if ($result_val > $arr_val[$idx]) {
        $tmp_val = floor($arr_val[$idx] / 2);
        $result_val += $tmp_val;

        // 負け
    } else if ($result_val < $arr_val[$idx]) {
        $tmp_val = floor($result_val / 2);
        $result_val = $tmp_val;
    }
}

print($result_val);

// ================================================= END

/*

入力例 1 では、あなたは hamburg を食べたいと思っていて、与えられた料理名は cheese hamburg です。
2 つ目の単語が、あなたの食べたい hamburg と一致しているため、"Yes" と出力します。

入力例1
hamburg
2
cheese hamburg

出力例1
Yes

*/

$num_01 = trim(fgets(STDIN));
$num_02 = trim(fgets(STDIN));
$num_03 = trim(fgets(STDIN));

$arr = explode(" ", $num_03);



$result_Flg = 0;
foreach ($arr as $val) {

    if ($num_01 == $val) {
        $result_Flg = 1;
        break;
    }
}

if ($result_Flg == 1) {
    echo ("Yes");
} else {
    echo ("No");
}

// ================================================= END

/*

入力例1
--PA-I---ZA
出力例1
-PA-I-ZA

入力例2
--2000--01---01--Fizz----Buzz--
出力例2
-2000-01-01-Fizz-Buzz-

*/

$num_03 = fgets(STDIN);

function replaceMultipleHyphens($input)
{

    return preg_replace('/-+/', '-', $input);
}

$result = replaceMultipleHyphens($num_03);
print($result);


// ================================================= END