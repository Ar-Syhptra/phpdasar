<?php
$mahasiswa = [
  ["Arkansyahputra", "089637756594", "Tkj", "arkan@gmail.com"],
  ["Syhputra", "3898887", "RPL", "syhptra@gmail.com"],
  ["Erik", "6357468", "TI", "erik@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>NAMA: <?= $mhs[0]; ?></li>
      <li>NRP: <?= $mhs[1]; ?></li>
      <li>JURUSAN: <?= $mhs[2]; ?></li>
      <li>EMAIL: <?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>