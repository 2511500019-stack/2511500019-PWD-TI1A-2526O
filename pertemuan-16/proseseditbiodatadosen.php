<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

# hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('index.php#about');
}

# ambil & bersihkan input
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

# VALIDASI
$errors = [];

if ($kodedos == '') $errors[] = "Kode Dosen wajib diisi";
if ($nama == '')    $errors[] = "Nama wajib diisi";
if ($prodi == '')   $errors[] = "Prodi wajib diisi";

# jika ada error → PRG
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
    redirect_ke("index.php#about");
}

# QUERY UPDATE
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

# eksekusi
if(mysqli_stmt_execute($stmt)){
    $_SESSION['flash_sukses']="Data berhasil diupdate";
}else{
    $_SESSION['flash_error']="Data gagal diupdate";
}

mysqli_stmt_close($stmt);
redirect_ke("index.php#about");