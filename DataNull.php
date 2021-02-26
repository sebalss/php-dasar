<?php

$name = "Iqbal";
$name = NULL;

$age = NULL;

echo "Name : ";
echo "$name";
echo "\n";

echo "Age : ";
echo "$age";
echo "\n";

//Check data null
echo "Is Name Null?";
var_dump(is_null($name));
echo "\n";

//menghapus Variable
$contoh = "Iqbal";
unset($contoh);

$contoh = "Iskandar";
var_dump(isset($contoh));
