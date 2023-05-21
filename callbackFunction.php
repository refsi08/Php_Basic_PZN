<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("strtoupper", "strtoupper");

// dipanggil menggunakan anonymous function
sayHello("Eko", function (string $name): string {
    return strtoupper($name);
});

// dipanggil menggunakan arrow function
sayHello("Refsi", fn (string $name) => strtoupper($name));
