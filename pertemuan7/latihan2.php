<?php
// cek apakah tidak ada data $_GET
if (
  !isset($_GET["nama"]) ||
  !isset($_GET["kelas"]) ||
  !isset($_GET["jurusan"])
) {
  // redirect
  header("Location: latihan1.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <ul>
    <li>
      <?= $_GET["nama"]; ?>
    </li>
    <li><?= $_GET["kelas"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
  </ul>
  <a href="latihan1.php">back</a>
</body>

</html>