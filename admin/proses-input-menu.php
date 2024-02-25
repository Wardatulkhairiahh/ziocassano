<?php

$id=$_POST['id_pemesanan'];
$menu=$_POST['menu'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pemesanan(id_pemesanan,menu,jumlah,harga,total_harga) 
                        values ('$id_pemesanan', '$menu', '$jumlah', '$harga', '$total_harga')");

if($simpan==true){

    header("location:pesanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>