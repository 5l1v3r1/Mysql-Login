<?php
require_once "database.php";
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "name") {
if (strlen($value) > 0 && !preg_match("/^([a-zA-Z' ]+)$/", $value)) {
echo <<<IOK1
<i class="fas fa-times-hexagon" aria-hidden="true"></i>
IOK1;
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
$query = "SELECT id FROM users WHERE email = '$value'";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
if (strlen($value) > 0 && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $value)) {
echo <<<IOK2
<i class="fas fa-times-hexagon" aria-hidden="true"></i>
IOK2;
}
else if (is_numeric($row["id"])) {
echo <<<IOK3
<i class="fas fa-times-hexagon" aria-hidden="true"></i>
IOK3;
}
}
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
$query = "SELECT id FROM users WHERE username = '$value'";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
if (strlen($value) > 0 && is_numeric($row["id"])) {
echo <<<IOK4
<i class="fas fa-times-hexagon" aria-hidden="true"></i>
IOK4;
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
if (strlen($value) > 0 && strlen($value) < 8) {
echo <<<IOK5
<i class="fas fa-times-hexagon" aria-hidden="true"></i>
IOK5;
}
}
if ($formfield == "rpassword") {
if (strlen($value) > 0 && strlen($value) < 8) {
echo <<<IOK6
<i class="fas fa-times-hexagon" aria-hidden="true"></i>
IOK6;
}
}

?>
