<?php

use Mobil as GlobalMobil;

class Mobil
{
    public $roda = 4;

    protected function jalan()
    {
        echo 'Mobil berjalan';
    }
    public function jumlahRoda()
    {
        echo $this->roda;
    }
}
// ===============================//
$avanza = new Mobil();
echo $avanza->roda();
echo PHP_EOL;
echo $avanza->jalan();
echo PHP_EOL;
echo $avanza->jumlahRoda();
echo PHP_EOL;

class Motor extends GlobalMobil
{
    public function Body(){
        echo $this->jalan();
    }
}