<!DOCTYPE html>
<html>
<head>
    <title>Latihan 12</title>
</head>
<body>

<!-- a. FORM REGISTRASI -->
<h2>FORM REGISTRASI</h2>
<form method="POST">
    Nama:<br>
    <input type="text" name="nama" required><br><br>
    Username / Email:<br>
    <input type="text" name="email_daftar" required><br><br>
    Password:<br>
    <input type="password" name="password_daftar" required><br><br>
    Konfirmasi Password:<br>
    <input type="password" name="konfirmasi" required><br><br>
    <button type="submit" name="daftar">DAFTAR</button>
    <button type="reset">BATAL</button>
</form>

<?php
if (isset($_POST['daftar'])) {
    if ($_POST['password_daftar'] == $_POST['konfirmasi']) {
        echo "<h3>Registrasi Berhasil!</h3>";
        echo "Nama: " . htmlspecialchars($_POST['nama']) . "<br>";
        echo "Email: " . htmlspecialchars($_POST['email_daftar']);
    } else {
        echo "Password tidak cocok!";
    }
}
?>

<hr>

<!-- b. FORM LOGIN -->
<h2>FORM LOGIN</h2>
<form method="POST">
    Username / Email:<br>
    <input type="text" name="email_login" required><br><br>
    Password:<br>
    <input type="password" name="password_login" required><br><br>
    <button type="submit" name="login">LOGIN</button>
    <button type="reset">BATAL</button>
</form>

<?php
if (isset($_POST['login'])) {
    echo "<h3>Login Berhasil!</h3>";
    echo "Username / Email: " . htmlspecialchars($_POST['email_login']);
}
?>

</body>
</html>