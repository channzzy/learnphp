<?php

//Dot Operator
//Dot operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain(bisa string atau tipe  data yang lain)
//Sebenarnya kita bisa menggunakan + untuk menambhakn string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan . (dot).

// Kode:Dot Operator

$nama = "Chandra Ardiansyah";

echo "Nama : " . $nama . PHP_EOL; //PHP_EOL adalah singkatan dari end of line yaitu karakter enter
echo "Nilai : " . 100 . "\n";

echo "Hallo Nama saya " . $nama . " Saya Mendapatkan Nilai " . 1000 . PHP_EOL;

// Konversi Ke Number Atau Sebaliknya 
//Kadang kita sering melakukan konversi tipe data string ke number (int/float) atau sebaliknya
//Di PHP untuk melakukan konversi data cukup mudah, kita hanya perlu gunakan tanda kurung(tipe data)

// Kode:Konversi

$valueString = (string)100;
var_dump($valueString) . PHP_EOL;

$valueInt = (int)"100";
var_dump($valueInt) . PHP_EOL;

$valueFloat = (float)100.11;
var_dump($valueFloat) . PHP_EOL;

//Mengakses Karakter
//String PHP sama seperti array karakter, dimana kita bisa mengkases data tiap karakternya menggunakan siku
//Sama seperti array index string dimulai dari 0
//Jika kita mengakses string lebih dari indexnya maka akan error

$nama = "Aku adalah string";

echo $nama[0] . PHP_EOL;
echo $nama[6] . PHP_EOL;
echo $nama[9] . PHP_EOL;


//Variabel Parsing (Tidak dimiliki singe qoute/nowdoc)
//Khusus string menggunakan double qoute atau heredoc, kita bisa gunakan karakter $ untuk mengakses variabel
//Ini memudahkan ketika ingin menggabungkan string dengan variabel
//Cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variabel

// Kode:Variabel Parsing
$value = "PHP koneksi hebat";
echo "Apakah anda tahu bahwa $value" . PHP_EOL;

//Curly Brace
//Kadang kita butuh menggabungkan variabel dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakana variabel parsing
//Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variabel parsing

// Kode:Curly Brace
$var = "var";

echo "This is {$var}s";