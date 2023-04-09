<?php

//String function
//Sebelumnya kita pernah menggunakan beberapa function bawaan dari PHP untuk manipulasi data string
//Sebenarnya masih banyak sekali function bawaan PHP yang bisa kita gunakan untuk manipulasi string
//link dokumentasi https://www.php.net/manual/en/ref.strings.php

/* Contoh String Function
1. join/implode() : menggabungkan array menjadi string
2. explode() : memecah string menjadi array
3. strtolower() : mengubah string menjadi lowercase
4. strtoupper() : mengubah string menjadi uppercase
5. substr() : mengambil sebagin string
6. trim() : menghapus whitespace di depan dan belakang string
*/

// Kode:String Function

var_dump(join(",",[1,2,3,4,5,6]));
var_dump(explode(" ","Chandra Ardiansyah"));
var_dump(strtolower("CHANDRA"));
var_dump(strtoupper("chandra"));
var_dump((substr("Chandra Ardiansyah",3,3)));
var_dump(trim("                 chan            "));
