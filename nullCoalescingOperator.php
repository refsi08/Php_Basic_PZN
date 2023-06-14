<?php

// Tanpa Null Coalescing
$data = [
    "Action" => "Tembak dor!"
];

if (isset($data["Action"])) {
    $action = $data["Action"];
} else {
    $action = 'Nothing Value';
}

echo $action . PHP_EOL;


// Menggunakan Null Coalescing
// hanya menggunakan ?? tanda tanya 2 kali untuk menentukan data ada atau tidak
$value = [
    "Action" => "ada apa ini",
];
$data = $value["Action"] ?? "Nothing Value";

echo $data . PHP_EOL;
