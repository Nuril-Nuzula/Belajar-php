<?php
$gender = "PRIA";
$hi = null;


if ($gender == "PRIA") {
    $hi = "Hi Bro!";
} else {
    $hi = "Hi Sis!";
}


echo $hi;

echo "\n";

echo "# ternary";
echo "\n";

$gender = "Wanita";
$hi = $gender == "PRIA" ? "Hi Broo!" : "Hi Sis!";

echo $hi . PHP_EOL

?>