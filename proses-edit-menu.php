<?php

$id=$_POST['id_pemesanan'];
$menu=$_POST['menu'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("update pemesanan set id_pemesanan ='$id', menu='$menu', jumlah='$jumlah', harga='$harga',  total_harga=$total_harga where id_pemesanan='$id'"); 
                       
if($simpan==true){

    header("location:pesanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>