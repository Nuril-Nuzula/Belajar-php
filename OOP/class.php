<?php
class Mobil {
    // anatomi Class
public function jalan()
{
echo 'Mobil berjalan';
}

}

// Class dengan function
class Mobil2
{
public function jalan()
{
echo 'Mobil berjalan';
}
}

// class dengan property
class Mobil3
{
public $roda;
public $pintu;
public function jalan()
{
    $pintu = 4; //varible lokal didalam oop
echo 'Mobil berjalan';
}
}

$avanza = new Mobil3();
$avanza->roda = 4;
