<?php

//Variabel function
//PHP mendukung konsep yang bernama variabel function
//Variabel function adalah kemampuan memanggil sebuah function dari value yang terdapat pada sebuah variabel
//Untuk menggunakan variabel function, kita bisa secara langsung memanggil $namaVariabel(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariabel(argument)


function foo(){
    echo "foo" . PHP_EOL;
}
function bar(){
    echo "bar" . PHP_EOL;
}

$FunctionYangAkanDiPanggil="foo";
$FunctionYangAkanDiPanggil();
$FunctionYangAkanDiPanggil="bar";
$FunctionYangAkanDiPanggil();

function getName(string $name,$filter){
    $finalname = $filter($name);
    echo "Hallo $finalname" . PHP_EOL;
}

$function1 = "getName";
$function1("Chandra","strtoupper");
$function1("Chandra","strtolower");