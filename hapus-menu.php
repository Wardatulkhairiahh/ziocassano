<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from pemesanan where id_pemesanan='$id'");

if($hapus==true){

    header("location:pesanan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>