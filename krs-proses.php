<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$kodemk = $_POST['kodemk'];
$namamk = $_POST['namamk'];
$jumlahsks = $_POST['jumlahsks'];

$mahasiswa = "INSERT INTO mahasiswa VALUES('$npm','$nama','$jurusan','$alamat')";
$matakuliah = "INSERT INTO matakuliah VALUES('$kodemk','$namamk','$jumlahsks')";
$krs = "INSERT INTO krs VALUES(NULL,'$npm','$kodemk')";


if ($koneksi->query($mahasiswa) === TRUE && $koneksi->query($matakuliah) === TRUE && $koneksi->query($krs) === TRUE){
    // echo "Data berhasil disimpan ke database pertama";
    $message = "Data berhasil ditambahkan";
    $message = urlencode($message);
    header("Location:index.php?message={$message}");
} else {
    // echo "Error: " . $sql1 . "<br>" . $conn1->error;
    $message = "Data gagal ditambahkan";
    $message = urlencode($message);
    header("Location:add.php?message={$message}");
}