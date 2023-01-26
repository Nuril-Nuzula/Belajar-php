<?php
$values = array(10, 9, 8, 7.5);
var_dump($values);


$names = ["IDN", "Boarding", "School"];
var_dump($names);

//menampilkan data array index ke 1
var_dump($names[0]);


//mengubah data array
$names[0] = "SMK IDN";
var_dump($names);


//menghapus data array
unset($names[1]);
var_dump($names);


//menambahkan data array
$names[] = "Jonggol";
var_dump($names);
?>