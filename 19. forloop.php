<?php

//For Loop
//For loop adalah salah satu kata kunci yang bisa digunakan untuk perulangan
//Blok kode yang terdapat di dalam for akan selalu diulangi apabila kondisi for terpenuhi

//Syntax perulangan for
/*
for(init statment;kondisi;post statment){
    // blok perulangan
}

-Init statment akan dieksekusi hanya sekali diawal sebelum perulangan
-Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan dihentikan
-Post statment akan dieksekusi setiap kali diakhir perulangan
-Init statment, Kondisi, dan Post Statment tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true
*/

// Kode:Perulangan Tanpa Henti

// for(; ;){
//     echo "Hello World" . PHP_EOL;
// }

//Kode:Perulangan Dengan Kondisi

// $counter = 1;

// for(; $counter <=10 ;){
//     echo "Hello World ke - $counter" . PHP_EOL;
//     $counter++;
// }

//Kode:Perulangan Dengan Init Statment

// for($i=0; $i <=10 ;){
//     echo "Ini Perulangan Ke $i". PHP_EOL;
//     $i++;
// }

// //Kdoe:Perulangan Dengan Post Statment

// for($i=0; $i <=8;$i++){
//     echo "Ini Perulangan Ke $i". PHP_EOL;
// }

//Kode:Syntax alternatif For Loop
for($i=0; $i <=10;$i++):
    echo "Ini Perulangan Ke $i". PHP_EOL;
endfor;