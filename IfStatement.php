<?php
echo "#if else if else#";
echo "\n";

$nilai = 75;
$absen = 80;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
}elseif ($nilai >= 70 && $absen >= 70){
    echo "Nilai Anda B" . PHP_EOL;
}elseif ($nilai >= 60 && $absen >= 60){
    echo "Nilai Anda C" . PHP_EOL;
}elseif ($nilai >= 70 && $absen >= 70){
    echo "Nilai Anda D" . PHP_EOL;
}else {
    echo "Nilai Anda E" . PHP_EOL;
}
?>