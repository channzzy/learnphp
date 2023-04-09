<?php

//Operator Array
//Di PHP array memiliki oeprator khusus
//Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berdeda

/* Operator Array
1. $arrayA + $arrayB(UNION) = Menggabungkan array A dan B
2. $arrayA == $arrayB(EQUALITY) = true jika array A dan B memiliki key dan value yang sama
3. $arrayA === $arrayB(IDENTITY) = true jika array A dan B memiliki key dan value yang sama dan posisi yang sama
4. $arrayA != $arrayB(INEQUALITY) = true jika array A dan B tidak sama
5. $arrayA <> $arrayB(INEQUALITY) = true jika array A dan B tidak sama
6. $arrayA !== $arrayB(NONIDENTITY) = true jika array A dan B tidak identik
*/

// Kode:Operator Array
$arrayA = [
    "name" => "Operator Array"
];
$arrayB = [
    "name2" => "JohnX"
];

$full = $arrayA + $arrayB;
var_dump($full);
$equality = $arrayA == $arrayB;
var_dump($equality);