<form method="POST">
    <h3>Form Pendaftaran</h3>

    Nama: <input type="text" name="nama"><br><br>
    Email: <input type="email" name="email"><br><br>
    Kelas: <input type="text" name="kelas"><br><br>

    <button type="submit" name="daftar">
        Daftar
    </button>
</form>

<?php
if (isset($_POST['daftar'])) {

    if (empty($_POST['nama']) ||
        empty($_POST['email']) ||
        empty($_POST['kelas'])) {

        echo "Semua kolom wajib diisi!";

    } else {
        echo "Pendaftaran berhasil!";
        echo "<br>Nama: " . htmlspecialchars($_POST['nama']);
        echo "<br>Email: " . htmlspecialchars($_POST['email']);
        echo "<br>Kelas: " . htmlspecialchars($_POST['kelas']);
    }
}
?>