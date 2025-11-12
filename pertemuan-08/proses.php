<section id="about">
  <h2>Tentang Saya</h2>
  <p><strong>NIM:</strong> 0344300002</p>
  <p><strong>Nama Lengkap:</strong> Yohanes Setiawan Japriadi</p>
  <p><strong>Tempat Lahir:</strong> Pangkalpinang</p>
  <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
  <p><strong>Hobi:</strong> Coding dan musik</p>
  <p><strong>Pasangan:</strong> Belum ada</p>
  <p><strong>Pekerjaan:</strong> Mahasiswa</p>
  <p><strong>Nama Orang Tua:</strong> Bapak Setiawan & Ibu Maria</p>
  <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
  <p><strong>Nama Adik:</strong> Beni Setiawan</p>
<?php
session_start();
<h3>Data Profil Pengunjung (Dari Form)</h3>
    <p><strong>NIM:</strong> <?= $_SESSION["nim"]; ?></p>
    <p><strong>Nama Lengkap:</strong> <?= $_SESSION["namaLengkap"]; ?></p>
    <p><strong>Tempat Lahir:</strong> <?= $_SESSION["tempatLahir"]; ?></p>
    <p><strong>Tanggal Lahir:</strong> <?= $_SESSION["tanggalLahir"]; ?></p>
    <p><strong>Hobi:</strong> <?= $_SESSION["hobi"]; ?></p>
    <p><strong>Pasangan:</strong> <?= $_SESSION["pasangan"]; ?></p>
    <p><strong>Pekerjaan:</strong> <?= $_SESSION["pekerjaan"]; ?></p>
    <p><strong>Nama Orang Tua:</strong> <?= $_SESSION["orangTua"]; ?></p>
    <p><strong>Nama Kakak:</strong> <?= $_SESSION["kakak"]; ?></p>
    <p><strong>Nama Adik:</strong> <?= $_SESSION["adik"]; ?></p>
?>
</section>