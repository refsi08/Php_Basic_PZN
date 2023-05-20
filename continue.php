<?php

for ($counter = 1; $counter <= 20; $counter++) :
    if ($counter % 2 == 0) {
        continue;
    }

    echo "Counter ke - $counter" . PHP_EOL;
endfor;
