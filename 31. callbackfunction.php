<?php

//Callback function
//Callback adalah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument
//Hal ini sebenarnya sudah kita lakukan dimateri Variabel function dan Anonymous Function
//Namun di PHP ada cara lain untuk implementasi callback, yaitu dengan menggunakan callable
//Dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable, arguments)

//Kode:Callback function

function sayHello(string $name, callable $filter){
    $FinalName = call_user_func($filter,$name);
    echo "Hallo $FinalName" . PHP_EOL;
}

sayHello("Chandra", "strtolower");
sayHello("dhanis", "strtoupper");
sayHello("Haikal", function(string $name): string{
    return strtolower($name);
});
sayHello("adrian", fn($name) => strtoupper($name));