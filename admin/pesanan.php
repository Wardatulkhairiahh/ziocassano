<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Menu</h1>
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



?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>id_pemesanan</th><th>menu</th><th>jumlah</th><th>harga</th><th>total_harga</th>
                <th>
                    <a href="input-menu.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <body>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from pemesanan order by menu");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_pemesanan']?></td>
                <td><?php echo $row['menu']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>
               
                <a href="edit-menu.php?id=<?php echo $row['id_pemesanan']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-menu.php?id=<?php echo $row['id_pemesanan']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

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