<?php
// 文字列型の確認
$s = "Hello";
var_dump($s);

// 1文字にアクセス
echo $s[1] , "\n";

// マルチバイトで0文字目にアクセス
$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0] , "\n";
