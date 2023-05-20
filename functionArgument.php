<?php

// satu argument
function sayHello($name)
{
    echo "Hallo nama saya $name" . PHP_EOL;
}
sayHello("Refsi");

// dua argument
function sayHello2($firstName, $lastName)
{
    echo "Hallo nama saya $firstName $lastName" . PHP_EOL;
}
sayHello2("Refsi", "Maulana");

// Default Argument
function sayHello3($name = "Anonymous")
{
    echo " Hello $name" . PHP_EOL;
}
sayHello3();
sayHello3("Refsi");

// Kesalahan Default Argument Value
function sayHello4($firstName = "Anonymous", $lastName)
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}
// sayHello4("Kurniawan"); // tidak berfungsi dikarenakan defaul pada argument pertama tidak diperbolehkan


// Type Declaration
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum("100", "100");
sum(100, 100);
sum(true, false);
// sum([], []);

// Variabel-length Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
