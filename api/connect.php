<?php

$connect = mysqli_connect("localhost", "root", "", "ovs") or die("connection failed");


if(!$connect){
    echo "Not Connected";
}


?>