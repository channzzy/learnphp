<?php

//Operator Penugasan
//Operator penugasan menggunakan karakter =(sama dengan)
//Operator sama dengan sudah kita gunakan ketika ingin mengubah value sebuah variabel
//Namun selain itu operasi penugasan juga bisa digunakan dalam operasi aritmatika

/*Operator Penugasan Arimatika
1. $a += $b keterangan $a = $a + $b
2. $a -= $b keterangan $a = $a - $b
3. $a *= $b keterangan $a = $a * $b
4. $a /= $b keterangan $a = $a / $b
5. $a %= $b keterangan $a = $a % $b
*/

// Kode:Penugasa Aritmatika

$total = 0;

$fruit = 10000;
$chicken = 12000;
$orangeJuice = 8000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);
