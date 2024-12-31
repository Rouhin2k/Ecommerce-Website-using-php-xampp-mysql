<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
     <!-- Bootstrap CDN --> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <!-- Fontawesome cdn --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">

            <p class="text-warning text-center fs-3 fw-bold my-3">User login</p>
            <form id="myForm"action="login1.php" method="POST">
                <div class="mb-3">
                    <label for="">Username:</label>
                    <input type="text" name="name" placeholder="enter username" class="form-control" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="">Password:</label>
                    <input type="password" name="password" placeholder="enter password" class="form-control">
                </div>
                <div class="mb-3">
                <button class="w-100 bg-danger fs-4 text-white">Login</button>
                </div>
                <div class="mb-3">
                <button name="submit" class="w-100 bg-warning fs-4 text-white"><a href="register.php" class="text-decoration-none text-white">Register</a></button>
                </div>
            </form>


            </div>
        </div>
    </div>
    
</body>
</html>