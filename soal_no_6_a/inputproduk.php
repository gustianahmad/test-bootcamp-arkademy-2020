<?php

    include 'koneksi.php';
    include 'fungsi.php';
    
    if(isset($_POST['submit'])){
        if(tambah_product($id = $_POST['id'], $id_category = $_POST['id_category'], $id_cashier = $_POST['id_cashier'], $name = $_POST ['name'],
        $price = $_POST['price'])){
            echo '<script type="text/javascript">
                alert("Data Tersimpan");window.location="index.php";
            </script>';
        }else{
            echo 'error simpan';
        }
    }

?>

<form class=" border border-light p-5 md-form " method="POST">

<p class="h4 mb-4">Buat Pesanan</p>

<select name="id_cashier" class="browser-default custom-select mb-3 mt-2">
  <option selected>cashier</option>
  <option>anna</option>
  <option>Shinta</option>
  <option>Eka</option>
</select>

<input type="text" name="id_category" class="form-control mb-4" placeholder="product">

<input type="text" name="name" class="form-control mb-4" placeholder="category">

<input type="text" name="price" class="form-control mb-4" placeholder="price">




<!-- Sign in button -->
<button class="btn btn-outline-info btn-rounded waves-effect" type="submit" name="submit">SUBMIT</button>

<button class="btn btn-outline-default waves-effect" type="submit" > <a href="?page=home.php" style="text-decoration: none;"> BACK </a></button>

</form>