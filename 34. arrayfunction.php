<?php

//Array Function
//Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data Array
//link dokumentasi https://www.php.net/manual/en/ref.array.php

/*Contoh Array Function
1. array_keys() : mengambil semua keys array
2. array_values() : mengambil semua values array
3. array_map() : mengubah semua data array dengan callback
4. sort() : mengurutkan array
5. rsort() : mengurutkan array terbalik
6. shuffle() : mengubah posisi data array secara random
*/

// Kode:Array Function

//array_map
$data = [1,2,3,4,5,6,7,8,9,10];
$dataResult = array_map(fn(int $value) => $value * 8, $data);
var_dump($dataResult);

//array_keys
$biodata = [
    "id" => 1,
    "nama" => "chan",
    "alamat" => "krucuk"
];
var_dump(array_keys($biodata));

//array_values
$biodata = [
    "id" => 1,
    "nama" => "chan",
    "alamat" => "krucuk"
];
var_dump(array_values($biodata));

//array_sort
$numbers = [10,9,8,7,6,5,4,3,2,1];

rsort($numbers);
var_dump($numbers);

//array_rsort
$number = [1,2,3,4,5,6,7,8,9,10];

rsort($number);
var_dump($number);



