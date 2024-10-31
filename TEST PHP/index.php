<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEST</title>
</head>

<body>
  <table border="1" cellpading="10" cellspacing="0">
    <?php $i = 1; ?>
    <tr>
      <th>NO</th>
      <th>NAMA</th>
      <th>NRP</th>
      <th>EMAIL</th>
      <th>JURUSAN</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["nrp"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>