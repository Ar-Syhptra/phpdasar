<?php
// $_GET
$siswa = [
  ["nama" => "Arkan", "kelas" => "X TKJ 1", "jurusan" => "TKJ", "gambar" => "<img src='foto1.jpg'>"],
  ["nama" => "Syahputra", "kelas" => "X RPL 1", "jurusan" => "RPL", "gambar" => "<img src= 'foto2.jpg'>"]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h1>DAFTAR Mahasiswa</h1>
  <ul>
    <?php foreach ($siswa as $sws): ?>
      <li>
        <a href="latihan2.php?nama=<?= $sws["nama"]; ?>&kelas=<?= $sws["kelas"]; ?>&jurusan=<?= $sws["jurusan"]; ?>">
          <?= $sws["nama"]; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>