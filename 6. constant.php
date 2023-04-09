<?php

//Variabel di PHP sifatnya mutabel artinya bisa berubah
//Jika kita ingin membuat variabel yang immutabel(tidak bisa diubah) maka dalam php tidak bisa
//oleh karena itu kita menggunakan constant
//Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
//Untuk menggunakan constant kita bisa menggunkan function define("Nama Constant","Value")
//Best pratice pembuatan constant menggunakan UPPER_CASE 

// Kode:Constant

define("AUTHOR","Chandra Ardiansyah");
define("APP_VERSION", 100);

echo "Author : ";
echo AUTHOR;
echo "\n";
echo "App Version : ";
echo APP_VERSION;
echo "\n";