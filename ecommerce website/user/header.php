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
 <?php
 session_start();
 $count=0;
 if(isset($_SESSION['cart'])){
   $count = count($_SESSION['cart']);
 }
 ?>   
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand pb-2"><img src="ecommerce logo.png"alt=""></a>

<div class="d-flex">

    <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house"></i>Home</a>
    <a href="viewcart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i>Cart (<?php echo $count;?>) |</a>

    <span class="text-warning pe-2">
    <i class="fa-solid fa-user"></i>Hello,<?php
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
        echo"
        | <a href='form/logout.php'class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Logout</a>| 
        "; 
    }
    else{
        echo"| <a href='form/login.php'class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Login</a>|
         ";
    }
    ?> 
    <a href="../admin/mystore.php"class="text-warning text-decoration-none pe-2">Admin</a>

    </span>
  
</nav>
</div>
<div class="bg-warning sticky-top font-monospace">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Laptop</a></li>
        <li><a href="bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Bag</a></li>
        <li><a href="mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Mobile</a></li>

    </ul>
</div>
    
</body>
</html>