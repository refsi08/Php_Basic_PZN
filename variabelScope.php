<?php 

$name = "Eko"; // globa scope

function sayName(){
    // echo $name; // error
    $name = "Refsi"; //local scope
}

sayName();
