<?php
// Kode : perulangan tanpa henti

for (;;) {  // tidak memberikan init statement; kondisi; post statement
    echo 'Hello For Loop' . PHP_EOL;
}

// Kode : Perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10;) {
    echo "Hello For Loop ke - $counter " . PHP_EOL;
    $counter++;
}

// Kode : Perulangan dengan init statement
for ($count = 1; $count <= 10;) {
    echo "For Loop Ke - $count" . PHP_EOL;
    $count++;
}

// Kode : Perulangan dengan post statement
for ($counters = 1; $counters <= 10; $counters++) {
    echo "Hello Perulangan ke - $counters" . PHP_EOL;
}

// Kode : Syntax Alternative for loop
for ($i = 1; $i <= 10; $i++) :
    echo "Syntax Alternative ke - $i" . PHP_EOL;
endfor;
