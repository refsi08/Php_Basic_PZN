<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataResult = array_map(fn (int $value) => $value * 10, $data); // mengubah data array lama menjadi data array baru
var_dump($dataResult);

rsort($data); // mengurutkan data menjadi terbalik 
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

var_dump(array_keys($person));
var_dump(array_values($person));