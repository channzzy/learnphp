<?php

//Increment dan Decrement
//PHP mendukung untuk menaikan atau menurunkan data number sejumlah 1 angka
//Ini bisa mempersingkat kita ketika ingin menaikan data

/* Operator Increment dan Decrement
1. $a++(Post Increment) = Kembalikan $a lalu naikkan 1 angka
2. ++$a(Pre Increment) = Naikan $a satu angka, lalu kembalikan $a
3. $a++(Post Decrement) = Kembalikan $a lalu turunkan 1 angka
4. ++$a(Pre Decrement) = Turunkan $a satu angka, lalu kembalikan $a
*/

// Kode: Incrmenet Dan Decrement

$a = 10;
$b = $a++;

var_dump($a);
var_dump($b);
