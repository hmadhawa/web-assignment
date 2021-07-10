<?php
include_once'donation.php';

$first_name = $_POST['fname']??"";
$last_name = $_POST['lname']??"";
$gender = $_POST['gender']??"";
$email = $_POST['address']??"";
$phone = $_POST['phone']??"";
$address = $_POST['scity']??"";
$country = $_POST['country']??"";
$date = $_POST['date']??"";
$amount = $_POST['amount']??"";
$comments = $_POST['area']??"";


$insert = "INSERT INTO donation VALUES ('$first_name', '$last_name', '$gender', '$email','$phone', '$address', '$country', '$date', '$amount', '$comments') ; ";
if(mysqli_query($conn, $insert))
{
    echo "inserted";
    //echo "Thank You!";
}


mysqli_close($conn);


?>