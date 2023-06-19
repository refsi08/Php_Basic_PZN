<?php
// Perbedaan Anonymous Function dan Arrow Function

// Anonymous Function
$firstName = "Refsi";
$lastName = "Maulana";

// contoh menggunakan arrow function
$fullName = function () use ($firstName, $lastName): string { // harus menggunakan use untuk memanggil variabel di luar akses function
    return "My Name is $firstName $lastName" . PHP_EOL;
};

echo $fullName();

// Arrow Function
$firstName = "Refsi";
$lastName = "Maulana";

/**
 * tidak perlu menggunakan use
 * contoh menggunakan arrow function dengan kata kunci fn()
 */
$namaLengkap = fn () => "Hello My Name is $firstName $lastName" . PHP_EOL;

echo $namaLengkap();
