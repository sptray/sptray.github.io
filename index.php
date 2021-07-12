<!DOCTYPE html>
<head>
<title>Kalkulator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="Kalkulator">  
<h1 class="Judul"><b>Kalkulator Sederhana</b></h1>
  <form method="post" action=""> <!-- Input form dari User dengan metode POST -->  
<input type="text" name="number1" size="10" class="Text" placeholder="Masukan angka ...">
<input type="text" name="number2" size="10" class="Text" placeholder="Masukan angka ...">
<select class="Operator" name="operator"> <!-- Pilihan menu dropdown kalkulator -->
<option value="+">Tambah</option>
<option value="-">Kurang</option>
<option value="*">Kali</</option>
<option value="/">Bagi</option>
    </select>
    <input type="submit" name="submit" value="HITUNG" class="Tombol">
    <input type="submit" name="reset" value="RESET" class="Tombol"> 
</form>
</br>
<div><h3><b>Hasilnya : </b></h3></div>
<?php
## Script menerima inputan dari User
## dengan metode POST
$hasil = new Kalkulator(); // digunakan untuk membuat objek hasil dari class kalkulator
$num1 = $_POST['number1']; // digunakan untuk menangkap inputan dan masukan ke variable
$num2 = $_POST['number2'];
$opr = $_POST['operator'];

class Kalkulator
{

    ## deklarasi variable
    var $add;
    var $kurang;
    var $kali;
    var $bagi;

    ## methode yang tersedia untuk operasi penjumlahan, pengurangan, pembagian dan perkalian
    function Tambah($n1, $n2)
    {
        echo $this->add = $n1 + $n2;
    }

    function Kurang($n1, $n2)
    {
        echo $this->kurang = $n1 - $n2;
    }

    function Kali($n1, $n2)
    {
        echo $this->kali = $n1 * $n2;
    }

    function Bagi($n1, $n2)
    {
        echo $this->bagi = $n1 / $n2;
    }
}
if ($opr == '+')
{
    echo "<div class='Text'> Bilangan " . $num1 . " " . $opr . " " . $num2 . " = ";
    $hasil->Tambah($num1, $num2) . "</div>";
}
else if ($opr == '-')
{
    echo "<div class='Text'> Bilangan " . $num1 . " " . $opr . " " . $num2 . " = ";
    $hasil->Kurang($num1, $num2) . "</div>";
}
else if ($opr == '*')
{
    echo "<div class='Text'> Bilangan " . $num1 . " " . $opr . " " . $num2 . " = ";
    $hasil->Kali($num1, $num2) . "</div>";
}
else if ($opr == '/')
{
    echo "<div class='Text'> Bilangan " . $num1 . " " . $opr . " " . $num2 . " = ";
    $hasil->Bagi($num1, $num2) . "</div>";
}
?>
</body>
  
</html>
