<?php
include 'koneksi.php';
$id=$_POST['id']; $nim=$_POST['nim']; $nama=$_POST['nama']; $jurusan=$_POST['jurusan']; $email=$_POST['email']; $no_hp=$_POST['no_hp'];
mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', email='$email', no_hp='$no_hp' WHERE id='$id'");
header("Location: index.php");
?>