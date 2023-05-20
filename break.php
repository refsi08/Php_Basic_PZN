<?php

$counter = 1;

while ($counter <= 10) :
    echo "ini adalah while ke - $counter" . PHP_EOL;
    $counter++;

    if ($counter > 9) {
        break;
    }
endwhile;
