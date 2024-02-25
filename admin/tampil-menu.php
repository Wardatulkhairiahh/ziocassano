<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>ZIOCASSANO KOREAN FOOD</h1>
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Penyimpanan Berhasil!
        </div>
<?php

}

?>


<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
        <div class="alert alert-success">
        Data Berhasil Dihapus!
        </div>
<?php

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
        <div class="alert alert-success">
        Perubahan Berhasil!
        </div>
        <?php

}

?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pemesanan</th><th>Menu</th><th>Harga</th><th>Jumlah</th><th>Total_harga</th>
                <th>
                <a href="tampil-menu.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from pemesanan order by id_pemesanan ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_pemesanan']?></td>
                <td><?php echo $row['menu']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>
                
            

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>