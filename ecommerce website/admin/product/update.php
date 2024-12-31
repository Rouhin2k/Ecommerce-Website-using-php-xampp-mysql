<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
     <!-- Bootstrap CDN --> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$id = $_GET['ID'];
include 'Config.php';
$Record=mysqli_query($con, "SELECT * FROM `product` WHERE Id= $id ");
$data = mysqli_fetch_array($Record);
?>
<div class="container">
    <div class="row">
    <div class="col-md-6 m-auto border border-primary mt-3">

    

    <form action="update.php"method="POST" enctype="multipart/form-data">
    <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">product update:</p>
</div>
<div class="mb-3">
  <label  class="form-label">product name:</label>
  <input type="text" value=" <?php echo $data['Pname']?>" name="Pname" class="form-control"  placeholder="enter product name">
</div>
<div class="mb-3">
  <label  class="form-label">product price:</label>
  <input type="text" value=" <?php echo $data['Pprice']?>" name="Pprice" class="form-control"  placeholder="enter product price">
</div>
<div class="mb-3">
  <label  class="form-label">add product image:</label>
  <input type="file" name="Pimage" class="form-control" ><br>
  <img src="<?php echo $data['Pimage']?>" alt="" style="height:100px;">
</div>
<div class="mb-3">
  <label  class="form-label">select page categoy</label>
  <select class="form-select" name="Pages" >
  <option value="home">Home</option>
  <option value="laptop">Laptop</option>
  <option value="bag">Bag</option>
  <option value="mobile">Mobile</option>
</select>
</div>
<input type="hidden" name="id" values="<?php echo $data['Id']?>">
<button name="update" class="bg-info fs-3 fw-bold my-5 form-control text-wide">update</button>



    </form>
    </div>
    </div>   
    </div>


    <!--- php update code -->
    <?php
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $product_name=$_POST['Pname'];
        $product_price=$_POST['Pprice'];
        $product_image=$_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $image_des="uploadimage/".$image_name;
        move_uploaded_file($image_loc,"uploadimage/".$image_name);
        $product_category=$_POST['Pages'];

        include 'Config.php';
        mysqli_query($con,"UPDATE `product` SET `Pname`='$product_name',`Pprice`='$product_price',`Pimage`='$img_des',`category`='$product_category' WHERE Id ");
        header("location:index.php");

    }
    ?>

</body>
</html>



