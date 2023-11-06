<?php
// mb_strlen 文字列長
$word = "My name is taro.";
echo "start word: $word\n";
$w_len = mb_strlen($word);
echo "length: $w_len\n";

// mb_substr 切り抜き
$w_trim = mb_substr($word, start: 2, length: 5);
echo "trimed: $w_trim\n";

// mb_strpos インデックス
$search = "name";
$idx = mb_strpos($word, $search);
echo "index: $idx\n";

// str_replace 置換
$search = "name";
$to = "NAME";
$replaced_word = str_replace($search, $to, $word);
echo "replaced: $replaced_word\n";

// 正規表現
$ymd = "2020-01-01";
$regexymd = "/\d{4}-\d{2}-\d{2}/";
$ret = preg_match($regexymd, $ymd);

if ($ret) {
  echo "valid ymd: $ymd\n";
} else {
  echo "invalid ymd: $ymd\n";
}
?>
