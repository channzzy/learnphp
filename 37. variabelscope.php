<?php

//Variabel Scope
//Di PHP kita bisa membuat variabel dimanapun yang kita mau
//Scope variabel adalah dibagian mana saja sebuah variabel bisa diakses
/*PHP memiliki tiga jenis variabel scope:
    1.global
    2.local
    3.static
*/

//Global Scope
//Variabel yang dibuat diluar function memiliki scope global
//Variabel di scope global hanya bisa diakses dari luar function
//Artinya didalam function, kita tidak bisa mengakses variabel di global scope

// Kode:Global Scope

$name1="chandra"; // global scope 

function sayName(){
    echo $name1. PHP_EOL; //error
}

sayName();

//Kode:Local Scope
//Variabel yang dibuat didalam function memiliki scope local
//Variabel di scope local hanya bisa diakses dari dalam function itu sendiri
//Artinya variabel tersebut tidak bisa diakses dari luar function ataupun function lain

//Kode:Local Scope

function createName(){
    $name = "chandra"; // local scope
}

createName();
echo $name. PHP_EOL; // error

//global Keyword
//Namun jika kita ingin mengakses variabel diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
//Dengan menggunakan kata kunci global, maka kita bisa mengakes variabel yang ada di global scope dari dalam function

$name="chandra"; // global scope 

function sayName2(){
    global $name;
    echo $name. PHP_EOL; //error
}

sayName2();

//$GLOBAL
//Selain menggunakan global keyword, setiap variabel yang dibuat di global scope, secara otomatis akan disimpan didalam array $GLOBAL oleh PHP
//Jadi kita bisa menggunakan $GLOBAL variabel dengan key nama variabelnya dari dalam function jika ingin mengakses global variabel
//$GLOBAL variabel adalah variabel yang bersifat superglobal, artinya bisa diakses dari scope manapun

$name3 = "Ardiansyah";

function sayName3(){
    echo $GLOBALS['name3'].PHP_EOL;
}

sayName3();

//Static Scope
//Secarea default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
//Jika sebuah function selesai dieksekusi, maka siklus hidup local variabel selesai
//PHP memiliki scope yang bernama static
//Static scope hanya bisa di set ke local variabel
//Saat kita membuat sebuah local variabel menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
//Artinya jika function tersebut dieksekusi lagi, maka static variabel tersebut akan memiliki value dari sebelumnya

function increment(){
    static $counter = 1;

    echo "counter = $counter".PHP_EOL;
    $counter++;
}
increment();
increment();