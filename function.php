<?php
// membuat function
function sayHello()
{
    echo "Hello Function" .PHP_EOL;
}

// Mencetak Function
sayHello();
sayHello();

// Function argument /  Parameter
function sayHello2($name)
{
    echo "Hello $name" . PHP_EOL;
}
sayHello2("Nuril");
sayHello2("Nuzula");


// text declaration
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
?>

