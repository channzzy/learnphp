<?php
//If statment
//Dalam PHP, if adalah salah satu kunci yang digunakan untuk percabangan
//Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
//Hampir disemua bahasa pemograman mendungukung if statment

// Syntax if statment
/*
1. if(expression)
    statment;
2. if(expression){
    statment1;
    statment2;
}
*/

// Kode:If statement

$nilai = 75;
$absen = 90;

if($nilai >=75 || $absen > 100){
    echo "Anda Lulus Brow" . PHP_EOL;
}

//Else Statment
//Blok if hanya akan mengeksekusi jika bernilai true
//Kadang kita ingin melakukan ekspresi program tertentu jika kondisi if bernilai false
//Hal ini kita bisa gunakan else statment

// Syantax else statment
/*
1. if(expression)
    statment;
    else
    statment;
2. if(expression){
    statment1;
    statment2;
}else{
    statment;
} */

// Kode:Else Statment

$nilai = 70;
$absen = 90;

if($nilai >=80 && $absen <= 90){
    echo "Selamat Anda Lulus" . PHP_EOL;
}else{
    echo "Anda Tidak Lulus" . PHP_EOL;
}

//Else If statement
//Kadang dalam if, kita butuh membuat beberapa kondisi
//Kasus seperti ini, di PHP kita bisa menggunakan Else If Statment
//Else If di PHP bisa lebih dari satu
//Kode Else If di php bisa menggunakan else if atau elseif(digabung)

// Syntax else if
/*
1. if(expression)
    statment;
    elseif(expression)
    statment;
    else
    statment;
2. if(expression){
    statment1;
    statment2;
}elseif(expression){
    statment;
}else{
    statment;
} */

// Kode:Else If statment
$nilai = 81;
$absen = 89;

if($nilai >=80 && $absen >=90){
    echo "Anda mendapatkan nilai A";
}else if($nilai >=75 && $absen >=85){
    echo "Anda mendapatkan nilai B";
}else if($nilai >=70 && $absen >=80){
    echo "Anda mendapatkan nilai C";
}else{
    echo "Nilai Anda D";
}

//Sysntax Alterantif
//Selain menggunakan {}, PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan : (titik dua)
//Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif di akhir statment
//Jika kita menggunakan syntax alternatif maka elseif penulisannya harus digabung

if($nilai >=80 && $absen >=90):
    echo "Anda mendapatkan nilai A";
elseif($nilai >=75 && $absen >=85):
    echo "Anda mendapatkan nilai B";
elseif($nilai >=70 && $absen >=80):
    echo "Anda mendapatkan nilai C";
else:
    echo "Nilai Anda D";
endif;

