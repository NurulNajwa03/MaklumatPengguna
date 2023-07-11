<?php
$host="localhost";
$user="root";
$password="";
$database="maklumat";

$samb= mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Proses sambung ke pangkalan data gagal";
    exit();
}
?>
