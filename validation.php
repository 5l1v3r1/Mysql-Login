<?php
require_once "database.php";
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "name") {
if (strlen($value) > 0 && !preg_match("/^([a-zA-Z' ]+)$/", $value)) {
echo "\u{274C}";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
if (strlen($value) > 0 && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $value)) {
echo "\u{274C}";
}
}
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
$query = "SELECT id FROM users WHERE username = '$value'";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
if (strlen($value) > 0 && is_numeric($row["id"])) {
echo "\u{274C}";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
if (strlen($value) > 0 && strlen($value) < 8) {
echo "\u{274C}";
}
}
?>
