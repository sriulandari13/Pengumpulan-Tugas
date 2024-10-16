<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            font-weight: bold;
            font-size: 14px;
        }
        input[type="number"] {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }
        input[type="number"]:focus {
            outline: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        input[type="submit"] {
            padding: 12px;
            border: none;
            border-radius: 30px;
            background-color: #5A67D8;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        input[type="submit"]:hover {
            background-color: #4C51BF;
            transform: translateY(-2px);
        }
        input[type="submit"]:active {
            background-color: #434190;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Masukkan Nilai Mata Kuliah</h2>
        <form action="index.php" method="POST">
            <label>Mata Kuliah 1:</label>
            <input type="number" name="nilai1" required>

            <label>Mata Kuliah 2:</label>
            <input type="number" name="nilai2" required>

            <label>Mata Kuliah 3:</label>
            <input type="number" name="nilai3" required>

            <label>Mata Kuliah 4:</label>
            <input type="number" name="nilai4" required>

            <label>Mata Kuliah 5:</label>
            <input type="number" name="nilai5" required>

            <input type="submit" value="Hitung Rata-Rata">
        </form>

        <div style='font-family: Arial, sans-serif; max-width: 400px; margin: 50px auto; padding: 20px; ; border-radius: 10px;'>
<h2 style='text-align: center; color: black;'>Hasil Perhitungan</h2>

   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input nilai dari form
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $nilai4 = $_POST['nilai4'];
    $nilai5 = $_POST['nilai5'];

    // Hitung rata-rata
    $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;
    $rata_rata = $total / 5;

    // Tentukan status kelulusan
    if ($rata_rata >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    // Tampilkan hasil
    echo "<p><strong>Nilai Rata-Rata:</strong> $rata_rata</p>
          <p><strong>Status Kelulusan:</strong> $status</p>
          <a href='index.html' style='display: block; text-align: center; margin-top: 20px; text-decoration: none; background-color: #007bff; color: white; padding: 10px; border-radius: 40px;'>Kembali</a>";
                  
}
?>
</div>  
    </div>
    
    
</body>
</html>
