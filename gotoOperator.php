<?php
goto lompat; // langsung loncat ke varibel lompat
echo "Asslamualaikum wr.wb" . PHP_EOL;

lompat:
echo "Ada dandi pak ?" . PHP_EOL;

// contoh goto operator di dalam perulangan

$counter = 1;

while ($counter <= 10) :
    echo "ini adalah while ke - $counter" . PHP_EOL;
    $counter++;

    if ($counter > 9) {
        goto stop;
    }
endwhile;

stop:
echo "End Loop" . PHP_EOL;
