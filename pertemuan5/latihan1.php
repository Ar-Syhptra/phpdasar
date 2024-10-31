<?php
// array
// variabel yang dapat memiliki banyak nilai
// array boleh memiliki tipe data yang sama

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan= ["Januari", "february", "maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump ($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan satu elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);



?>