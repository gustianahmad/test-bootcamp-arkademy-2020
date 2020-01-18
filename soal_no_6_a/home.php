<h2 class>Pesanan</h2>
    <hr>

<?php
  include 'koneksi.php';
  include 'fungsi.php';
?>

<table class="table table-hover pt-5">

    <thead class="black white-text">
    <tr>
        <th scope="col" class="text-center">NO</th>
        <th scope="col" class="text-center">Price</th>
        <th scope="col" class="text-center">Product</th>
        <th scope="col" class="text-center">Category</th>
        <th scope="col" class="text-center">Cashier</th>
        <th scope="col" class="text-center"></th>
        
    </tr>
    </thead>

    <!-- membuat pengulangan untuk memanggil isi dari tabel -->
    <?php
        
        $no=1;
        $result = tampil_produk();
        while($row = mysqli_fetch_assoc($result)){

    
    ?>
        <!-- mysqli_fetch_assoc untuk memanggil sesuai nama kolom di tabel  -->

    <tbody>
    <tr>
        <th class="text-center" scope="row"> <?=$no;$no++;?> </th>
        <td class="text-center"> <?=$row['id_cashier'];?> </td>
        <td class="text-center"> <?=$row['name'];?> </td>
        <td class="text-center"> <?=$row['id_category'];?> </td>

        <td class="text-center"> <?=$row['price'];?> </td>
        <td class="text-center">  <a href="index.php?page=lihatproduk.php&id=<?=$row['id'];?>"> Lihat </a>  </td>

    </tr>
        <?php  } ?>

</tbody>
</table>

<a href="?page=inputproduk.php" class="btn btn-outline-default waves-effect "> Tambah </a> 