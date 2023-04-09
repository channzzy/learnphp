<?php
// <!-- Terdapat 2 jenis tipe data:
// int : bilangan bulat
// float: bilangan pecahan -->

// <!-- Di php agar angka mudah di baca bisa menggunakan _ -->

// Kode:Tipe Data Integer

//var_dump merupakan function yang digunakan untuk ngedump sebuah data
//biasanya juga digunakan untuk menampilkan code dengan tipe datanya
echo "Desimal : ";
var_dump(1234);
echo "Octal :";
var_dump(0123);
echo "Hexadecimal :";
var_dump(0x1A);
echo "Binary :";
var_dump(0b1111111);
echo "Underscore di number :";
var_dump(1_123_456);

//Kode:Tipe Data Float
//untuk koma pada php kita bisa menggunakan .

echo "Floating Point: ";
var_dump(1.234);
echo "Floating Point dengan E notation Plus(1.2 x 1000) : ";
var_dump(1.2e3);
echo "Floating Point dengan E notation Minus(7 x 0.001) : ";
var_dump(7e-4);
echo "Underscore di float : ";
var_dump(1_234.567);