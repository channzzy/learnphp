<?php

//Arrow Function
//Arrow function diperkenalkan pada PHP 7.4 sebagai alternatif anonymous function yang lebih sederhana
//Secara garis besar arrow funciton dan anonymous function adalah dua hal yang sama
//Hal yang membedakan di arrow function adalah, secara otomatis variabel diluar closure bisa digunakan, lain halnya dengan anonymous function yang harus menggunakan kata kunci use
//Pembuatan arrow function tidak menggunakan kata kunci function melainkan fn()
//Arrow function dikhususkan untuk pembuatan function sederhana

//Kode:Arrow function

$FirstName="Chandra";
$LastName = "Ardiansyah";

$FullName = fn() => "Hello $FirstName $LastName" . PHP_EOL;

echo $FullName();



