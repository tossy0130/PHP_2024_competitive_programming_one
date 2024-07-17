<?php

/*
あなたは文字列に関するプログラムを書いています。

整数 n とある 1 文字 c が与えられます。文字 c を n 個並べた文字列を出力してください。

入力例 1 の場合
6
p
"p" を 6 個並べるので
pppppp
と出力して下さい。

入力例1
6
p
出力例1
pppppp

*/

$input_line = fgets(STDIN);
$input_line_02 = fgets(STDIN);

$idx = 0;
$arr = [];
while ($input_line > $idx) {
    $arr[$idx] = $input_line_02;

    // === ********** 改行文字を削除 ***********
    $text = str_replace(PHP_EOL, '', $arr[$idx]);
    print($text);
    $idx += 1;
}

// =========================================================== END 



/*

・じゃんけんの手は「グー」、「チョキ」、「パー」の 3 種類のみであり、それぞれ順番に 'G', 'C', 'P' というアルファベット 1 文字によって表現されます。

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

// ======================================================== END

/*

たとえば、61 分利用した場合、支払う利用料金は 90 分のものになります。
PAIZA さんが部屋を利用した時間が与えられるので、PAIZA さんが支払う利用料金を出力してください。

入力例1
200
61

出力例1
600
--------------
入力例2
300
30

出力例2
300

*/

$input_line = fgets(STDIN);
$input_line_02 = fgets(STDIN);

// ==========  計算部分

// === 通常　割り切れる処理
if ($input_line_02 % 30 == 0) {
    $result = floor($input_line_02 / 30);
    print($result * $input_line);
} else {

    // === 割り切れなかったら 1を加算
    $result = floor($input_line_02 / 30);
    print(($result + 1) * $input_line);
}

// ==================================================== END


/*

詰め替えるための容器の容量 x ミリリットルと購入する詰め替えの量 y ミリリットルがこの順に改行区切りで与えられるので詰め替えるための容器を何本満たせるかと余った量を改行区切りで出力してください。

入力例 1 の場合
100
250
2 本詰め替え容器を満たすことができ、 50 ミリリットル余るので
2
50
と出力して下さい。

入力例1
100
250

出力例1
2
50

*/

$input_line = fgets(STDIN);
$input_line_02 = fgets(STDIN);

$result = $input_line_02 % $input_line;
$result_01 = floor($input_line_02 / $input_line);
print($result_01 . "\n");
print($result);

// ==================================================== END


/*

海開きの基準を 3 日間の水温が全て 20 度以上の場合とすることにしました。
3 日間の水温が改行区切りで与えられるので海開きの基準を満たしていれば "OK" そうでない場合は "NG" と出力してください。

入力例 1 の場合
21
20
23
3 日間水温が全て 20 度以上なので
OK

入力例1
21
20
23

出力例1
OK

*/

$input_line = fgets(STDIN);
$input_line2 = fgets(STDIN);
$input_line3 = fgets(STDIN);

$flg = 0;
if ($input_line > 20) {
    $flg = 1;
}

if ($input_line2 > 20) {
    $flg = 1;
}

if ($input_line3 > 20) {
    $flg = 1;
}

if ($flg == 1) {
    print("OK");
} else {
    print("NG");
}

// ===================================================== END

/*

入力例1
password

出力例1
Yes

-----------------

入力例2
neko

出力例2
No
 
 */

$input_line = fgets(STDIN);
$arr = str_split(trim($input_line));

$c_mozi = "";

// === 配列の最後の文字を取得
for ($i = 0; $i < count($arr); $i++) {
    if ($i + 1 == count($arr)) {
        $c_mozi = $arr[$i];
    }
}

// 判定
if ($c_mozi == "d") {
    print("Yes");
} else {
    print("No");
}

// ===================================================== END


/*

入力例1
3
出力例1
5

----------------

入力例2
12
出力例2
2

*/

$input_line = fgets(STDIN);
if ($input_line + 2 > 12) {
    print(($input_line + 2) - 12);
} else {
    print($input_line + 2);
}


    // ===================================================== END