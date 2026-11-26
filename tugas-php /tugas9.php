<form method="POST">
    <h3>Kalkulator</h3>

    Angka pertama:
    <input type="number" name="a" required><br><br>

    Angka kedua:
    <input type="number" name="b" required><br><br>

    Operator:
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case "+":
            $hasil = $a + $b;
            break;

        case "-":
            $hasil = $a - $b;
            break;

        case "*":
            $hasil = $a * $b;
            break;

        case "/":
            if ($b == 0) {
                echo "Tidak bisa dibagi nol!";
                exit;
            }
            $hasil = $a / $b;
            break;
    }

    echo "Hasil: $hasil";
}
?>
