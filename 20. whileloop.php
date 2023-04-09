<?php

//While Loop
//While loop adalah versi perulangan yang lebih sederhana dibanding for loop
//Di while loop, hanya terdapat kondisi tidak ada init statment dan post statment

// $i=0;
// while($i<=10){
//     echo "Hello ke $i" . PHP_EOL;
//     $i++;
// }

//Kode:Syntax alternatif While Loop
$i=0;
while($i <=10):
    echo "Ini Perulangan Ke $i". PHP_EOL;
    $i++;
endwhile;