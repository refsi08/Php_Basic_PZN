<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 75) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf, Anda tidak lulus!" . PHP_EOL;
}

// Kondisi bercabang
$mid = 50;
$uas = 60;


if ($mid >= 80 && $uas >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($mid >= 70 && $uas >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($mid >= 60 && $uas >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} elseif ($mid >= 50 && $uas >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

// Kondisi bercabang menggunakan sintak titik dua ( : )

$ulangan = 50;
$ujian = 60;


if ($ulangan >= 80 && $ujian >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($ulangan >= 70 && $ujian >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($ulangan >= 60 && $ujian >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($ulangan >= 50 && $ujian >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;
