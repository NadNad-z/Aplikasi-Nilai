<!DOCTYPE html>
<html lang="id">
<head>

  <?php $page="profil"; ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Profil</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<body class="profil">
<?php include "menu.php"; ?>

<div class="judul-profil">
   <img src="profil pembuat.png" class="judul-img">
</div>

<div class="profil-content">

  <!-- FOTO -->
  <div class="foto-box">
    <img src="foto.png" class="profile-img">
  </div>

  <!-- DATA -->
  <div class="profil-box">

    <div class="profil-item">
      <div class="profil-label">Nama</div>
      <div class="profil-value">Yulia Nada Zahrah</div>
    </div>

    <div class="profil-item">
      <div class="profil-label">NPM</div>
      <div class="profil-value">2410020111</div>
    </div>

    <div class="profil-item">
      <div class="profil-label">Kelas</div>
      <div class="profil-value">4A SI REG BJB</div>
    </div>

    <div class="profil-item">
      <div class="profil-label">Mata Kuliah</div>
      <div class="profil-value">Pemrograman Web 2</div>
    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>