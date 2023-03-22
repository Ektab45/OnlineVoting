<?php
session_start();

if(!isset($_SESSION['userdata'])){
    header("location:../front.php");
}
include("../api/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
    
    <div class="container">
   
        <?php
        $connect = mysqli_connect("localhost","root","","ovs");
        
        $query = "SELECT * FROM register";
        $query_run = mysqli_query($connect,$query);
        
        ?>
    <table class="table" style="width: 88%;">

  <thead>
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Semester</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

  <?php

  if(mysqli_num_rows($query_run)>0){
    foreach($query_run as $row){
      ?>
      <tr>
      <td><?php echo $row['id']?></td>  
      <td>
    <img src="../uploads/<?php echo $row['photo'];?>" width="100px" height="100px"/>
  </td>
  <td><?php echo $row['name']?></td>
  <td><?php echo $row['class']?></td>
  <td><?php echo $row['semester']?></td>
  <td><?php echo $row['mobile']?></td>
  <td><?php echo $row['password']?></td>
  <td><?php echo $row['email']?></td>

  <td><?php if($row['role']==1){ echo 'Voter';
   }elseif($row['role']==2){
    echo 'Candidate';
  } else{echo 'Admin';
  }
  
  ?></td>

<td><?php if($row['status']==1) {echo 'Voted';
  }
  elseif($row['role']==3){
    echo 'NULL';
  }
  else{ echo 'Not Voted';}?></td>

  <td>
    <button class="btn btn-primary">
    <a href="update.php? id=<?php echo $row['id'];?>" class="text-white">Edit</a>
    </button></td>
    <?php 
    if($row['role']!=3){?>
<td>
    <button class="btn btn-danger">
    <a href="delete.php? id=<?php echo $row['id'];?>" class="text-white">Delete</a>
    </button></td>
    <?php }
    ?>
    
      </tr>
      <?php
    }
  }
  else{
  
  ?>
  <tr>
    <td>No records</td>
  </tr>
  <?php
  }
  ?>

  
  </tbody>
</table>
    </div>
</div>
</div>
</body>
</html>