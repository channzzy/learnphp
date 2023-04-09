<?php

//Funciton
//Function adalah block kode program yang akan berjalan saat dipanggil
//Sebelumnya kita sudah menggunakan function isset(),count(),dll
//Untuk membuat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung() dan diakhiri dengan block
//Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung()
//Dibahasa pemogramn lain function juga disebut method

//Kode:Function

function sayHello(){
    echo "Hello!" . PHP_EOL;
}

sayHello();
sayHello();


//Lokasi function
//PHP sangat flexible dalam pembuatan function
//Tidak seperti pada bahasa pemogramnn yang lain yang harus ada aturan lokasi dimana membuat function
//Di PHP kita bebas membuat function dimanapun, bisa dalam if statment, di dalam function, dan sebagainya
//Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka function terssebut tidak bisa digunakan

