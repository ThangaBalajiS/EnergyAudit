<?php
$servername = "mysql.hostinger.in";
$username = "u130740656_ea";
$password = "tyhdtyhdtyhd";
$dbname = "u130740656_ea";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

    $plnid = $_POST['plnid'];
    $eq = $_POST['eq'];

    $partload   = $_POST['partload'];
    $effpartload   = $_POST['effpartload'];
    $kw   = $_POST['kw'];
    $voltage   = $_POST['voltage'];
    $speed   = $_POST['speed'];
    $frame   = $_POST['frame'];
    $enclosure   = $_POST['enclosure'];
    
    $partload1   = $_POST['partload1'];
    $effpartload1   = $_POST['effpartload1'];
    $kw1   = $_POST['kw1'];
    $voltage1   = $_POST['voltage1'];
    $speed1   = $_POST['speed1'];
    $frame1   = $_POST['frame1'];
    $enclosure1   = $_POST['enclosure1'];

    $rh   = $_POST['rh'];
    $energy   = $_POST['energy'];
    $coste   = $_POST['coste'];
    $payb   = $_POST['payb'];
    $cost   = $_POST['cost']; 


 $query = "INSERT INTO `repg`(`id`, `pl`, `efp`, `kw`, `volt`, `spe`, `fra`, `enc`, `pl1`, `efp1`, `kw1`, `volt1`, `spe1`, `fra1`, `enc1`, `rh`, `enr`, `cst`, `payb`, `cost`,`plnid`,`erq`) VALUES ('','$partload', '$effpartload', '$kw', '$voltage','$speed', '$frame', '$enclosure','$partload1', '$effpartload1', '$kw1', '$voltage1','$speed1', '$frame1', '$enclosure1','$rh', '$energy', '$coste', '$payb','$cost','$plnid','$eq')";

mysqli_query($con,$query);
echo mysqli_errno($con);
echo "Success";

?>