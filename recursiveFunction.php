<?php

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total = $total * $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

// Kode factorial loop
function factorialLoop2(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialLoop2($value - 1);
    }
}
var_dump(factorialLoop2(5));

function loop(int $value)
{
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "ini Value ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(5);
