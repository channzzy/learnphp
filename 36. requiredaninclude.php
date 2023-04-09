<?php

//Require dan Include
//Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file
//Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk disatu file
//PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain
//Lantas apa bedanya require dan include
//Pada require, jika file yang kita ambil tidak ada, maka akan terjadi eror dan program terhenti
//Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program tetap dilanjutkan

// Kode:Include

include "function/myfunctionSALAH.php";

echo sayHello("Chandra","Ardiansyah");

//Posisi Require dan Include
//Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan include sesuai dengan yang kita inginkan
//Misal kita sampai salah menempatkan posisi require dan include, bisa jadi malah memanggil function yang belum ada

//require_once dan include_once 
//Function require dan include akan selalu megambil file yang kta inginkan
//Jika kita beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali-kali pula kita ambil
//Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function sehingga jika diambil berkali-kali akan menyebabkan error redeclare function
//Untungnya di PHP terdapat function require_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah mengammbil file yang sama, maka tidak akan diambil lagi