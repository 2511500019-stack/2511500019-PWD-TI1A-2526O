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