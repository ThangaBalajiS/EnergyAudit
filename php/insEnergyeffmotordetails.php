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
    $installationcost    = $_POST['installationcost'];
    $runninghoursyears       = $_POST['runninghoursyears'];
    $partload    = $_POST['partload'];
    $effpartload   = $_POST['effpartload'];
    $eff25load     = $_POST['eff25load'];
    $eff50load    = $_POST['eff50load'];
    $eff75load   = $_POST['eff75load'];
    $kw  = $_POST['kw'];
    $voltage = $_POST['voltage'];
    $current    = $_POST['current'];
    $speed       = $_POST['speed'];
    $frame    = $_POST['frame'];
    $enclosure   = $_POST['enclosure'];
    $insulationclass     = $_POST['insulationclass'];
    $effrated    = $_POST['effrated'];



 $query = "INSERT INTO energyeffmotordetails  VALUES ('$motorid', '$manufacturer', '$price', '$installationcost', '$runninghoursyears','$partload', '$effpartload', '$eff25load', '$eff50load','$eff75load', '$kw', '$voltage', '$current', '$speed','$frame', '$enclosure', '$insulationclass', '$effrated')";

echo mysqli_query($con,$query);
echo "Success";

?>