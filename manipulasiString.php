<?php


$name = "Refsi Maulana Siregar";

echo "Name : " . $name . PHP_EOL; // jadi lebih singkat

// tidak perlu lagi seperti ini
echo "Nama  : ";
echo $name;
echo "\n";

// Konversi String ke number
$valueString = (string) 100; // konversi ke String
var_dump($valueString);

$valueInt = (int) "100"; // konversi ke integer
var_dump($valueInt);

$valueFloat = (float) "1.01"; // konversi ke floating
var_dump($valueFloat);

// Mengakses karakter
$name = "EKO";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;


// Variabel Parsing
$name = "Refsi";
echo "Hello $name, Selamat Belajar" . PHP_EOL;

// Curly Brace
$var = "Mar";
echo "This is {$var}s" . PHP_EOL;