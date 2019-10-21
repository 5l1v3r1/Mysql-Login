<?php
require_once "database.php";
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
  header("location: index.php");
  exit;
}
$username = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $id = $_SESSION["id"];
  $username = mysqli_real_escape_string($conn, trim($_POST["username"]));
  $password = md5(mysqli_real_escape_string($conn, trim($_POST["password"])));
  $query = "UPDATE users SET password = '$password' WHERE id = '$id'";
  $result = mysqli_query($conn, $query);
  if (!$result) die("Fatal Error");
  else
  {
    session_destroy();
    header("location: index.php");
    exit();
  } mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Choudhary Abdullah">
  <meta name="description" content="Sign Up">
  <meta name="keywords" content="Choudhary Abdullah">
  <meta name="theme-color" content="#fff">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="reset-password.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="heading"><h3>Reset Password</h3></div>
      <div class="param"><input type="text" name="username" placeholder="Username" class="btn btn-light"></div>
      <div class="param"><input type="password" name="password" placeholder="New Password" class="btn btn-light"></div>
      <div class="sbmt"><input type="submit" class="btn btn-success"></div>
    </form>
</body>
</html>
