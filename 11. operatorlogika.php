<?php

//Operator logika 
//Digunakan untuk membandingkan dua nilai boolean
//Hasil dari operator logika adalah boolean lagi

/*Operator Logika
1. $a && $b(AND) = true jika $a dan $b keduanya true
2. $a and $b(AND) = true jika $a dan $b keduanya true
3. $a || $b(OR) = true jika $a dan $b salah satunya true atau keduanya true
4. $a or $b(OR) = true jika $a dan $b salah satunya true atau keduanya true
5. !$a(NOT) = true jika $a dan $b bernilai false
6. $a xor $b(XOR) = true jika $a dan $b salah satu true,tapi jika keduanya true maka false
*/

// Kode:Operator Logika

//AND
var_dump(true && false);
var_dump(true AND true);

//OR
var_dump(true || false);
var_dump(true or true);

//XOR
var_dump(true xor false);
var_dump(true xor true);