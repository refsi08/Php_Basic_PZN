<?php

// -------------Array
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

// mengecek data nilai index ke 0
var_dump($names[0]);

// menambahkan nilai budi ke index 0
$names[0] = "Budi";
var_dump($names);

// menghapus nilai dari index 0
unset($names[1]);
var_dump($names);

// menambahkan nilai akhir
$names[] = "Joko";
var_dump($names);

// menghitung data array
var_dump(count($names));




// --------------Array Map
// cara 1

$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30
);
var_dump($eko);

// cara 2
$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35
];
var_dump($budi);

// --------------Array di Dalam Array
// cara 1
$ekoArray = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30,
    "address" => array( //nested array (array dalam array)
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($ekoArray["address"]["country"]);

// cara 2
$budiArray = array(
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => array( //nested array (array dalam array
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
