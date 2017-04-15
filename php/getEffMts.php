<?php
$servername = "mysql.hostinger.in";
$username = "u130740656_ea";
$password = "tyhdtyhdtyhd";
$dbname = "u130740656_ea";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

$q = "select motorid,manufacturer from energyeffmotordetails ";

$info = mysqli_query($con,$q);
	while($var = mysqli_fetch_assoc($info)){
		$rows[] = $var;
}
echo json_encode($rows);	

?>