<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
$result = mysqli_query($conn, "SELECT * FROM mahasiswa")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CARA 1</title>
</head>

<body>
  <table border="1" cellpading="10" cellspacing="o">
    <thead>
      <td>NO</td>
      <td>NAMA</td>
      <td>NRP</td>
      <td>EMAIL</td>
      <td>JURUSAN</td>
    </thead>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tbody>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["nrp"]; ?></td>
          <td><?= $row["email"]; ?></td>
          <td><?= $row["jurusan"]; ?></td>
        </tr>
      </tbody>
      <?php $i++; ?>
    <?php endwhile; ?>
  </table>
</body>

</html>