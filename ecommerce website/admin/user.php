<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fontawesome cdn --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<nav class="navbar  bg-dark">
  <div class="container-fluid text-white ">
    <a class="navbar-brand text-white"><h1>Mystore</h1></a>
    <span>
      <i class="fas fa-user-shield"></i>
      Hello,admin |  
      <i class="fas fa-sign-out-alt"></i>
      <a href="form/logout.php"class="text-decoration-none text-white">Logout</a> |
      <a href="//form/index.php"class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>
    <?php
     $con=mysqli_connect('localhost','root','','ecommerce');
     $Record=mysqli_query($con,"SELECT * FROM `user` ");
     $row_count=mysqli_num_rows($Record);

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
<table class="table table-secondary table-bordered">
    <thead class="text-center">
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Delete</th>
        
        
    </thead>

    <tbody class="text-center">
     <?php
     while($row=mysqli_fetch_array($Record)){
        echo"
        <tr>
        <td>$row[Id]</td>
        <td>$row[Username]</td>
        <td>$row[Email]</td>
        <td>$row[Number]</td>
        <td><a href='delete.php? ID=$row[Id]' class='btn btn-outline-danger'>Delete</a></td>
        </tr>
        ";
     }


     ?>


    </tbody>
</table>
    </div>
<div class="col-md-2 pr-5 text-center">
    <h3 class="text-danger">Total</h3>
    <h1 class="bg-danger text-white"><?php echo $row_count; ?></h1>
</div>
    </div>
    </div>

    
</body>
</html>