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
$value = [
    "Action" => "ada apa ini",
];
$data = $value["Action"] ?? "Nothing Value";

echo $data . PHP_EOL;
