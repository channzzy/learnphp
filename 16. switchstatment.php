<?php

//SwitchCase
//Kadang kita hanya butuh menggunakan kondisi sederhana if statment, seperti hanya menggunakan perbandingan ==
//Switch adalah statment percabangan yang sama dengan if namun lebih sederhana pembuatannya
//Kondisi Switch statment hanya untuk perbandingan ==

// Kode:Switch Statment

$nilai= "B";

// switch($nilai){
//     case "A":
//         echo "Selamat Anda Lulus Dengan Baik" . PHP_EOL;
//         break;
//     case "B":
//     case "C":
//         echo "Selamat Anda Lulus". PHP_EOL;
//         break;
//     case "D":
//         echo "Anda Tidak Lulus". PHP_EOL;
//         break;
//     default:
//     echo "Mungkin Anda Salah Jurusan". PHP_EOL;
// }

//Syntax alternatif
//Sama seperti if statment, switch statment juga bisa tanpa menggunakan {}
//Namun diakhir switch statment, harus menambahkan endswitch

switch($nilai):
    case "A":
        echo "Selamat Anda Lulus Dengan Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat Anda Lulus". PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus". PHP_EOL;
        break;
    default:
    echo "Mungkin Anda Salah Jurusan". PHP_EOL;
    endswitch;