<?php
// Dot Operator
$name = "Qonita";
echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";


// Konversi ke number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);


$valueInt = (int)"100";
var_dump($valueInt);


$valueFloat = (float)"1.01";
var_dump($valueFloat);


// Mengakses karakter
$name = "Nai";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;


// Variable Parsing
$name = "Qonita";
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;
// coba
echo "Hello {$name}'s"." Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name's Selamat Belajar PHP" . PHP_EOL;


// Curly Brace
$var = "Book";
echo "This is {$var}s" . PHP_EOL;
?>