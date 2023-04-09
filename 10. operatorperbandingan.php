<?php

//Operator Perbandingan
//Digunakan untuk membandingkan dua value
//Hasil operator perbandingan adalah antara true(jika benar) dan false(jika salah) (boolean)

/* Opeator Perbandingan
1. $a == $b(Sama Dengan) : true jika $a sama dengan $b setelah dilakukan konversi data
2. $a === $b(Identik) : true jika $a sama dengan $b dan memiliki tipe data yang sama
3. $a != $b(Tidak Sama Dengan) : true jika $a tidak sama dengan $b setelah dilakukan konversi data
4. $a <> $b(Tidak Sama Dengan) : true jika $a tidak sama dengan $b setelah dilakukan konversi data
5. $a !== $b(Tidak Identik) : true jika $a tidak sama dengan $b atau tidak sama tipe data
6. $a < $b(Kurang Dari) : true jika $a kurang dari $b
7. $a <= $b(Kurang Dari Dan Sama Dengan) : true jika $a kurang dari atau sama dengan $b
8. $a > $b(Lebih Dari) : true jika $a lebih dari $b
9. $a >= $b(Kurang Dari Dan Sama Dengan) : true jika $a lebih dari atau sama dengan $b
*/

$a = 10;
$b = 20;
$c = 5;
$d= 5;
$e = "5";
//Sama Dengan
$result = $a == $b;
var_dump($result);
echo "\n";
//Identik
$result = $c === $d;
var_dump($result);
echo "\n";
//Tidak Sama Dengan
$result = $c != $a;
var_dump($result);
echo "\n";
//Tidak Identik
$result = $c !== $e;
var_dump($result);
echo "\n";
//Kurang Dari
$result = $c < $e;
var_dump($result);
echo "\n";
//Kurang Dari Sama Dengan
$result = $c <= $e;
var_dump($result);
echo "\n";
//Lebih Dari
$result = $a > $d;
var_dump($result);
echo "\n";
//Lebih Dari Sama Dengan
$result = $c >= $e;
var_dump($result);
echo "\n";
