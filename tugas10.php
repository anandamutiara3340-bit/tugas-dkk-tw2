<form method="POST">
    <h3>Kasir Sederhana</h3>

    Nama barang:
    <input type="text" name="barang" required><br><br>

    Harga barang:
    <input type="number" name="harga" required><br><br>

    Jumlah:
    <input type="number" name="jumlah" required><br><br>

    <button type="submit" name="bayar">Hitung Total</button>
    
    </form>

<?php
if (isset($_POST['bayar'])) {

    $barang = htmlspecialchars($_POST['barang']);
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $total = $harga * $jumlah;

    if ($total > 100000) {
        $diskon = $total * 10 / 100;
    } else {
        $diskon = 0;
    }

    $bayar = $total - $diskon;

    echo "<h3>STRUK BELANJA</h3>";
    echo "Nama barang: $barang <br>";
    echo "Harga: Rp" . number_format($harga, 0, ',', '.') . "<br>";
    echo "Jumlah: $jumlah <br>";
    echo "Total belanja: Rp" . number_format($total, 0, ',', '.') . "<br>";
    echo "Diskon: Rp" . number_format($diskon, 0, ',', '.') . "<br>";
    echo "<b>Total bayar: Rp" . number_format($bayar, 0, ',', '.') . "</b>";
}
?>