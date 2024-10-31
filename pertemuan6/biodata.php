<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>X TKJ 1 Dan X RPL 1</title>
</head>

<body>
  <?php
  $siswa = [
    ["nama" => "Arkan", "kelas" => "X TKJ 1", "jurusan" => "TKJ", "gambar" => "<img src='foto1.jpg'>"],
    ["nama" => "Syahputra", "kelas" => "X RPL 1", "jurusan" => "RPL", "gambar" => "<img src= 'foto2.jpg'>"]
  ]
  ?>
  <?php foreach ($siswa as $s) : ?>
    <ul>
      <li>NAMA: <?= $s["nama"] ?></li>
      <li>KELAS: <?= $s["kelas"] ?></li>
      <li>JURUSAN: <?= $s["jurusan"] ?></li>
      <li>GAMBAR: <?= $s["gambar"] ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>