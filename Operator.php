<?php
// aritmatika
$a = 10;
$b = 10;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 100 % 3;
var_dump($resultModulo);


// Penugasan
$total = 0;


$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;


$total += $fruit;
$total += $chicken;
$total += $orangeJuice;
var_dump($total);


// perbandingan
var_dump("10" == 10);
var_dump("10" === 10);


var_dump(10 < 9);
var_dump(9 >= 9);


// logika
var_dump(true && true);
var_dump(true && false);


var_dump(true || false);
var_dump(true || true);


var_dump(true xor false);
var_dump(true xor true);


var_dump(!true);
var_dump(!false);


// Increment dan decrement
$a = 10;
$b = ++$a;


var_dump($a);
var_dump($b);


// Array
$first = [
    "first_name" => "Elina"
];


$last = [
    "first_name" => "Nadia",
    "last_name" => "Hasna"
];


$full = $first + $last;
var_dump($full);
?>