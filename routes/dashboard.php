<?php
   session_start();
   if(!isset($_SESSION['userdata'])){
       header("location:../front.php");
   }

   $userdata = $_SESSION['userdata'];

//    if($_SESSION['userdata']['status']==0){
//     $status = '<b style="color:red"> Not Voted </b>';
// }
// else{
//     $status = '<b style="color:green">  Voted </b>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>

    
    
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
       <section class="main">
           <h1>Your Profile</h1>
           <ul>
               <li><img src="../uploads/<?php echo $userdata['photo']?>" height="150"></li>
               <li>Name: <?php echo $userdata['name']?></li>
               <li>Class: <?php echo $userdata['class'] ?></li>
               <li>Semester: <?php echo $userdata['semester'] ?></li>
               <li>Mobile: <?php echo $userdata['mobile'] ?></li>
               <li>Email: <?php echo $userdata['email'] ?></li>
               <!-- <li>Status: <?php echo $status?></li> -->
           </ul>
       </section>
   </div>
</div>

</body>
</html>