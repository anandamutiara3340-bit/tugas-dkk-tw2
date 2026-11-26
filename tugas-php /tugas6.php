<?php
$nilai = [
    "Cahaya" => 85,
    "Bintang" => 90,
    "Coco" => 80,
    "Alex" => 95,
    "Kelly" => 75
];

$total = array_sum($nilai);
$rata = $total / count($nilai);
$tertinggi = max($nilai);
$terendah = min($nilai);

echo "<h3>Daftar Nilai Siswa</h3>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach ($nilai as $nama => $angka) {
    echo "<tr><td>$nama</td><td>$angka</td></tr>";
}

echo "</table>";

echo "Rata-rata: $rata <br>";
echo "Nilai tertinggi: $tertinggi <br>";
echo "Nilai terendah: $terendah";
?>
