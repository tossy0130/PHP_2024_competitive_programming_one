<?php

/*

例えば入力例 1 の場合、過去にじゃんけんは 6 回行われ、そのうちアリスさんは 3 回勝ち、 1 回あいこ、 2 回負けているので、プログラムでは 3 と一行に出力します。

入力例1
6
G C
C G
P G
G C
P P
P C

出力例1
3

*/

$loop_num = trim(fgets(STDIN));

// ========== 値取得
$idx = 0;
$arr_01 = [];
while ($loop_num > $idx) {
    $tmp = trim(fgets(STDIN));
    $arr_01[$idx] = explode(" ", $tmp);
    $idx += 1;
}

//    print_r($arr_01);

// =========== じぇんけん　判定
$result = 0;
for ($i = 0; $i < $loop_num; $i++) {

    for ($j = 0; $j < 1; $j++) {

        if ($arr_01[$i][0] == 'G' && $arr_01[$i][1] == 'C') {
            $result += 1;
        } else if ($arr_01[$i][0] == 'C' && $arr_01[$i][1] == 'P') {
            $result += 1;
        } else if ($arr_01[$i][0] == 'P' && $arr_01[$i][1] == 'G') {
            $result += 1;
        }
    }
}

print($result);


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


/*

・反復横跳び

入力例1
4
55
57
55
52

出力例1
2
1
2
4


*/

$N = fgets(STDIN);
// === 値取得
$arr_val = [];
for ($i = 0; $i < $N; $i++) {
    $arr_val[$i] = trim(fgets(STDIN));
}

// ================================================= END

/*

ABC 085 A - Already 2018　

*/

$get_str = fgets(STDIN);

// １文ずつ配列へ入れる
$arr = str_split($get_str);

$set_str = "";
$idx = 0;

// === 2017/00/00  西暦部分取得
while (true) {

    if ($arr[$idx] == '/') {
        break;
    }

    $set_str .= $arr[$idx];
    $idx += 1;
}

// 西暦にプラス 1 をする
$set_str = $set_str + 1;

$idx = 0;
while (true) {

    if ($idx <= 3) {
        $idx += 1;
        continue;
    }

    $set_str .= $arr[$idx];

    if ($idx == 9) {
        break;
    }

    $idx += 1;
}

print($set_str);

// ================================================= END

/*

入力例 1
internationalization

出力例 1
i18n

----------------

入力例 2
smiles

出力例 2
s4s

----------------

*/

$str_02 = trim(fgets(STDIN));

// 文字列の頭
$str_02_f = $str_02[0];
//print($str_02_f);

// 文字列の末尾
$str_02_l = $str_02[-1];
//print($str_02_l);

// 文字列の長さ
$arr_02 = str_split($str_02);
$str_02_len = count($arr_02) - 2;
//print($str_02_len);

### 出力
print($str_02_f . $str_02_len . $str_02_l);

// ================================================= END


/*

B - Maximum Difference

問題文

N の整数列 A が与えられます。 
A の（添字の）異なる 2 要素の差の絶対値の最大値を求めてください。

--------------------
入力例 1
4
1 4 6 3

出力例 1
5
--------------------


*/

$num_03_01 = fgets(STDIN);
$num_03_02 = fgets(STDIN);

// === 配列へ格納
$arr_03 = explode(" ", $num_03_02);

$result_03 = 0;
for ($i = 0; $i < $num_03_01; $i++) {

    for ($j = 0; $j < $num_03_01; $j++) {

        // 計算
        $tmp_03 = $arr_03[$i] - $arr_03[$j];
        // abs で絶対値へ変換
        $tmp_03 = abs($tmp_03);
        /*
        print("arr_03 i:::" . $arr_03[$i] . "\n");
        print("arr_03 j:::" . $arr_03[$j] . "\n");
    
        print("tmp_03 :::" . $tmp_03 . "\n");
        */

        if ($result_03 < $tmp_03) {
            $result_03 = $tmp_03;
        }
    }
}

print($result_03);

// ================================================= END

/*

B - Palace 

https://atcoder.jp/contests/abc113/tasks/abc113_b


入力例 1
2
12 5
1000 2000

出力例 1
1

-------------------------

入力例 2
3
21 -11
81234 94124 52141

出力例 2
3

-----------------------------

*/

$num_04 = fgets(STDIN);
$num_04_02 = fgets(STDIN);
$num_04_03 = fgets(STDIN);

// 配列へ格納
$arr_03_01 = explode(" ", $num_04_02);

// 配列へ格納
$arr_03_02 = explode(" ", $num_04_03);

// === 判定
$tmp = 0;
$hantei = $arr_03_01[0]; // 計算式に埋め込む用

$kin = $arr_03_01[1];
// $kin = abs($kin);

// === 初期の result 値の作成
$result_tmp = $hantei - $arr_03_02[0] * 0.006;
$result = $kin - $result_tmp;
$result = abs($result);

$result_idx = 0;

for ($i = 0; $i < count($arr_03_02); $i++) {
    // === 計算して値を出す
    $tmp = $hantei - $arr_03_02[$i] * 0.006;

    // 比較の値から、計算して出した値を引いて
    $tmp_02 = $kin - $tmp;
    // 絶対値にする。
    $tmp_02 = abs($tmp_02);

    /*
    print("tmp_02:::" . $tmp_02 . "<br>");
    print("i:::" . $i);
    */

    // 最小値を更新
    if ($tmp_02 < $result) {
        $result = $tmp_02;
        $result_idx = $i;
    }
}

//print($result . "\n");
print($result_idx + 1);

// ================================================= END

/*

*/

// ================================================= END
