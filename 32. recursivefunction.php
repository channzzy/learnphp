<?php

//Recursive function 
//Recursive function adalah kemampuan memanggil function dirinya sendiri
//Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya function kasus factorial


//Kode : Factorial loop

function factorialLoop(int $value){
    $total = 1;
    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(6));
var_dump(1*2*3*4*5*6);


//Kode: Factorial Recursive Function

function factorialRecursive(int $value){
    if($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(10));
var_dump(1*2*3*4*5*6*7*8*9*10);


//Problem Recursive Function
//Walaupun recursive function sanagt menarik, namun kita perlu berhati-hati
//Jika recursive function terlalu dalam, maka akan da kemungkinan terjadi memory overflow, yaitu eror dimana memory terlalu banyak digunakan di PHP
//Kenapa problem ini bisa terjadi? Karena ketika kita memanggil function di PHP akan menyimpannya dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk terus, dan jika melewati batas maka akan terjadi eror memory

