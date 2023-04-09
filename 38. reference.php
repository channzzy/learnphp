<?php

//Reference
//Reference adalah mengakses variabel yang sama dengan nama variabel yang berbeda
//Analogi reference itu seperti file, jika variabel adalah file, dan value adalah isi filenya, maka reference adalah membuat shortcut terhdap file yang sama
//Saat kita mengubah isi value reference, maka secara otomatis value variabel aslinyapun berubah
//Untuk membuat reference kita bisa gunakan &

//Assign By Reference
//PHP bisa memungkinkan kita bisa membuat beberapa variabel menuju ke value yang sama

$name="chandra";

$OtherName = &$name;
$OtherName = "ardiansyah";

echo $name . PHP_EOL;

//Past By Reference
//PHP bisa mengirim data ke function dengan reference

function increment(int &$value){
    $value++;
}
$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

//Returning Reference 
//PHP juga bisa mengembalikan reference pada function
//Namun hati-hati fitur ini bisa membingungkan

function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b;