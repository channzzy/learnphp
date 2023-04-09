<?php

//Do While Loop
//Perulangan mirip dengan while
//Perbedaannya hanya pada pengecekan kondisi
//Pengecekan kondisi di while loop dilakukan diawal sebelum perulangan dilakuakn, sedangkan di do while loop dilakukan setelah perulangan dilakukan
//Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi false

//Kode:Do While Loop

$i = 0;

do{
    echo "Hello ke $i". PHP_EOL;
    $i++;
}while($i <=10);