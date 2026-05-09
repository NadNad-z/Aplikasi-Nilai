<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body class="aplikasi">

<?php $page="app"; ?>
<?php include "menu.php"; ?>

<!-- JUDUL FOTO -->
<div class="judul-input">
   <img src="input nilai.png" class="judul-input-img">
</div>

<!-- FORM -->
<div class="input-content">

<form action="hasil.php" method="POST">

   <div class="profil-item">
      <div class="input-label">Nama Lengkap</div>

      <input type="text"
      name="nama"
      class="profil-input"
      placeholder="Input nama mahasiswa"
      required>
   </div>

   <div class="profil-item">
      <div class="input-label">NPM</div>

      <input type="text"
      name="npm"
      class="profil-input"
      placeholder="Input NPM mahasiswa"
      required>
   </div>

   <div class="profil-item">
      <div class="input-label">Nilai Absen</div>

      <input type="number"
      name="absen"
      class="profil-input"
      min="0"
      max="100"
      required>
   </div>

   <div class="profil-item">
      <div class="input-label">Nilai Tugas</div>

      <input type="number"
      name="tugas"
      class="profil-input"
      min="0"
      max="100"
      required>
   </div>

   <div class="profil-item">
      <div class="input-label">Nilai UTS</div>

      <input type="number"
      name="uts"
      class="profil-input"
      min="0"
      max="100"
      required>
   </div>

   <div class="profil-item">
      <div class="input-label">Nilai UAS</div>

      <input type="number"
      name="uas"
      class="profil-input"
      min="0"
      max="100"
      required>
   </div>

   <!-- BUTTON -->
   <div class="btn-area">

      <button type="submit" class="btn-custom">
         Proses
      </button>

      <button type="reset" class="btn-custom">
         Reset
      </button>

   </div>

</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>