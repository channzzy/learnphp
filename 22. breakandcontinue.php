<?php

//Break & Continue
//Pada swtich statement, kita sudah mengenal kata break, yaitu untuk menghentikan case dalam switch
//Sama dengan pada perulangan, break juga digunakan untuk mengehentikan seluruh perulangan
//Namun berbeda dengan continue, continue digunakan untuk mengehentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya 

// Kode:Break

$i = 1;

while(true){
    echo "Ini adalah perulangan ke - $i".PHP_EOL;
    $i++;
    if($i > 10){
        break;
    }
}

// Kode:Continue

for($i=1;$i<=100;$i++){
    if($i % 2 == 0){
        continue;
    }
    echo "Ini adalah perulangan ke - $i".PHP_EOL;
}
