<?php
session_start();

if(!isset($_SESSION['userdata'])){
header("location:../dashboard.php");
}


$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Voting Booth</title>



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
      
        <?php
if($_SESSION['groupsdata']){
    for($i=0; $i<count($groupsdata); $i++){
?>
<div>

    <section class="can">
    <img src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="120"><br>
    <b>Candidate Name: </b><?php echo $groupsdata[$i]['name']?> <br>
    <b>Votes: </b><?php echo $groupsdata[$i]['votes']?> </b>
    <form action="../api/vote.php" method="POST">
        <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
        <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">

    </form>
    
    </section>
</div>
<?php
    }
}else{

}
?>
    </section>
</div>
</div>

</body>
</html>
