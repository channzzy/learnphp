<?php

//Null Coalesing Operator
//Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
//Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga data tersebut null atau bukan
//Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statment dengan funciton isset($variabel)
//ifisset untuk mengecek apakah sebuah variabel ada nilainya dan tidak NULL
//Namun untungnya di php ada null coalesing operator menggunakan tanda ??

//Contoh menggunakan if

// $data=[
//     "action" => "delete",
// ];

// if(isset($data['action'])){
//     $action = $data ['action'];
// }else{
//     $action = 'nothing';
// }
// echo $action;

//Menggunakan Null Coalesing Opreator
$data = [
    "action" => "delete",
];
$action = $data['action'] ?? /*mengecek apakah datanya ada dan juga valuenya tidak null */ 'nothing';

echo $action;