<?php

class Singa
{
    public static $KAKI = 4;

    public function Kaki1()
    {
        echo Singa::$KAKI;
    }
    public function Kaki2()
    {
        echo self::$KAKI;
    }
    public function Kaki3()
    {
        echo static::$KAKI;
    }
}
$singa = new Singa();
echo $singa->Kaki1();
echo PHP_EOL;
echo $singa->Kaki2();
echo PHP_EOL;
echo $singa->Kaki3();
echo PHP_EOL;