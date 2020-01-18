<?php
    //fungsi ini untuk menambahkan produk di halaman inputproduk.php, parameter disini ada $id,$nama,$supplier,$harga, outputnya menampilkan
    //data produk yang berhasil ditambah ditampilkan ke home 
    function tambah_product($id,$price,$id_category,$id_cashier,$name){
        global $conn;
        $sql = "INSERT INTO product VALUES ('$id', '$id_cashier', '$id_category', '$id_cashier', '$name')";
        if(mysqli_query($conn,$sql) or die ('error fungsi')){
            header("location:index.php?page=home.php");
        }else{
            echo"Pembaruan Gagal ";
        }
    }

    //fungsi ini untuk menampilkan produk di halaman home, outputnya menampilkan semua data produk
    function tampil_produk(){
        global $conn;
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn,$sql) or die ('error fungsi');
        return $result;
    }

    //fungsi ini untuk menampilkan detail produk pilihan di halaman lihatproduk.php, parameter disini hanya $id.
    //outputnya menampilkan detail data produk yang dipilih 
    function detail_produk($id){
        global $conn;
        $sql = "SELECT * FROM product WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die ('error fungsi');
        return $result;
    }
    
    //fungsi ini untuk mengubah data produk, paramaternya $id,$nama,$supplier,$harga
    //inputannya kita mengubah data produk yang kita pilih, outputnya ditampilkan ke halaman home
    function update_produk($id,$name,$price,$id_category,$id_cashier){
        global $conn;
        $sql = "UPDATE product SET id='$id', name='$name', id_category='$id_category, 'id_cashier=$id_cashier'  '  ;
        WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die ('error fungsi');
        return $result;
    }

    //fungsi ini untuk menampilkan data produk yang ingin diubah di halaman editproduk.php, paramaternya $id
    //outputnya ditampilkan ke halaman editproduk.php
    function edit_produk($id){
        global $conn;
        $sql = "SELECT * FROM product WHERE id='$id' LIMIT 1";
        $result = mysqli_query($conn,$sql) or die ('error fungsi');
        return $result;
    }
    

    //fungsi ini digunakan untuk menghapus data produk di halaman lihat produk, paramaternya hanya $id
    //inputannya kita memilih data produk mana yang ingin dihapus, lalu diproses di file hapusproduk.php 
    //outputnya ditampilkan ke halaman home
    function hapus_produk($id){
        global $conn;
        $sql = "DELETE FROM product WHERE id='$id'";
        if(mysqli_query($conn,$sql) or die ('error fungsi')){
            return true;
        }else{
            return false;
        }
    }

?>