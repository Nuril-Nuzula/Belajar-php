<?php
class Mobil
{
private $roda = 4;
private function jalan()
{
echo 'Mobil berjalan';
}
public function jumlahRoda()
{
echo $this->roda;
}
}
$avanza = new Mobil();
echo $avanza->jalan();
echo PHP_EOL;
echo $avanza->roda;
echo PHP_EOL;