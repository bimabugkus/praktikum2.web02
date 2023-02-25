<?php


//variabel

$nama = "Bima";
$usai = 17;

echo $nama; #print(nama)
echo "<br>";
echo $usai;
echo "<br>";

echo "nama saya adalah ".$nama. ",saya berusai".$usai;
echo "<br>";
echo "<br>";

// variabel sistem

echo "Document Root :" .$_SERVER["Document_root"]."<br>";
echo "Nama file :".$_SERVER["PHP_SELF"]."<br>";

//konstanta

define("STTNF","Sekolah tinggi terpadu nurul fikri");#const nama
?>