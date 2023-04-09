<?php

//Function Return Value
//Secara default function itu tidak menghasilkan value apapun, namun jika kita ingin, kota bisa membuat function mengembalikan nilai
//Dan didalam block function untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti data yang ingin dihasilkan
//Kita hanya bisa mengembalikan 1 data disebuah function, tidak bisa lebih dari itu

//Kode:Function Return Value
//  function sum(int $first, int $second){
//     return $first + $second;
//  }
//  $total = sum(100,100);
//  var_dump($total);

 //Kode:Function Return Value(2)

 function getFinalValue(int $value){
    if($value >= 80){
        return "Nilai Sangat Bagus";
    }else if($value >= 70){
        return "Nilai Cukup Bagus";
    }
    else if($value >= 60){
        return "Nilai Kurang Bagus";
    }
    else{
        return "Anda perlu belajar lagi";
    }
 }
 $score = getFinalValue(60);
 var_dump($score);

 //Return Type Declarations
//Sama seperti pada argument, pada return valuepun kita bisa menentukan tipe datanya
//Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga menjaga jangan sampai kita mengembalikan tipe data yang salah di fucntion
//Untuk Mendeklarasikan tipe data kembalian function, setelah kurung() tambahkan : tipe data kembaliannya

//Kode:Return Type Declarations
function sum(int $first, int $second): int
{
    return $first + $second;
 }
 $total = sum(100,100);
 var_dump($total);