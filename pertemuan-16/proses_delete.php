<?php
session_start();
require 'koneksi.php';

# validasi parameter
if(!isset($_GET['kodedos'])){
    $_SESSION['flash_error'] = "Kode dosen tidak ditemukan";
    header("Location: read.php");
    exit();
}

$kodedos = $_GET['kodedos'];

# query hapus
$sql = "DELETE FROM biodata_dosen WHERE kodedos=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt,"s",$kodedos);

if(mysqli_stmt_execute($stmt)){
    $_SESSION['flash_sukses'] = "Data berhasil dihapus";
}else{
    $_SESSION['flash_error'] = "Data gagal dihapus";
}

mysqli_stmt_close($stmt);

  redirect_ke('readbiodata.php');