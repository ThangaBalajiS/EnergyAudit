<?php
$servername = "mysql.hostinger.in";
$username = "u130740656_ea";
$password = "tyhdtyhdtyhd";
$dbname = "u130740656_ea";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

    $plantid   = $_POST['plantid'];
    $motorid  = $_POST['motorid'];
    $code = $_POST['code'];
    $manufacturer    = $_POST['manufacturer'];
    $motornumber  = $_POST['motornumber'];
    $frame       = $_POST['frame'];
    $runninghoursyears    = $_POST['runninghoursyears'];
    $dutycycle   = $_POST['dutycycle'];
    $windingcondition     = $_POST['windingcondition'];
    $loadtype    = $_POST['loadtype'];
    $connectedequipment  = $_POST['connectedequipment'];
    $servicedate    = $_POST['servicedate'];
    $age       = $_POST['age'];
    $voltage    = $_POST['voltage'];
    $kw   = $_POST['kw'];
    $current     = $_POST['current'];
    $speed    = $_POST['speed'];
    $efficiency  = $_POST['efficiency'];
    $insulationclass = $_POST['insulationclass'];
    $enclosure    = $_POST['enclosure'];
    $phases       = $_POST['phases'];
    $connection    = $_POST['connection'];
    $loading   = $_POST['loading'];
    $partloadeff     = $_POST['partloadeff'];


 $query = "INSERT INTO existingmotor VALUES ('$plantid', '$motorid', '$code','$motornumber','$manufacturer', '$frame','$runninghoursyears', '$dutycycle', '$windingcondition', '$loadtype','$connectedequipment','$servicedate','$age','$voltage', '$kw', '$current', '$speed','$efficiency', '$insulationclass', '$enclosure', '$phases','$connection', '$loading', '$partloadeff')";

echo mysqli_query($con,$query);
echo "Success";

?>