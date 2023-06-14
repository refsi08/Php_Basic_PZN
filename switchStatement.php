<?php

$nilai = "B";

switch ($nilai) {
    case 'A':
        echo "Anda lulus dengan sangat sempurna" . PHP_EOL;
        break;
    case 'B':
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case 'C':
        echo "Anda lulus" . PHP_EOL;
        break;
    case 'D':
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        break;
}


/**
 * Kondisi di switch statement hanya untuk perbandingan ==
 */
// Syntax alternatif
switch ($nilai):
    case 'A':
        echo "Anda lulus dengan sangat sempurna" . PHP_EOL;
        break;
    case 'B':
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case 'C':
        echo "Anda lulus" . PHP_EOL;
        break;
    case 'D':
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
endswitch;
