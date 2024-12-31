<?php
$Con= mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email= $_POST['email'];
 $number= $_POST['number'];
 $password= $_POST['password'];
 $dup_email =mysqli_query($Con,"SELECT * FROM `user` WHERE Email = '$email' ");
 $dup_username =mysqli_query($Con,"SELECT * FROM `user` WHERE Username = '$name' ");
 if(mysqli_num_rows($dup_email)){
    echo"
    <script>
    alert('this email already exists');
    window.location.href='register.php';
    </script>
    

    ";
 }
 if(mysqli_num_rows($dup_username)){
    echo"
    <script>
    alert('this username already exists');
    window.location.href='register.php';
    </script>

    ";
 }
 else{
    mysqli_query($Con,"INSERT INTO `user`(`Username`, `Email`, `Number`, `Password`) VALUES ('$name','$email','$number','$password')");
    echo"
    <script>
    alert('registered success');
    window.location.href='login.php';
    </script>

    ";


 }



}




?>