<?php
include("connect.php");

$name = $_POST['name'];
$class = $_POST['class'];
$sem = $_POST['sem'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name']; 
$role = $_POST['role'];

if($password==$cpassword){
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO register (name, class, semester, mobile, password, email, photo, role, status, votes)
     VALUES ('$name', '$class', '$sem', '$mobile', '$password', '$email', '$image','$role', 0, 0)");
     if($insert){
         echo '
         <script>
         alert("Registration Successful");
         window.location = "../routes/register.html";
         </script>
         ';
     }else{
         echo '
         <script>
         alert("Some error occured!");
         window.location = "../routes/register.html";
         </script>
         ';
     }
}else{
    echo '
    <script>
    alert("Password and Confirm password does not match!");
    window.location = "../routes/register.html";
    </script>
    ';
}

?>