<?php
class katak
{
    // Method
    // Mandatory Parameter(Tidak ada value/isi nya)
    public function tidur()
    {
        echo 'Katak Tidur';
    }
    // memiliki default value
    public function lompat($arah = 'Depan')
    {
        echo 'katak melompat ke arah '.$arah;
    }
}
