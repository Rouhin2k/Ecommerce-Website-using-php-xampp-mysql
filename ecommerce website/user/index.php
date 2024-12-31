<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <?php
    include 'header.php';
    ?>
</head>
<body>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">

<h1 class="text-warning font-monospace text-center my-3">Home</h1>
<?php
 include 'Config.php';
 $record=mysqli_query($con,"select * from product");
   while($row=mysqli_fetch_array($record)){
    $check_page = $row['category'];
    if($check_page === 'Home'){

    echo"
  
 <div class='col-md-6 col-lg-4 m-auto mb-3'>
 <form action='insertcart.php' method='POST'>
<div class='card m-auto' style='width: 15rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top m-auto' style='width :170px; height:100px'>
  <div class='card-body d-flex flex-column text-center'>
    <h5 class='card-title fs-5 fw-bold'>$row[Pname]</h5>
    <p class='card-text fs-5 fw-bold'>$row[Pprice]</p>
    <input type='hidden' name='Pname' value='$row[Pname]'>
    <input type='hidden' name='Pprice' value='$row[Pprice]'>
    <input type='number'name='Pquantity' value='min='1' max='10'' placeholder='Quantity'><br>
    <input type='submit' name='addcart' class='btn btn-danger text-black w-100' value='Add to cart'>
    
  </div>
</div>
</form>
</div>
";
  }
}
?>

</div>    
</div>        
</div>
    
</body>
</html>