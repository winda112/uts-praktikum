<html>
<head>
	<title> UTS PRAKTIKUM </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
    <br></br>
    <br></br>
    <br></br>
	<table>
	<form action="konversi_uang.php" method="get" class="form-group">
	<tr>
    Uang Rp. <input type="text" name="uang">
    <input type="submit" value="Konversi" name="konversi"><br></br>
   
<?php
if (isset($_GET['konversi'])){
    include "fungsi_terbilang.php";

    $uang = $_GET['uang'];
    $format_uang = number_format($uang,0,",",".");
    $terbilang = ucwords(terbilang($uang));

    echo "Uang Anda : Rp. $format_uang <br><br>";
    echo "Terbilang : $terbilang Rupiah</b>";
    
}

?>