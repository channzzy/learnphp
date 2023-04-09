<?php

/*
1.Menjadikan variabel menjadi positif : +$variabel
2.Menjadikan variabel menjadi negatif : -$variabel
3. Melakukan proses penambahan : $variabel + $variabel
4. Melakukan proses pengurangan : $variabel - $variabel
5. Melakukan proses perkalian : $variabel * $variabel
6. Melakukan proses pembagian : $variabel / $variabel
7. Mencari sisa bagi : $variabel % $variabel
8. Menggunakan pangkat : $variabel ** $variabel
*/

// Kode:Operator Aritmatika

$a = 10;
$b = 4;
//Penjumlahan
$result = $a + $b;
echo $result;

echo "\n";
//Pengurangan
$result = $a - $b;
echo $result;
echo "\n";
//Mengubah result menjadi negatif
$resultnegative = -$result;

echo $resultnegative;

echo "\n";
//Perkalian
$result = $a * $b;
echo $result;
echo "\n";
//Pembagian
$result = $a / $b;
echo $result;

echo "\n";
//Mencari Sisa Bagi
$result = $a % $b;
echo $result;
echo "\n";

//Pemangkatan
$result = $a ** $b;
echo $result;


