<?php
$name = $_POST['name'];
$password = $_POST['password'];
$Con=mysqli_connect('localhost','root','','ecommerce');
$result = mysqli_query($Con,"SELECT * FROM `user` WHERE (Username ='$name' OR Email ='$name') AND Password = '$password' ");

session_start();
if(mysqli_num_rows($result)){

    $_SESSION['user'] =$name;
    echo"
    <script>
    alert('Successfully logged in');
    window.location.href='../index.php';
    </script>

    ";

}
else{
    echo"
    <script>
    alert('incorrect name or email or password');
    window.location.href='login.php';
    </script>

    ";

}
?>
