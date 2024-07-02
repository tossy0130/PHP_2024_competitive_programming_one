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


