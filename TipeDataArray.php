<?php

$values1 = array(10,9,8,7.5);
$values2 = ["Mochammad", "Iqbal", "Iskandar"];

var_dump($values1);
var_dump($values2);

var_dump($values2[1]); //menampilkan data pada index 1

$values2[1] = "Fachry"; //mengganti value pada index 1 menjadi dari "Iqbal" ke "Fachry"
var_dump($values2[1]);

unset($values2[1]);//menghapus isi index[1] serta menghapus index nya
var_dump($values2);

$values2[] = "Dinata";//memasukkan data pada array dengan urutan terbelakang
var_dump($values2);
var_dump(count($values2));//menghitung jumlah data yang ada pada array $values2

//type 1 of MAP (Nested Array)
$aldo = array(
    "id" => "Aldo",
    "name" => "Ronaldo Hutasoit",
    "age" => 24,
    "address" => array(
        "city" => "Medan",
        "country" => "Indonesia"
    )
);

var_dump($aldo["id"]);
var_dump($aldo["address"]["country"]);

//type 2 of MAP (Nested Array)
$aldi = [
    "id" => "Aldi",
    "name" => "Rinaldi Setyawan",
    "age" => 25,
    "address" => [
        "city" => "Medan",
        "country" => "Indonesia"
    ]
];

var_dump($aldi);
