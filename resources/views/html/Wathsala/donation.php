<?php

/* first code
------------------------------------------------------------------------------------------------
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$scity = $_POST['scity'];
$city = $_POST['city'];
$date = $_POST['date'];
$text = $_POST['text'];
$amount = $_POST['amount'];
$area = $_POST['area'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn -> connect_error){
    die('Connection Failed : ' . $conn-> connect_error);
}
else{
    $stmt = $conn-> prepare("insert into donation(fname, lname, address, phone, scity, city, date, text, amount,area)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt-> bind_param("sssissisds", $fname, $lname, $address, $phone, $scity, $city, $date, $text, $amount, $area);
    $stmt-> execute();
    echo "Form Submitted Successfully...!";
    $stmt-> close();
    $conn-> close();
}
-------------------------------------------------------------------------------------------------

*/
$con = mysqli_connect("localhost", "root", "");
if($con){
    echo "connection successful";
}
else{
    echo "connection fail". mysqli_connect_error();
}

mysqli_select_db($con, "WEB-ASSIGNMENT");
$TABLE = "CREATE TABLE donation(ID INT(10) PRIMARY KEY AUTO_INCREMENT, FNAME VARCHAR(20), LNAME VARCHAR(20), ADDR VARCHAR(60), PHONE INT(10), SCITY VARCHAR  ) ";

if(mysqli_query($con, $TABLE)) 
{
    echo "TABLE created";
}
else
echo "TABLE creation failed" . mysqli_error($con);

mysqli_close($con); 



?>