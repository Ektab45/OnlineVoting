<?php
session_start();
include("../api/connect.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="delete from `register` where id=$id";
    $result=mysqli_query($connect, $sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($connect));
    }
}
?>