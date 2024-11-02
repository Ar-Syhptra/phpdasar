<?php
session_start();
require "functions.php";

//cek cookie
if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash("sha256", $row["username"])) {
    $_SESSION["login"] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit();
}

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query(
    $conn,
    "SELECT * FROM user WHERE username = '$username'"
  );

  // cek username
  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;

      //cek remember me
      if (isset($_POST["remember"])) {
        //buat cookie
        setcookie("id", $row["id"], time() + 60);
        setcookie("key", hash("sha256", $row["username"]), time() + 60);
      }

      header("Location: index.php");
      exit();
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-body-secondary">

<div class="d-flex justify-content-center align-items-center vh-100 p-3">
  <div class="card shadow" style="width: 100%; max-width: 400px;">
    <div class="card-body text-center">
      <h2 class="fw-bold display-6 mb-4">Halaman Login</h2>
      <?php if (isset($error)): ?>
        <p style="color:red; font-style:italic;">username/password salah</p>
      <?php endif; ?>
      
      <form action="" method="post">
        <div class="mb-3 text-start">
          <label for="username" class="fw-bold fs-5">Username</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="mb-3 text-start">
          <label for="password" class="fw-bold fs-5">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="mb-3 form-check text-start">
          <input type="checkbox" name="remember" id="remember" class="form-check-input">
          <label for="remember" class="form-check-label fw-bold">Remember me</label>
        </div>
        <button type="submit" name="login" class="btn btn-primary fw-bold w-100">Login</button>
      </form>
    </div>
  </div>
</div>

</body>

</html>