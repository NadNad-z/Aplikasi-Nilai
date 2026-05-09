<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Penilaian</title>

  <!-- Bootstrap untuk konsistensi tampilan -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS buatan sendiri -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="hasil">

<?php $page="hasil"; ?>
<?php include "menu.php"; ?>

<?php
// Ambil data dari form
$nama   = $_POST['nama'];
$npm    = $_POST['npm'];
$absen  = $_POST['absen'];
$tugas  = $_POST['tugas'];
$uts    = $_POST['uts'];
$uas    = $_POST['uas'];

// Hitung nilai akhir sesuai bobot
$nilai_akhir = ($absen * 0.10) + ($tugas * 0.20) + ($uts * 0.30) + ($uas * 0.40);

// Tentukan predikat
if ($nilai_akhir >= 80) {
    $predikat = "A";
} elseif ($nilai_akhir >= 70) {
    $predikat = "B";
} elseif ($nilai_akhir >= 60) {
    $predikat = "C";
} elseif ($nilai_akhir >= 50) {
    $predikat = "D";
} else {
    $predikat = "E";
}

// Tentukan keterangan & ucapan
if ($nilai_akhir >= 70) {
    $keterangan = "LULUS";
    $ucapan = "Hai, " . htmlspecialchars($nama) . ". Selamat kamu dinyatakan LULUS.";
} elseif ($nilai_akhir >= 60) {
    $keterangan = "MENGULANG";
    $ucapan = htmlspecialchars($nama) ." maaf kamu dinyatakan MENGULANG.";
} else {
    $keterangan = "TIDAK LULUS";
    $ucapan = htmlspecialchars($nama) . " maaf kamu dinyatakan TIDAK LULUS.";
}
?>

<div class="hasil-content text-center">
  <div class="judul-hasil">
    <img src="hasil penilaian.png" class="judul-img">
  </div>

  <div class="hasil-item">
    <div class="hasil-label">Nilai Rata-rata</div>
    <div class="hasil-value"><?= number_format($nilai_akhir,2) ?></div>
  </div>

  <div class="hasil-item">
    <div class="hasil-label">Prediksi</div>
    <div class="hasil-value"><?= $predikat ?></div>
  </div>

  <div class="hasil-item">
    <div class="hasil-label">Keterangan</div>
    <div class="hasil-value"><?= $keterangan ?></div>
  </div>
</div>

  <div class="btn-area">
  <button class="btn-hasil" onclick="window.location.href='aplikasi.php'">
    Hitung Ulang
  </button>
</div>

<div class="ucapan">
  <?= $ucapan ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
