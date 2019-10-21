<?php
$host = "localhost";
$username = "root";
$password = "CKhpzyGuBke9S!U";
$database  = "phplogin";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn)
{
 die("Connection failed: " . mysqli_connect_error());
}
?>
