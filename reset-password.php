<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
  header("location: index.php");
  exit;
}
require_once "database.php";
$username = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $username = mysqli_real_escape_string($conn, trim($_POST["username"]));
  $password = md5(mysqli_real_escape_string($conn, trim($_POST["password"])));
  $password1 = md5(mysqli_real_escape_string($conn, trim($_POST["password1"])));
  if ($password == $password1)
  {
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $row = $result->fetch_assoc();
    $id = $row["id"];
    if ($username == $_SESSION["username"])
    {
      $query = "UPDATE users SET password = '$password' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
      if (!$result) die("Fatal Error");
      else
      {
        session_destroy();
        header("location: index.php");
        exit();
      }
    }
  }
   mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Choudhary Abdullah">
  <meta name="description" content="Reset Password">
  <meta name="keywords" content="Choudhary Abdullah">
  <meta name="theme-color" content="#fff">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" type="text/css" href="reset-password.css">
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="heading"><h3>Reset</h3></div>
      <div class="param"><input type="text" name="username" autocomplete="off" placeholder="Username" class="btn btn-light"></div>
      <div class="param"><input type="password" name="password" autocomplete="off" placeholder="New Password" class="btn btn-light"></div>
      <div class="param"><input type="password" name="password1" autocomplete="off" placeholder="Retype Password" class="btn btn-light"></div>
      <div class="sbmt"><input type="submit" class="btn btn-success"></div>
    </form>
</body>
</html>
