<?php

/*

A - Placing Marbles 

問題文
すぬけ君は 
1,2,3 の番号がついた 
3 つのマスからなるマス目を持っています。 各マスには 0 か 1 が書かれており、マス 
i には 
s 
i
​
  が書かれています。

すぬけ君は 1 が書かれたマスにビー玉を置きます。 ビー玉が置かれるマスがいくつあるか求めてください。

入力例 1
Copy
101

出力例 1
Copy
2

*/

// 101 取得
fscanf(STDIN, "%d", $str);

// １文字ずつ分割して配列へ
$arr = str_split($str);

// 解答用
$result = 0;

// 判定用
foreach ($arr as $val) {
    if ($val == '1') {
        $result += 1;
    }
}

// 出力
print($result);


// ============================================================ END

/*

B - Shift only

入力例 1
Copy
3
8 12 40

出力例 1
Copy
2

*/

$num_02 = trim(fgets(STDIN));
$str_02 = trim(fgets(STDIN));

$arr_02 = explode(" ", $str_02);

$ruselt_02 = 0;
$h_num = $num_02 - 1;
while (true) {

    for ($i = 0; $i < $num_02; $i++) {

        // 割れなくなったらループを抜ける
        if ($arr_02[$i] % 2 == 1) {
            break 2;
        }

        // 値の更新処理 
        $arr_02[$i] = $arr_02[$i] / 2;

        // === 判定　カウントアップ
        if ($i == $h_num) {
            $ruselt_02 += 1;
        }
    } // === END for 

} // ================ END while 

// === 出力
echo $ruselt_02;

// ============================================================ END

/*

B - Coins 

あなたは、
500 円玉を 
A 枚、
100 円玉を 
B 枚、
50 円玉を 
C 枚持っています。 これらの硬貨の中から何枚かを選び、合計金額をちょうど 
X 円にする方法は何通りありますか。

同じ種類の硬貨どうしは区別できません。2 通りの硬貨の選び方は、ある種類の硬貨についてその硬貨を選ぶ枚数が異なるとき区別されます。

----------------------

入力
入力は以下の形式で標準入力から与えられる。

A
B
C
X

------------------------

入力例 1
Copy
2
2
2
100

出力例 1
Copy
2

------

入力例 2
Copy
5
1
0
150

出力例 2
Copy
0

*/

$str_a = trim(fgets(STDIN)); // 500
$str_b = trim(fgets(STDIN)); // 100
$str_c = trim(fgets(STDIN)); // 50

$str_x = trim(fgets(STDIN)); // カウントアップ対象の値

$result_count = 0;

// === 全方法をループで試す
for ($i = 0; $i <= $str_a; $i++) {
    for ($j = 0; $j <= $str_b; $j++) {
        for ($z = 0; $z <= $str_c; $z++) {
            // === 判定　カウントアップ
            if (($i * 500) + ($j * 100) + ($z * 50) == $str_x) {
                $result_count += 1;
            }
        }
    }
}

print($result_count);

// ============================================================ END

/*

B - Break Number 

高橋君は 
2 で割れる数が好きです。

正整数 
N が与えられるので、1 以上 N 以下の整数のうち、最も 2 で割れる回数が多いものを求めてください。答えは必ず 
1 つに定まります。

なお、2 で割っていき、何回あまりが出ずに割れるかを、2 で割れる回数と呼ぶことにします。

----------

入力例 1
7

出力例 1
4
------------
入力例 2
32

出力例 2
32
------------
入力例 3
1

出力例 3
1
------------
入力例 4
100

出力例 4
64

*/

$N_02 = fgets(STDIN);

$max_loop_num = 1; // 割った数
$max_count = 0; // 割れた数の最大

// === 大枠のループ（ 取得した値 ）
for ($i = 1; $i <= $N_02; $i++) {
    // print($i);
    $cnt = 0;
    $loop_val = $i;

    while ($loop_val % 2 == 0) {
        $loop_val /= 2;
        $cnt += 1;
    }

    // 値の更新
    if ($max_count < $cnt) {
        $max_loop_num = $i;
        $max_count = $cnt;
    }
} // ========= END for

// 何回目のループの数かを出力
print($max_loop_num);

// 最大に割れた数
//print($max_count);

// ============================================================ END

/*

*/

$N_01 = fgets(STDIN);
$N_02 = fgets(STDIN);
$N_03 = fgets(STDIN);

$arr_02 = explode(" ", $N_02);
$arr_03 = explode(" ", $N_03);


print_r($arr_03);

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

B - OddString

https://atcoder.jp/contests/abc072/tasks/abc072_b

入力例 1
atcoder

出力例 1
acdr

----------------------

入力例 2
aaaa

出力例 2
aa

*/


$str_01 = fgets(STDIN);
$arr_tmp = str_split($str_01);

$result = "";

for ($i = 0; $i < count($arr_tmp); $i++) {
    // === 奇数だったら文字を挿入
    if (($i + 1) % 2 == 1) {
        $result .= $arr_tmp[$i];
    }
}

print($result);

// ================================================= END



/*

B - Cakes and Donuts

https://atcoder.jp/contests/abc105/tasks/abc105_b

問題文
ABC 洋菓子店では, 
1 個 4 ドルのケーキと 
1 個 7 ドルのドーナツが売られている.
このとき, 合計金額が 
N ドルとなる買い方はあるか, 判定せよ. ただし, 同じ商品を二個以上買っても良く, 買わない商品があっても良いものとする.

--------------------
入力例 1
11
--------------------
出力例 1
Yes
--------------------

---------------------------------------
入力例 2
40
--------------------
出力例 2
Yes
--------------------

*/

$num = fgets(STDIN);

// === ４のループ
for ($i = 0; $i * 4 <= $num; $i++) {
    // === ７のループ
    for ($j = 0; $i * 4 + $j * 7 <= $num; $j++) {

        // 値が一致したらループ終了
        if (($i * 4 + $j * 7) === intval($num)) {
            print("Yes");
            exit;
        }
    }
}

echo "No" . PHP_EOL;
  



// ================================================= END