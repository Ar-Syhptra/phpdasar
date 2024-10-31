<?php
require 'functions.php';
// ambil data dari url dan sanitasi
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = '$id'")[0]; // Menggunakan tanda kutip
if (isset($_POST["submit"])) {
  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('Data berhasil diubah');
    document.location.href='index.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diubah');
    document.location.href='index.php';
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
    <ul>
      <li>
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
      </li>
      <li>
        <label for="nama">NAMA :</label>
        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
      </li>
      <li>
        <label for="email">EMAIL :</label>
        <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
      </li>
      <li>
        <label for="jurusan">JURUSAN :</label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
      </li>
      <li>
        <label for="gambar">GAMBAR :</label><br>
        <img src="img/<?= $mhs['gambar']; ?>" width="50"><br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">UBAH DATA!</button>
      </li>
    </ul>
  </form>

</body>

</html>