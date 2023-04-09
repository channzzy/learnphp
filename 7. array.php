<?php

//Array adalah tipe data berisikan kosong atau banyak data
//Array di PHP bisa berisikan data dengan jenis berbeda-beda
//Array di PHP memiliki panjang dinamis, artinya kita bisa menambahkan data ke Array sebanyak-banyaknya
//Index array di PHP dimulai dari 0

// Kode:Array

// $number = array(1,2,3,4);
// var_dump($number);

// $name = ["Chandra","Dhanis","Haikal"];
// print_r($name);

/*Operasi dalam array
1.$array[index] : untuk mengakses data diarray pada nomer index
2.$array[index] = value : untuk menambah data array pada nomor index dengan value baru 
3.$array[]=value : untuk menambah data array pada posisi paling belakang
4.unset($array[index]) : untuk menghapus data array, index otmatis hilang dari array
5.count($array): untuk mengambil total array
*/

//Kode:Operasi Array

// $name = ["Chandra","Dhanis","Haikal"];
// // var_dump($name[0]);

// echo "\n";
// // $name[2] = "Arip";
// // $name[] = "Rasya";
// // unset($name[2]);
// var_dump(count($name));

//Array Sebagai Map
//Map yaitu asosiasi antara key dan value
//Namun di PHP, Map bisa dibuat menggunakan Array
//Secara default array akan menggunkan index(number) sebagai key dan valuenya kita bebas memasukan data ke dalam array
//Namun index dalam array tidak harus int kita bisa mengubahnya dengan string
//Hal tersebut terlihat seperti Map dibahasa pemograman lain


// Kode:Memmbuat Map

// $biodata = array(
//     "id" => 1,
//     "name" => "Chandra",
//     "email" => "chandra@gmail.com",
//     "address" => "P.O. Box 7500, Mumbai"
// );
// var_dump($biodata);

// echo "\n";

// $biodata2 =[
//     "id" => 1,
//     "name" => "Dhanis",
//     "email" => "dhanis@gmail.com",
//     "address" => "P.O. Box 7500, Mumbai"
// ];

// var_dump($biodata2);


//Array dalam array

// Kode:array di dalam array

$biodata = [
    "id" => 1,
    "name" => "Chandra",
    "email" => "chandra@gmail.com",
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($biodata);