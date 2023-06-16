<?php
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");
$sayHello("Budi");

// Kode : Anonymous Function sebagai argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}
sayGoodBye("Eko", function (string $name) {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Eko", $filterFunction);

// Mengakses Variabel Luar
$firstName = "Refsi";
$lastName = "Maulana";

$fullName = function () use ($firstName, $lastName) { // harus menggunakan use untuk memanggil variabel di luar akses function
    echo "My Name is $firstName $lastName" . PHP_EOL;
};

$fullName(); // gak bisa diisi nilai argument lagi, karena nilai value sudah ada di dalam variabel
