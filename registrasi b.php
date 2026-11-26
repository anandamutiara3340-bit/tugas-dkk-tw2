<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>

<h2>FORM LOGIN</h2>

<form method="POST">
    Username / Email:<br>
    <input type="text" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">LOGIN</button>
    <button type="reset">BATAL</button>
</form>

<?php
if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);

    echo "<h3>Login Berhasil!</h3>";
    echo "Username / Email: $email";
}
?>

</body>
</html>