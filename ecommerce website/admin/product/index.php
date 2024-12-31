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
    <div class="container">
    <div class="row">
    <div class="col-md-6 m-auto border border-primary mt-3">

    

    <form action="insert.php"method="POST" enctype="multipart/form-data">
    <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">product detail:</p>
</div>
<div class="mb-3">
  <label  class="form-label">product name:</label>
  <input type="text" name="Pname" class="form-control"  placeholder="enter product name">
</div>
<div class="mb-3">
  <label  class="form-label">product price:</label>
  <input type="text" name="Pprice" class="form-control"  placeholder="enter product price">
</div>
<div class="mb-3">
  <label  class="form-label">add product image:</label>
  <input type="file" name="Pimage" class="form-control" >
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
<button name="submit" class="bg-info fs-3 fw-bold my-5 form-control text-wide">upload</button>



    </form>
    </div>
    </div>   
    </div>
     <!-- fetch data -->
      <div class="container">
        <div class="row">
        <div class="col-md-8 m-auto">
 <table class="table border border-warning table-hover border my-5">
 <thead class="bg-dark text-white fs-5 font-monospace text-center">
 <th>Id</th>
 <th>Name</th>
 <th>Price</th>
 <th>Image</th>
 <th>category</th>
 <th>Delete</th>
 </thead>
 <td><a href=""></a></td> 
 <tbody class="text-center">
    <?php
    include 'Config.php';
    $Record = mysqli_query($con,"SELECT * FROM `product`");
    while($row = mysqli_fetch_array($Record)) 

    echo"
  <tr>
  <td>$row[Id]</td>
  <td>$row[Pname]</td>
  <td>$row[Pprice]</td>
  <td><img src='$row[Pimage]' height='90px' width='200px'></td>
  <td>$row[category]</td>
  <td><a href='delete.php?ID=$row[Id]' class='btn btn-danger'>Delete</a></td>  
  <td><a href='update.php? ID=$row[Id]' class='btn btn-warning'>Update</a></td>
  </tr>
    ";
    ?>
 </tbody>

</table>
</div>
</div>
</div>
      


    
</body>
</html>