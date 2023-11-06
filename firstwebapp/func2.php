<?php
function max_number($a, $b) {
  if ($a > $b) {
    return $a;
  }
  return $b;
}

function print_star($star_num = 3) {
  echo "<p>";
  for ($i = 0; $i < 5; $i++) {
    echo "★";
  }
  echo "</p>";
  return;
}

$x = 5;
$y = 10;

$m = max($x, $y);
echo "$x と $y で大きい方は $m です。";

print_star(5);

print_star();

$my_list = [];
echo "mylist: $my_list\n";

function fetch_list(&$list) {
  $list = [1,2,3,4,5];
}

fetch_list($my_list);

echo "mylist: \n";
print_r($my_list);
?>
