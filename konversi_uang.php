<form method="get" action="konversi_uang.php">
    Uang Rp. <input type="text" name="uang">
    <input type="submit" value="Konversi" name="konversi">
</form>
<?php
if (isset($_GET['konversi'])){
    include "fungsi_terbilang.php";

    $uang = $_GET['uang'];
    $format_uang = number_format($uang,0,",",".");
    $terbilang = ucwords(terbilang($uang));

    echo "Uang Anda : Rp. $format_uang <br><br>";
    echo "Terbilang : <b><br>$terbilang Rupiah</b>";
}
?>