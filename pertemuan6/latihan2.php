<?php
// $mahasiswa = [
//   ["Arkan", "458545", "arkan@gmail.com", "TKJ"],
//   ["Syahputra", "4364368", "syhptra@gmail.com", "RPL"]
// ];

// array associate
// definisi sama
// keynya adalah string yang kita buat sendiri
$mahasiswa = [
  [
    "nama" => "Arkan",
    "nrp" => "28337428",
    "email" => "arkan@gmail.com",
    "jurusan" => "tkj"
  ],
  [
    "nama" => "Syahputra",
    "nrp" => "34743634",
    "email" => "syhptra@gmail.com",
    "jurusan" => "rpl",
  ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li> <?= $mhs["nama"] ?> </li>
      <li><?= $mhs["nrp"] ?></li>
      <li><?= $mhs["email"] ?></li>
      <li><?= $mhs["jurusan"] ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>