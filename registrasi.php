<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

<h2>FORM REGISTRASI</h2>

<form method="POST">
    Nama:<br>
    <input type="text" name="nama" required><br><br>

    Username / Email:<br>
    <input type="text" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    Konfirmasi Password:<br>
    <input type="password" name="konfirmasi" required><br><br>

    <button type="submit" name="daftar">DAFTAR</button>
    <button type="reset">BATAL</button>
</form>

<?php
if (isset($_POST['daftar'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);

    if ($_POST['password'] == $_POST['konfirmasi']) {
        echo "<h3>Registrasi Berhasil!</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email";
    } else {
        echo "Password tidak cocok!";
    }
}
?>

</body>
</html>