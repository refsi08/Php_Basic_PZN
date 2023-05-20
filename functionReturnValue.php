<?php

function sum(int $first, int $second)
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

// Function return value 2
function getFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$hasil = getFinalValue(50);
var_dump($hasil);

// Return type declarations => agar diketahui tipe data kembaliannya
function getFinalValue2(int $value) : string // ini adalah deklarasi type data String
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$hasil = getFinalValue2(90);
var_dump($hasil);