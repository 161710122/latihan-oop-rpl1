<?php
 

require_once 'penjumlahan.php' ;

$orang = new orang ('Aldhit','Bandung','XI RPL 1','Single','Bermain ') ;
//$orang->set_penjumlah(21,3);
echo " Nama&nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_nama()."<br>" ;
echo " Tempat&nbsp&nbsp= ".$orang->get_tempat()."<br>" ;
echo " Kelas &nbsp&nbsp&nbsp&nbsp= ".$orang->get_kelas()."<br>" ;
echo " Status &nbsp&nbsp&nbsp= ".$orang->get_status()."<br>" ;
echo " Hobi &nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_hobi()."<br>" ;
?>