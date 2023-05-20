<?php

// Kode tanpa foreach
$names = ["Eko", "Kurniawan", "Khanedy"];

for ($i = 0; $i < count($names); $i++) :
    echo "Hello $names[$i]" . PHP_EOL;
endfor;

// Kode menggunakan foreach
foreach ($names as $name) {
    echo "Hallo Pak $name" . PHP_EOL; // tidak ada index
}

foreach ($names as $indeks => $value) {
    echo "Indeks ke $indeks = $value" . PHP_EOL; // ada index
}

// Kode : For Each dengan key
$person = [
    "first_name" => "EKo",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
