<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .result-box {
            border: 1px solid #ED7D31;
            padding: 10px;
            margin: 20px auto;
            width: 200px;
            text-align: center;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #ED7D31;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2e86c1;
        }

    </style>
</head>
<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Kalkulator Sederhana</span>
    <img src="C:\Users\user\Downloads\564429.png" width="30" height="24">
  </div>
</nav>

    <div class="container">
        <h5 class="mt-3">Silahkan masukkan bilangan</h5>
        <form method="POST" action="">
            <div class="form-group">
                <input type="text" class="form-control" name="angka1" placeholder="Bilangan pertama">
            </div>
            <div class="form-group">
                <select class="form-control" name="operator">
                    <option value="pilihoperator">Pilih operator</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="angka2" placeholder="Bilangan kedua">
            </div>
            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            if ($operator == "tambah") {
                $hasil = $angka1 + $angka2;
            } elseif ($operator == "kurang") {
                $hasil = $angka1 - $angka2;
            } elseif ($operator == "kali") {
                $hasil = $angka1 * $angka2;
            } elseif ($operator == "bagi") {
                if ($angka2 == 0) {
                    echo "<font color='red'><p class='result'>Pembagian dengan nol (0) tidak bisa didefinisikan </p>";
                } else {
                    $hasil = $angka1 / $angka2;
                }
            } elseif ($operator == "pilihoperator") {
                echo "<font color='red'><p class='result'>Pilih operator atau masukkan bilangan terlebih dahulu !</p>";
            }
            if (isset($hasil)) {
                echo "<div class='result-box'>";
                echo "<p class='result'>Hasil: $hasil</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>