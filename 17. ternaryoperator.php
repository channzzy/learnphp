<?php

//Ternary operator
//Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statment, lalu jika benar kita ingin memberi nilai terhadap variabel = x dan jika salah diisi dengan y
//Penggunaan if statment pada kasus seperti ini bisa di persingkat menggunakn ternary operator
//Ternary operator menggunakan kunci ? dan :

//Contoh menggunakan If Statment

// $jk = "Pria";
// $hi = null;

// if($jk == "Pria"){
//     echo "Hai Brow";
// }else{
//     echo "Hai Sis";
// }
// echo $hi;

// Nah kita bisa mempersingkat 

// Kode:Teranry
$gender = "Pria";
$hi = $gender == "Pria" ? "Hai Brow" /*Nilai True*/ : "Hai Sis" /*Nilai False*/;

echo $hi;