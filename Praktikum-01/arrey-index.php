<?php

//Buat arrey//

$negara = ["indonesia","Malaysia","Singapura","Argentina","Portugal"];

//cetak satu data//
echo $negara[0];
echo "<br>";

// cetak seluruh data //
foreach($negara as $i){
    echo $i." ";
}#for i in negara:
echo "<br>";

//menambah data//
$negara[] = "Azerbaijan";
$negara[] = "mesir";

// cetak seluruh data //
foreach($negara as $i){
    echo $i." ";
}#for i in negara:
echo "<br>";

//menambah data//
$negara[3] = "Sudan selatan";
$negara[4] = "jepang";

// cetak seluruh data //
foreach($negara as $i){
    echo $i." ";
}#for i in negara:
echo "<br>";

//meghapus data//
unset($negara[5]);

// cetak seluruh data //
foreach($negara as $i){
    echo $i." ";
}#for i in negara:
echo "<br>";

// Sort//

arsort($negara);

// cetak seluruh data //
foreach($negara as $i){
    echo $i." ";
}#for i in negara:
echo "<br>";

//Shift//

array_shift($negara);
array_shift($negara);
array_shift($negara);

// cetak seluruh data //
foreach($negara as $i){
    echo $i." ";
}#for i in negara:
echo "<br>";

//unshift(menamabh data terakhir)//

array_unshift($negara,"bosnia&hergezevina");
array_unshift($negara,"Vietnam");

// cetak seluruh data //
foreach($negara as $i){
    echo $i." ";
}