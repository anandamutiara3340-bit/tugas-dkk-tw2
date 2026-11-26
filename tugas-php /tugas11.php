<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Jari-Jari Lingkaran</title>
</head>
<body>

<h2>Menghitung Jari-Jari Lingkaran</h2>

<form method="POST">
    Masukkan Luas Lingkaran:
    <input type="number" name="luas" step="any" required>
    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $luas = $_POST['luas'];
    $phi = 3.14;

    $jari = sqrt($luas / $phi);

    echo "<h3>Hasil Perhitungan</h3>";
    echo "Luas Lingkaran: $luas <br>";
    echo "Jari-jari Lingkaran: " . round($jari, 2);
}
?>

</body>
</html>
