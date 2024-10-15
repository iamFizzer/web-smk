
<!-- ini perintah HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: brown; color:white">
    <h1>Hallo Kelas RPL</h1>
<!--  ini awal perintah Php -->
<?php
$nama = "renita";
$kelas = "XI RPL";

    echo "nilai ". $nama. "<br>Kelas = " . $kelas;
?>

<form action="#" method="GET">
    <label for="nilai_1">Nilai 1</label>
    <input type="text" name="nilai_1" required>
    <br>
    <label for="nilai_2">Nilai 2</label>
    <input type="text" name="nilai_2" required>
    <button type="submit">Jumlahkan</button>
</form>

<?php 
if ($_GET != null){   
    echo "Nilai 1 = ".$_GET['nilai_1'];
    echo "<br> Nilai 2 = ".$_GET['nilai_2'];
    echo "<br> Total luas persegi = ". $_GET['nilai_1'] * $_GET['nilai_1'] . " sisi persegi di ambil dari nilai 1";
    echo "<br> Total Perkalian = ". $_GET['nilai_1'] * 5 . " nilai 1 di kali 5"; 
    echo "<br> Total pengurangan = ". $_GET['nilai_2'] - $_GET['nilai_1'] . " nilai 2 di kurang nilai 1";
    echo "<br> Total pembagian = ". $_GET['nilai_2'] / 5 . " nilai 2 di bagi 5";

    echo "luas segetiga adalah  ...";
}else
{
    echo "<span style='color:red;'>Data belum di masukan</span>";
}
?>
<!-- akhir php -->
</body>
</html>
