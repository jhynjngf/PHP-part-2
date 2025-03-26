<?php
$saldo = 100000;
$bunga = 10; 
$waktu = 3;  

echo "Hasil perhitungan maka akan muncul hasil seperti berikut:<br>";

for ($bulan = 1; $bulan <= $waktu; $bulan++) {
    $saldo += $saldo * ($bunga / 100);
    echo "Saldo Bulan $bulan = Rp. " . number_format($saldo, 0, ',', '.') . "<br>";
}
?>
