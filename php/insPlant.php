<?php
$servername = "mysql.hostinger.in";
$username = "u130740656_ea";
$password = "tyhdtyhdtyhd";
$dbname = "u130740656_ea";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

$plantId   = $_POST['plantId'];
    $name  = $_POST['name'];
    $product = $_POST['product'];
    $address    = $_POST['address'];
    $city       = $_POST['city'];
    $pin    = $_POST['pin'];
    $contactPerson   = $_POST['contactPerson'];
    $phone     = $_POST['phone'];
    $emailId    = $_POST['email_Id'];

 $query = "INSERT INTO plantdetails  VALUES ('$plantId', '$name', '$product', '$address', '$city','$pin', '$contactPerson', '$phone', '$emailId')";

echo mysqli_query($con,$query);
echo "Success";

?>