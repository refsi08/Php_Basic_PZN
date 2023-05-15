<?php 
// merubah nilai data menjadi null
$name = "Refsi Maulana";
$name = null;

$age = 24;

echo "Nama : "; // output null
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";

// Kode mengecek null
echo "Is name null ?  : ";
var_dump(is_null($name));
echo "\n";

// Menghapus variabel contoh di variabel contoh
$contoh = "Eko";
unset($contoh);

// mengecek variabel dan datanya ada atau tidak
$contoh = "Refsi";
var_dump(isset($contoh));
?>