<?php


$name = "Refsi Maulana Siregar";

echo "Name : " . $name . PHP_EOL; // jadi lebih singkat
// PHP_EOL (end off line)

// tidak perlu lagi seperti ini
echo "Nama  : ";
echo $name;
echo "\n";

// Konversi String ke number
$valueString = (string) 100; // konversi ke String
var_dump($valueString);

$valueInt = (int) "100"; // konversi ke integer
var_dump($valueInt);

$valueInt2 = (int) "salah"; // jika yang diinput tidak integer makan akan bernilai 0
var_dump($valueInt2);

$valueFloat = (float) "1.01"; // konversi ke floating
var_dump($valueFloat);

// Mengakses karakter
$name = "EKO";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;


// Variabel Parsing
$name = "Refsi";

// langkah sebelumnya harus menggunakan titik.
echo "Hello " . $name . ", Selamat Belajar" . PHP_EOL; // menipulasi menggunakan titik
echo "Hello $name, Selamat Belajar" . PHP_EOL; // manipulasi tanpa titik (lebih sederhana)

// Curly Brace
// kadang kita butuh menggunakan variabel dengan string tanpa ada spasi.
$var = "Mar";
echo "This is {$var}s" . PHP_EOL;
