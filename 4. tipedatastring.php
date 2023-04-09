<?php

//Single Quote(Kutip Satu)
//Untuk membuat string di PHP, kita bisa menggunakan single quote
echo 'Nama : ';
echo 'Chandra Ardiansyah';

echo "\n";

//Double Quote(Kutip Dua)
/* Selain single qoute kita bisa menggunakan double qoute, kelebihan dari double qoute adalah kita bisa menggunakan 
escape sequence untuk beberapa hal, seperti \n untuk ENTER \t untuk TAB dan lain-lain*/

echo "Nama : ";
echo "Chandra \t Ardiansyah \t Ganteng \n";

//Multiline String
/* Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan kita sebenarnya bisa menggunakan
/n sebagai ENTER, namun php memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc */

//Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual ketika enter,tab dll

echo <<< HEREDOC
Selamat datang dibelajar PHP 
dan kita masuk dalam materi tipe data string
berikut adalah pengunaan heredoc
HEREDOC;

echo "\n";
//Nowdoc sama seperti heredoc namun yang membedakan adalah newdoc tidak memiliki kemampuan parsing seperti heredoc
echo <<<'NEWDOC'
Selamat datang dibelajar PHP
dan kita masuk dalam materi tipe data string
berikut adalah pengunaan newdoc
NEWDOC;