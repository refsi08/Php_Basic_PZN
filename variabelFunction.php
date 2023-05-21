<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

// Penggunaan Variabel Function

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Eko", "sampleFunction"); // Memanggil sebuah function dari value yang terdapat dari sebuah variabel
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
