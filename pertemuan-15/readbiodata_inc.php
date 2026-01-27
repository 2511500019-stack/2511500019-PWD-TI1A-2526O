<?php
require 'koneksi.php';

$fieldBiodata = [
      "nim" => ["label" => "NIM:", "suffix" => ""],
      "nama_lengkap" => ["label" => "Nama Lengkap:", "suffix" => " &#128526;"],
      "tempat_lahir" => ["label" => "Tempat Lahir:", "suffix" => ""],
      "tanggal_lahir" => ["label" => "Tanggal Lahir:", "suffix" => ""],
      "hobi" => ["label" => "Hobi:", "suffix" => " &#127926;"],
      "pasangan" => ["label" => "Pasangan:", "suffix" => " &hearts;"],
      "pekerjaan" => ["label" => "Pekerjaan:", "suffix" => " &copy; 2025"],
      "nama_orang_tua" => ["label" => "Nama Orang Tua:", "suffix" => ""],
      "nama_kakak" => ["label" => "Nama Kakak:", "suffix" => ""],
      "nama_adik" => ["label" => "Nama Adik:", "suffix" => ""],
    ];

$sql = "SELECT * FROM tbl_biodata ORDER BY id DESC";
$q = mysqli_query($conn, $sql);
if (!$q) {
  echo "<p>Gagal membaca data tamu: " . 
  htmlspecialchars(mysqli_error($conn)). "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data tamu yang tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {
   $arrBiodata = [
  "nim" => $row['nim'],
  "nama_lengkap" => $row['nama_lengkap'],
  "tempat_lahir" => $row['tempat_lahir'],
  "tanggal_lahir" => $row['tanggal_lahir'],
  "hobi" => $row['hobi'],
  "pasangan" => $row['pasangan'],
  "pekerjaan" => $row['pekerjaan'],
  "nama_orang_tua" => $row['nama_orang_tua'],
  "nama_kakak" => $row['nama_kakak'],
  "nama_adik" => $row['nama_adik'],
];
    echo tampilkanBiodata($fieldBiodata, $arrBiodata);
  }
}
?>