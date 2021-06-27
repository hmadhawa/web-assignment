<?php

//first code
//------------------------------------------------------------------------------------------------
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$gender = $_POST['gender'];
$address = $_POST['email'];
$phone = $_POST['phone'];
$scity = $_POST['address'];
$country = $_POST['country'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$area = $_POST['comments']; 

/*

//database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn -> connect_error){
    die('Connection Failed : ' . $conn-> connect_error);
}
else{
    $stmt = $conn-> prepare("insert into donation(first_name, last_name , gender, email, phone, address, country, date, amount, comments)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt-> bind_param("ssisssssds", $fname, $lname, $gender, $address, $phone, $scity, $country, $date, $amount, $area);
    $stmt-> execute();
    echo "Form Submitted Successfully...!";
    $stmt-> close();
    $conn-> close();
}
-------------------------------------------------------------------------------------------------

*/
$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "WEB-ASSIGNMENT");
if($con){
    //echo "connection successful";
    $stmt = $conn-> prepare("insert into donation(first_name, last_name , gender, email, phone, address, country, date, amount, comments)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt-> bind_param("ssisssssds", $fname, $lname, $gender, $address, $phone, $scity, $country, $date, $amount, $area);
    $stmt-> execute();
    echo "Form Submitted Successfully...!";
    $stmt-> close();
    $conn-> close();
}
else{
    echo "connection fail". mysqli_connect_error();
}

//mysqli_select_db($con, "WEB-ASSIGNMENT");
/*
$TABLE = "CREATE TABLE donation(
    ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50), 
    lastname VARCHAR(50), 
    gender VARCHAR NOT NULL,  
    email VARCHAR(100), 
    phone INT(10), 
    city VARCHAR(100), 
    country VARCHAR(20), 
    ddate DATE NOT NULL )  ";

if(mysqli_query($con, $TABLE)) 
{
    echo "TABLE created";
}
else
echo "TABLE creation failed" . mysqli_error($con); */

mysqli_close($con); 



?>