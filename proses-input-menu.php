<?php

$id_pemesanan = $_POST['id_pemesanan'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total_harga = $_POST['total_harga'];

include "koneksi.php";

$simpan = $koneksi->query("INSERT INTO pemesanan (id_pemesanan, menu, jumlah, harga, total_harga) 
                            VALUES ('$id_pemesanan', '$menu', '$jumlah', '$harga', '$total_harga')");

if ($simpan == true) {
    header("location: pesanan.php?pesan=inputBerhasil");
} else {
    echo "Error: " . $koneksi->error;
}

?>
