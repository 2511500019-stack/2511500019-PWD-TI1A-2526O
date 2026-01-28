<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

# hanya POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid';
    header("Location: read.php");
    exit();
}

# ambil & sanitasi
$kodedos  = bersihkan($_POST["txtKodeDos"] ?? "");
$nama     = bersihkan($_POST["txtNmDosen"] ?? "");
$alamat   = bersihkan($_POST["txtAlRmh"] ?? "");
$tanggal  = bersihkan($_POST["txtTglDosen"] ?? "");
$jja      = bersihkan($_POST["txtJJA"] ?? "");
$prodi    = bersihkan($_POST["txtProdi"] ?? "");
$nohp     = bersihkan($_POST["txtNoHP"] ?? "");
$pasangan = bersihkan($_POST["txNamaPasangan"] ?? "");
$anak     = bersihkan($_POST["txtNmAnak"] ?? "");
$ilmu     = bersihkan($_POST["txtBidangIlmu"] ?? "");

# validasi
$errors = [];

if ($kodedos == "") $errors[] = "Kode Dosen wajib diisi";
if ($nama == "") $errors[] = "Nama wajib diisi";
if ($prodi == "") $errors[] = "Prodi wajib diisi";

# jika error → PRG
if (!empty($errors)) {

    $_SESSION['old'] = [
        "kodedos"=>$kodedos,
        "nama"=>$nama,
        "alamat"=>$alamat,
        "tanggal"=>$tanggal,
        "jja"=>$jja,
        "prodi"=>$prodi,
        "nohp"=>$nohp,
        "pasangan"=>$pasangan,
        "anak"=>$anak,
        "ilmu"=>$ilmu
    ];

    $_SESSION['flash_error'] = implode("<br>", $errors);
    header("Location: edit.php?kodedos=$kodedos");
    exit();
}

# UPDATE DATA
$sql = "UPDATE biodata_dosen SET
        nama=?,
        alamat=?,
        tanggal=?,
        jja=?,
        prodi=?,
        nohp=?,
        pasangan=?,
        anak=?,
        ilmu=?
        WHERE kodedos=?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param(
    $stmt,
    "sssssssis",
    $nama,$alamat,$tanggal,$jja,$prodi,$nohp,$pasangan,$anak,$ilmu,$kodedos
);

if(mysqli_stmt_execute($stmt)){
    $_SESSION['flash_sukses']="Data berhasil diupdate";
}else{
    $_SESSION['flash_error']="Data gagal diupdate";
}

mysqli_stmt_close($stmt);
header("Location: read.php");
exit();