<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit();
}

require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <script src="js/jquery-3.7.1.min.js"></script>
  <style>
    .loader {
      width: 20px;
      position: absolute;
      top: 125px;
      left: 333px;
      z-index: -1;
      display: none;
    }
    
    @media print {
      .logout,.tambah,.form-cari,.aksi {
        display:none;
      }
    }
    
  </style>
</head>

<body>

  <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php"
  target="_blank">Cetak</a>

  <h1>Daftar Mahasiswa</h1>
  <a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan
    keyword pencarian" autocomplete="off" id="keyword" class="form-cari">
    <button type="submit" name="cari" id="tombol-cari">CARI !</button>
    <img src="img/loader.gif" class="loader">
  </form>

  <br>
  <div id="container">
    <table border="1" cellpading="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $row): ?>
        <tr>
          <td><?= $i ?></td>
          <td class="aksi">
            <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin?');">hapus</a>
          </td>
          <td><img src="img/<?= $row["gambar"] ?>" width="50"></td>
          <td><?= $row["nrp"] ?></td>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["email"] ?></td>
          <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>
  <script src="js/script.js">
  </script>
</body>

</html>