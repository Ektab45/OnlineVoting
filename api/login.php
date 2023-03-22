<?php
session_start();
include("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$check = mysqli_query($connect, "SELECT * FROM register WHERE name='$username' AND password='$password' AND role='$role' " );

if(mysqli_num_rows($check)>0){
  $userdata = mysqli_fetch_array($check);
  $groups = mysqli_query($connect, "SELECT * FROM register WHERE role=2");
  $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

  $_SESSION['userdata'] = $userdata;
  $_SESSION['groupsdata'] = $groupsdata;

  if($role == 3){
  echo '
  <script>
  window.location = "../routes/dashboard.php";
  </script>
  ';
}elseif($role ==1||2){
  echo '
  <script>
  window.location = "../routes/userdashboard.php";
  </script>
  ';
}
}
else{
    echo '
    <script>
    alert("Invalid Credentials or User not found!");
    window.location = "../front.php";
    </script>
    ';
}

?>
