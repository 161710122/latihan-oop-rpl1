<?php 

require_once 'penjumlahan.php' ;

$penjumlahan = new penjumlah ;
$penjumlahan->set_penjumlah(21,3);
echo "=========================<br> perhitungan bilangan 21 dengan 3 <br>========================= <br>";
echo"penjumlahan = ".$penjumlahan->get_penjumlah()."<br>";  
echo"pengurangan = ".$penjumlahan->get_pengurangan()."<br>";  
echo"perkalian = ".$penjumlahan->get_perkalian()."<br>";  
echo"pembagia = ".$penjumlahan->get_pembagian()."<br>";  
?>
