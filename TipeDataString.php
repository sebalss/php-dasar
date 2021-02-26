<?php

//Single Quote
echo 'Nama : ';
echo 'Mochammad Iqbal Iskandar';

//double quote
echo 'Nama : ';
echo 'Mochammad Iqbal Iskandar';
echo "\n";

echo "Nama : ";
echo "Mochammad\t Iqbal\t Iskandar\n";

//

echo <<<Text
Ini adalah contoh string yang sangat panjang,
dan juga gak perlu ngetik Enter secara manual,
ini menggunakan HereDoc
Text;

echo <<<'text'
Ini adalah contoh string yang sangat panjang,
dan juga gak perlu ngetik Enter secara manual,
ini menggunakan NowDoc
text;

