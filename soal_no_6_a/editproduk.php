<?php

    include 'koneksi.php';
    include 'fungsi.php';
    
    if(isset($_POST['submit'])){
        if(update_produk($id = $_POST['id'], $id_cashier = $_POST['id_cashier'], $name = $_POST['name'], $id_category = $_POST['id_category'], $price = $_POST['price'])){
            echo '<script type="text/javascript">
                alert("Data produk Diupdate");window.location="index.php";
            </script>';
        }else{
            echo 'error simpan';
        }
    }

?>

<form class=" border border-light p-5 md-form " method="POST">

<?php
    
    $result = edit_produk($_GET['id']);
    $edit =  mysqli_fetch_array($result);

?>

<p class="h4 mb-5">Edit : <?=$edit['id'];?> </p>

<select name="cashier" class="browser-default custom-select mb-3 mt-2">
  <option selected>cashier</option>
  <option>anna</option>
  <option>Shinta</option>
  <option>Eka</option>
</select>

<input type="text" name="product" class="form-control mb-4" placeholder="product">

<input type="text" name="category" class="form-control mb-4" placeholder="category">

<input type="text" name="price" class="form-control mb-4" placeholder="price">




<button class="btn btn-outline-info btn-rounded waves-effect" type="submit" name="submit">SUBMIT</button>

<button class="btn btn-outline-default waves-effect" type="submit" > <a href="?page=home.php"> BACK </a></button>

