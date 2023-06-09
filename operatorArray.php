 <?php

    // Menggabungkan kedua array
    $first = [
        "first_name" => "Eko"
    ];

    $last = [
        "first_name" => "Budi",
        "last_name" => "Khannedy"
    ];

    $fullName = $first + $last; // union menggabungkan array
    var_dump($fullName);


    // Membandingkan Array
    $a = [
        "firstName" => "Eko",
        "lastName" => "Khannedy"
    ];

    $b = [
        "lastName" => "Khannedy",
        "firstName" => "Eko"
    ];

    var_dump($a == $b); // true
    var_dump($a === $b); // false
    ?>