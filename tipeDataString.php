<?php 
// String
// single quote

echo 'Nama :';
echo 'Refsi Maulana Siregar';
echo "\n";

// double quote

echo "Nama : ";
echo "Refsi Maulana ";
echo "\n";

// enter
echo "\n";  // Benar
echo '\n';  // Salah 

// Multiline String
// 1. Heredoc
echo "\n";
echo <<<ENTER
Ini adalah contoh string yang sangat 
panjang, dan juga gak perlu ngetik ENTER secara 
manual, "Bisa quote" juga
ENTER;

// 2. Nowdoc
echo "\n";
echo <<<'ENTER'
Ini adalah contoh string yang sangat 
panjang, dan juga gak perlu ngetik ENTER secara 
manual, "Bisa quote" juga
ENTER;