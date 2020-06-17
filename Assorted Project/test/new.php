<?php


$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$b = array_map(fn ($n) => pow($n, 2), $a);

print_r($b);

$parts = ['apple', 'pear'];
$fruits = ['banana', 'orange', ...$parts, 'watermelon'];

$result = ["melon", ...$parts, ...$fruits, 'papaya'];

$result[3] ??= 'some_default';

echo "<br>";
print_r($result);

$array = [
    'a' => 2,
    'b' => 4,
    'c' => 5,
];

echo "<br>";
echo array_key_first($array);
echo array_key_last($array);

echo "<br>";
$coef = 1_000_000;
$sum = array_map(fn ($i) => $i * $coef, $array);
print_r($sum);


echo "<br>";
$i = 9;
print($i == 1 ? 2 : 3);
echo "<br>";
print(($i == 1 ? 2 : 3) ? 4 : 5);
