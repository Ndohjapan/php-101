<?php
$y = 12;
function registerUser(){
    global $y;
    echo $y;
    echo "User registered";
}

registerUser();

$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(9, 10);