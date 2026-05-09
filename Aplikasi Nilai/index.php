<!DOCTYPE html>
<html lang="id">
<head>

  <?php $page="home"; ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<body class="index">

<!-- MENU -->
<?php include "menu.php"; ?>

<!-- CONTENT TENGAH -->
<div class="center-content">

  <!-- GAMBAR SELAMAT DATANG -->
  <img src="selamat datang.png" class="welcome-img">

  <!-- DESKRIPSI -->
  <p class="desc">
    Aplikasi ini digunakan untuk menghitung nilai akhir mahasiswa
    berdasarkan nilai absen, tugas, UTS, dan UAS.
  </p>

  <!-- BUTTON -->
  <a href="aplikasi.php" class="btn btn-custom">
    Mulai Menghitung Nilai
  </a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>