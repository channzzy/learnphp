<?php

//Anonymous function
//Adalah fucntion tanpa nama, di PHP biasa disebut juga closure
//Biasa digunakan sebagai argument atau sebagai value di variabel
//Function ini membuat kita bisa mengirim function sebagai argument di function lainnya

//Kode:Anonymous function

$sayHello = function(string $name){
    echo "Hello $name". PHP_EOL;
};

$sayHello("Chandra");
$sayHello("Ardinsyah");

//Kode:Anonymous Function Sebagai Argument
function sayGoodBye(string $name,$filter){
    $finalname = $filter($name);
    echo "Say Good Bye To $finalname";
}

sayGoodBye("Chandra", function(string $name): string{
    return strtoupper($name) . PHP_EOL;
});

$FilterName = function(string $name) : string{
    return strtolower($name) . PHP_EOL;
};

sayGoodBye("Dhanis",$FilterName);


//Mengakses Variabel Di Luar Anonymous Function
//Secara defualt, anonymous function tidak bisa mengakses variabel diluar function
//Jika kita ingin mengkasesnya menggunakan kata kunci use lalu diikuti variabel - variabel yang ingin kita gunakan

$FirstName = "Chandra";
$LastName = "Ardiansyah";

$sayHai = function() use($FirstName,$LastName){
    echo "Hai $FirstName $LastName";
};

$sayHai();