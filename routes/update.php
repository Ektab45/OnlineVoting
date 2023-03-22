<?php
session_start();
include("../api/connect.php");
$id=$_GET['id'];
$sql="SELECT * FROM register WHERE id=$id";
$result=mysqli_query($connect, $sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$class = $row['class'];
$sem = $row['semester'];
$mobile = $row['mobile'];
$password = $row['password'];
// $cpassword = $_POST['cpassword'];
$email = $row['email'];
$image = $row['photo'];
 
$role = $row['role'];

if(isset($_POST['submit'])){

  
    
    $name = $_POST['name'];
    $class = $_POST['class'];
    $sem = $_POST['semester'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    // $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name']; 
   
    $role = $_POST['role'];
    
     move_uploaded_file( "../uploads/$image");
    $sql="UPDATE register SET name='$name', class='$class',
    semester='$sem', mobile='$mobile', password='$password', email='$email', 
    photo='$image', role='$role', status= 0 , votes= 0 WHERE id=$id";
$result=mysqli_query($connect, $sql);
if($result){
    echo "updated Successfully";
    header('location:display.php');
}else{
    die(mysqli_error($connect));
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>OVS-Update users</title>
</head>
<body>


<div class="wrap">

<div class="sidebar">
<!-- <li class="fa fa-bars" id="menuicon"></li> -->
<h1>Dashboard</h1>
    <ul>
        <li><a href="dashboard.php">Profile</a></li>
        <li><a href="result.php">Result</a></li>
        <li><a href="register.html">Add User</a></li>
        <li><a href="display.php">User Lists</a></li>
        <li><a href="../front.php">Back</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
    <section class="regmain">
        <div>
        <h1>Update Users</h1><br>
    <form method="POST" enctype="multipart/form-data">
        <div class="inputbox">
        <!-- <input type="number" name="id" placeholder="Enter Id"> -->
        <input type="text" name="name" placeholder="Enter Name" value=<?php echo $name;?> required> 
        <input type="text" name="class" placeholder="Enter Class" value=<?php echo $class;?> required><br><br>
        <input type="text" name="semester" placeholder="Enter Semester" value=<?php echo $sem;?> required>
        <input type="bigint" name="mobile" placeholder="Enter Mobile" value=<?php echo $mobile;?> required><br><br>
        <input type="password" name="password" placeholder="Enter Password" value=<?php echo $password;?> required><br><br>
        <!-- <input type="password" name="cpassword" placeholder="Confirm Password"><br><br> -->
       
        <input id="email" type="email" name="email" placeholder="Enter Email" value=<?php echo $email;?>><br><br>
    </div>
    <div id="imagepart">
       Upload Image: <input type="file" name="photo" value=<?php echo $image;?>>
    </div>
    <br>
    <div id="role">
      Select Role: <select name="role" value=<?php echo $role;?>>
           <option value="1">Voter</option>
           <option value="2">Candidate</option>
           <option value="3">Admin</option>
       </select>
    </div>
    <br>
<button type="submit" class="btn btn-primary" name="submit">Update</button>

    </form>
        </div>
    </section>
</div>
</div>  
    
</body>
</html>