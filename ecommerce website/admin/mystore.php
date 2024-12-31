<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>

    <!-- Bootstrap CDN --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fontawesome cdn --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<?php
session_start();
if(!$_SESSION['admin']){
    header("location:form/login.php");
}
?>

<body>

<nav class="navbar  bg-dark">
  <div class="container-fluid text-white ">
    <a class="navbar-brand text-white"><h1>Mystore</h1></a>
    <span>
      <i class="fas fa-user-shield"></i>
      Hello, <?php echo $_SESSION['admin']; ?> |  
      <i class="fas fa-sign-out-alt"></i>
      <a href="form/logout.php"class="text-decoration-none text-white">Logout</a> |
      <a href=""class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>

<div>
    <h2 class="text-center">Dashboard</h2>
</div>

<div class="col-md-6 text-center m-auto ">
    <a href="product/index.php" class="text-blue text-decoration-none fs-4 fw-bold px-5">Add post</a>
    <a href="user.php" class="text-blue text-decoration-none fs-4 fw-bold px-5">Users</a>
</div>
    
</body>
</html>