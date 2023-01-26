<?php
// for loop
for (; ;  ) {
    echo "Hello for looping" . PHP_EOL;
}

$counter = 1;
for (; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

for ($counter = 1; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}


// for (init statement; kondisi; post statement) {
//     // blok pengulangan
// }


// While Loop

$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah while loop ke-". $counter  . PHP_EOL;
    $counter++;
}

$counter = 1;
while ($counter <= 10) :
    echo "Ini adalah while loop ke-". $counter  . PHP_EOL;
    $counter++;
endwhile;


// Do While Loop

$counter = 1;
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);

$counter = 100;
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);


// Break and Continue

$counter = 1;


while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;


    if ($counter > 10) {
        break;
    }
}

for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
}



// For Each Loop

$names = ["Elina", "Hasna", "Zahra"];


for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

//pake for each cetak tanpa index
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}


//pake for each cetak dengan index
foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

?>