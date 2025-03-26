<?php
// Data jumlah anak per golongan (contoh input)
$anakGolA = 2;
$anakGolB = 3;
$anakGolC = 1;

// Hitung per golongan pakai switch
function hitungGaji($golongan, $jumlahAnak) {
    switch ($golongan) {
        case 'A':
            $gajiPokok = 3000000;
            $tunjangan = $jumlahAnak * (0.20 * $gajiPokok);
            break;
        case 'B':
            $gajiPokok = 2000000;
            $tunjangan = $jumlahAnak * (0.15 * $gajiPokok);
            break;
        case 'C':
            $gajiPokok = 1000000;
            $tunjangan = $jumlahAnak * (0.10 * $gajiPokok);
            break;
        default:
            $gajiPokok = 0;
            $tunjangan = 0;
    }
    $totalGaji = $gajiPokok + $tunjangan;
    return [$gajiPokok, $tunjangan, $totalGaji];
}

// Hitung masing-masing golongan
list($gpA, $tunjA, $totalA) = hitungGaji('A', $anakGolA);
list($gpB, $tunjB, $totalB) = hitungGaji('B', $anakGolB);
list($gpC, $tunjC, $totalC) = hitungGaji('C', $anakGolC);

// Total semua golongan
$totalSemua = $totalA + $totalB + $totalC;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekap Gaji Semua Golongan</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #333; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
        h2 { text-align: center; }
    </style>
</head>
<body>

<h2>Rekap Perhitungan Gaji Karyawan</h2>

<table>
    <tr>
        <th>Golongan</th>
        <th>Jumlah Anak</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan Anak</th>
        <th>Total Gaji</th>
    </tr>
    <tr>
        <td>A</td>
        <td><?= $anakGolA ?></td>
        <td>Rp. <?= number_format($gpA, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($tunjA, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($totalA, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <td>B</td>
        <td><?= $anakGolB ?></td>
        <td>Rp. <?= number_format($gpB, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($tunjB, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($totalB, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <td>C</td>
        <td><?= $anakGolC ?></td>
        <td>Rp. <?= number_format($gpC, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($tunjC, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($totalC, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <th colspan="4">Total Semua Gaji</th>
        <th>Rp. <?= number_format($totalSemua, 0, ',', '.') ?></th>
    </tr>
</table>

</body>
</html>
