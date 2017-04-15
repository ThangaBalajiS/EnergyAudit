<?php
$servername = "mysql.hostinger.in";
$username = "u130740656_ea";
$password = "tyhdtyhdtyhd";
$dbname = "u130740656_ea";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

    $motorid   = $_POST['motorid'];
    $manufacturer  = $_POST['manufacturer'];
    $price = $_POST['price'];
    $runninghoursyears       = $_POST['runninghoursyears'];
    $loading    = $_POST['loading'];
    $eff25load     = $_POST['eff25load'];
    $eff50load    = $_POST['eff50load'];
    $eff75load   = $_POST['eff75load'];
    $kw  = $_POST['kw'];
    $voltage = $_POST['voltage'];
    $speed       = $_POST['speed'];
    $frame    = $_POST['frame'];
    $effratedload    = $_POST['effratedload'];
    $enclosure   = $_POST['enclosure'];
    $insulationclass     = $_POST['insulationclass'];
    



 $query = "INSERT INTO standardmotordetails  VALUES ('$motorid', '$manufacturer', '$price', '$runninghoursyears','$loading', '$eff25load', '$eff50load','$eff75load', '$kw', '$voltage', '$speed','$frame', '$effratedload', '$enclosure', '$insulationclass')";

echo mysqli_query($con,$query);
echo "Success";

?>