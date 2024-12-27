<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            padding: 5px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Hitung Gaji Karyawan</h1>
<form method="post" action="">
    <label for="jam_kerja">Jumlah Jam Kerja:</label>
    <input type="number" id="jam_kerja" name="jam_kerja" required>

    <label for="tarif_per_jam">Tarif Per Jam:</label>
    <input type="number" id="tarif_per_jam" name="tarif_per_jam" required>

    <input type="submit" value="Hitung Gaji">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil input dari form
    $jam_kerja = $_POST['jam_kerja'];
    $tarif_per_jam = $_POST['tarif_per_jam'];

    // Menghitung gaji
    if ($jam_kerja > 40) {
        $jam_lembur = $jam_kerja - 40;
        $gaji_normal = 40 * $tarif_per_jam;
        $gaji_lembur = $jam_lembur * $tarif_per_jam * 1.5;
        $total_gaji = $gaji_normal + $gaji_lembur;
    } else {
        $total_gaji = $jam_kerja * $tarif_per_jam;
    }

    // Menampilkan hasil
    echo "<div class='result'>Gaji karyawan adalah: Rp " . number_format($total_gaji, 2, ',', '.') . "</div>";
}
?>

</body>
</html>