<?php
include 'koneksi.php';
$nim=$_POST['nim']; $nama=$_POST['nama']; $jurusan=$_POST['jurusan']; $email=$_POST['email']; $no_hp=$_POST['no_hp'];
mysqli_query($koneksi, "INSERT INTO mahasiswa (nim,nama,jurusan,email,no_hp) VALUES ('$nim','$nama','$jurusan','$email','$no_hp')");
header("Location: index.php");
?>