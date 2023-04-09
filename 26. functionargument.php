<?php

//Function Argument
//Kita bisa mengirim informasi ke function yang ingin kita panggil
//Untuk melakukan hal tersebut kita perlu menambahkan argument atau parameter di function
//Cara membuat argument sama dengan membuat variabel
//Argument ditempatkan dalam kurung() dideklrasi function
//Argument bisa lebih dari satu, jika ada dua argument maka harus dipisah dengan , (koma)

//Kode:Function Argument

function sayHello($name, $message ="Ganteng") {
    echo "Hello $name $message" . PHP_EOL;
}

sayHello("Chandra $message");
// sayHello("Dhanis");

//Default Argument Value
//PHP mendukung default argument value
//Fitur ini memungkinkan jika ketika kita memanggil function tetapi tidak memanggil parameternya, maka kita bisa menentukan data defaultnya apa

//Kode:Default Argument Value

function sayHai($name="Ganteng") {
    echo "Hello $name". PHP_EOL;
}

sayHai();
sayHai("Chandra");

//Kesalahan Default Argument Value
//Default argument value bisa disimpan diargument manapun
//Namun jika argument lebih dari satu dan menempatkan default argument pada awal argument maka itu tidak terlalu berguna
 

//Type Declaration
//Sama seperti variabel, argument di PHP kita bisa masukan data yang dinamis
//Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
//Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
//Jika tipe data value tidak sesuai, maka akan terjadi error
//Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int tapi kita mengirim string makan PHP akan otomatis mengkonversi string tersebut menjadi int

/*Valid Types
1. Class/Interface : Parameter harus class/interface
2. self : Parameter harus sama dengan class dimana function dibuat
3. array : Parameter harus array
4. callable : Parameter harus callable
5. bool : Parameter harus bool
6. float : Parameter harus float
6. int : Parameter harus int
7. string : Parameter harus string
8. interable : Parameter harus array atau Traversable
9. object : Parameter harus object
*/


function sum(int $bil1,int $bil2){
    $total = $bil1 + $bil2;
    var_dump($total) . PHP_EOL;
}

sum("2","10");
sum(100,100);
sum(true,false);

//Variabel-length Argument List
//Variabel length argument list merupakan kemampuan dimana kita bisa membuah sebuah parameter yang menerima banyak value
//Variabel length argument list otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke function
//variabel length argument list hanya bisa dilakukan di argument posisi terakhir
//Untuk membuat variabel length argument list, kita bisa menggunakan tanda ...(tiga kali) sebelum nama argument

function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total: " . implode/*untuk konversi array ke string*/(" + ",$values) . " = $total" . PHP_EOL;
}
$values=[8,9,10,11,12,13,14];

sumAll(...$values);
sumAll(1,2,3,4,5,6,7,8,);