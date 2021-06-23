<?php
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

?>