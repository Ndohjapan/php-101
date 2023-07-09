<?php

$fruits = ["orange", "apple", "pear"];

echo count($fruits);

var_dump(in_array("apple", $fruits));

// Add to an array
$fruits[] = "grape";
array_push($fruits, "blueberry", "pine");

print_r($fruits);

$chunked_array = array_chunk($fruits, 3);

var_dump("<br>", $chunked_array);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);

print_r($arr3);


$a = ["green", "red", "yellow"];
$b = ["avacado", "apple", "banana"];

$c = array_combine($a, $b);

echo "<br>";
echo "<br>";
echo "<br>";

$keys = array_keys($c);
print_r($keys);

$numbers = range(1, 20);

$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);