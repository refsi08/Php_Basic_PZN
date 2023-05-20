<?php

// function biasa
function menghitung()
{
    echo "Ayo Menghitung!" . PHP_EOL;
}


// function dalam kondisi if
$isMarried = true;
if ($isMarried) :
    function gotoMarried()
    {
        echo "Kapan Anda Nikah?" . PHP_EOL;
    }
endif;

// function dalam perulangan for
function sayHello()
{
    for ($i = 1; $i <= 10; $i++) :
        echo "Halo ini adalah function ke - $i" . PHP_EOL;
    endfor;
}

sayHello();
gotoMarried();
menghitung();
