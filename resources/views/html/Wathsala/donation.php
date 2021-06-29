<?php
//connection
$conn = mysqli_connect("localhost", "root", "", "web-assignment");

if (!$conn){
    echo "Connection Fails!" . mysqli_connect_error();
}
/*
//create a database
$db = "CREATE DATABASE web-assignment";

if (mysqli_query($conn, $db)){
    echo " DATABASE created";
}  */


mysqli_close($conn);
?>