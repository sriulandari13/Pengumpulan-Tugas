<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP Sederhana</title>
    <style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 50px;
        background: linear-gradient(135deg, #74ebd5, #ACB6E5);

    }
    .kalkulator{
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow:0 2px 10px rgba(0, 0, 0, 0,1);
    }
    h2 {
        text-align: center;
        font font-family: times new roman;
        color: black;
    }
    input, select{
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #eee;
        border-radius:5px;
    }
    input[type="number"], select{
        padding: 5px;
        margin: 5px;
        border-radius: 5px;

    }
    button {
        background-color:#0000ff ;
        color: white;
        padding: 10px 50px;
        border: none; 
        cursor: pointer;
        display: block;
        margin: 0 auto;
        border-radius: 10px;
        font-weight: bold;     
    }
    h3{
        text-align: center;
        color: red;
    }
     
    </style>
</head>
<body>

    <div class="kalkulator">
    <h2>KALKULATOR SEDERHANA</h2>
    <form method="post">
        <input type="number" name="angka1"placeholder="Angka pertama" required>   
        <input type="number" name="angka2" placeholder="Angka kedua"required>   
        <select name="operator">
            <option value="+">Tambah (+)</option>
            <option value="-">Kurang (-)</option>
            <option value="*">Kali (*)</option>
            <option value="/">Bagi (/)</option>
        </select>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Eror: Pembagian dengan Nol";
                }        
                break;
            default:
                $hasil = "Operator Tidak Valid";
        }
        echo"<h3>Hasil: $hasil</h3>";
    }
    ?>
     </div>
</body>
</html>

