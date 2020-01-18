<?php

    include 'koneksi.php';
    include 'fungsi.php';
    
    if(isset($_GET['id'])){
        if(hapus_produk($_GET['id'])){
            echo '<script type="text/javascript">
                alert("Data Produk Terhapus");window.location="index.php";
            </script>';
        }else{
            echo 'hapus error';
        }
    }

?>