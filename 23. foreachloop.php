<?php

//For Each
//Kadang kita biasa mengakses data array menggunakan perulangan
//Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
//Namun untungnya di PHP terdapat perulangan for each, yang bisa digunakan untuk mengekases seluruh data di array secara otomatis

// Kode:Tanpa For Each

// $nama = ["Chandra","Dhanis","Haikal"];

// for($i=0;$i<count($nama);$i++){
//     echo "Data ke $i = $nama[$i]". PHP_EOL;
// }

// Kode: Dengan For Each
$data = ["Chandra","Dhanis","Haikal"];

foreach ($data/*Nama Array*/ as $d/*Nama yang akan diulang*/){
    echo "Hallo $d" . PHP_EOL;
}

$data1 = [
    "id" => 1,
    "nama" => "Chandra",
    "alamat" => "Krucuk"
];

foreach($data1 as $key => $value){
    echo "$key : $value" . PHP_EOL;
}