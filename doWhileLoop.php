<?php 
// jika bernilai true
$counter = 100;
do {
    echo "Perulangan Do While true ke - $counter". PHP_EOL;
    $counter--;
} while ($counter >= 1);

// jika bernilai false akan dieksekusi sekali
$counter2 = 100;
do {
    echo "Perulangan Do While false ke - $counter2" . PHP_EOL;
    $counter2++;
} while ($counter2 <= 1);