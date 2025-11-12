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
</section>


<?php
session_start();
<h3>Data Profil Pengunjung (Dari Form)</h3>
    $sesnim = $_SESSION["nim"]; 
    $sesnamalengkap = $_SESSION["namaLengkap"]; 
    $sestanggallahir = $_SESSION["tempatLahir"]; 
    $sestanggallahir = $_SESSION["tanggalLahir"];
    $seshobi = $_SESSION["hobi"]; 
    $sespasangan = $_SESSION["pasangan"]; 
    $sespekerjan = $_SESSION["pekerjaan"]; 
    $sesorangtua = $_SESSION["orangTua"]; 
    $seskakak = $_SESSION["kakak"]; 
    $sesadik = $_SESSION["adik"]; 
?>

