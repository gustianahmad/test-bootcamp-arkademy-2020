 
 <?php
  include 'koneksi.php';
  include 'fungsi.php';
?>


 <?php
        $id = $_GET['id'];
        $result = detail_produk($id);
        while($row = mysqli_fetch_assoc($result)){
        
    ?>

<h2 class="pb-2">Product : <?=$row['id'];?> </h2>

<a href="index.php?page=editproduk.php&id=<?=$row['id'];?>" class="btn btn-outline-info waves-effect "> Edit </a> 
<a href="index.php?page=hapusproduk.php&id=<?=$row['id'];?>" class="btn btn-outline-danger waves-effect"
    onClick="return confirm('Yakin akan menghapus')"> Delete </a> 

    
<div class="col-md-4  animated fadeIn pt-5">
    <table class="table table-hover table-sm">
  <tbody>
      <!--  -->

    <tr>
      <th scope="row">ID : </th> 
      <td><?=$row['id'];?></td>
    </tr>

    <tr>
      <th scope="row">Cashier : </th>
      <td><?=$row['id_cashier'];?></td>
    </tr>


    <tr>
      <th scope="row">product : </th>
      <td><?=$row['id_category'];?></td>
    </tr>
    <tr>
      <th scope="row">Category : </th>
      <td><?=$row['name'];?></td>
    </tr>
    <tr>
      <th scope="row">price : </th>
      <td><?=$row['price'];?></td>
    </tr>
  
    <?php  } ?>
  </tbody>
</table>
<a href="?page=home.php" class="btn btn-outline-warning waves-effect" >Back</a>
</div>