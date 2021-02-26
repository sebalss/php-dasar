<?php

$name = "Iqbal";
$age = 22;

echo "$name";
echo "\n";
echo "$age";
echo "\n";

//variable variables
$contoh = "iqbal";
$$contoh = "iskandar";

echo "Contoh : ";
echo $contoh;
echo "\n";

echo "iqbal : ";
echo $iqbal;
echo "\n";