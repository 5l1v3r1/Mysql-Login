<?php
$host = "https://auth-db208.hostinger.in";
$username = "u327165571_orto";
$password = "CKhpzyGuBke9S!U";
$database  = "u327165571_ekattor";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn)
{
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `admin` WHERE 1";
$result = mysqli_query($conn, $sql);
if (!$result) echo "eRROR";
?>
