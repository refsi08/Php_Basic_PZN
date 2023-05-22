<?php
$name = "Eko";

$otherName = &$name;
$otherName = "Budi";

echo $name . PHP_EOL;

// pass by reference
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);
increment($counter);
increment($counter);
increment($counter);

echo $counter . PHP_EOL;
