<?php

//Is function
//PHP memiliki banyak sekali function dengan prefix is
//Function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
//link dokumentasi https://www.php.net/manual/en/ref.var.php

/* Contoh function
1. is_string : apakah tipe data string
2. is_bool : apakah tipe data bool
3. is_int : apakah tipe data int
4. is_float : apakah tipe data float
5. is_array : apakah tipe data array
6. is_callable : apakah tipe data callable
*/

// Kode: Is Function
$data = "Chan";
var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));