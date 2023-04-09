<?php

//Goto Operator
//Goto operator adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita 
//Fitur ini jrang digunakan karena jika terlalu banyak menggunakannya maka akan mebingungkan kode program aplikasi 
//Agar goto bisa loncat ke kode program, kita harus membuat label php dengan menggunakan nama label lalu diakhiri dengan : (colon)

//Kode:Goto Operator

goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello B" . PHP_EOL;

//Kode:Goto Operator di Loop

$i=0;
while(true){
    echo "Hello ke - $i" . PHP_EOL;
    $i++;
    if($i >= 10){
        goto end;
    }
}

end: echo "End Loop";