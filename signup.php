<?php
require_once "database.php";
$name = $email = $username = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
  $email = mysqli_real_escape_string($conn, trim($_POST["email"]));
  $username = mysqli_real_escape_string($conn, trim($_POST["username"]));
  $password = md5(mysqli_real_escape_string($conn, trim($_POST["password"])));
  $query = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
  $result = mysqli_query($conn, $query);
  if (!$result) die("Fatal Error");
  else
  {
    header("Location: index.php");
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
  <link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="script.js"></script>
  <script src="font-awesome.min.js"></script>
</head>
<body>
  <div class="form">
    <form action="#" id="myForm" method="post">
      <div class="heading"><h2>Sign Up</h2></div>
      <div class="param"><input id="name1" type="text" name="name" autocomplete="off" onblur="validate('name', this.value)" placeholder="Name" class="btn btn-light"><span id='name'></span></div>
      <div class="param"><input id="email1" type="text" name="email" autocomplete="off" onblur="validate('email', this.value)" placeholder="Email" class="btn btn-light"><span id='email'></span></div>
      <div class="param"><input id="username1" type="text" name="username" autocomplete="off" onblur="validate('username', this.value)" placeholder="Username" class="btn btn-light"><span id='username'></span></div>
      <div class="param"><input id="password1" type="password" name="password" autocomplete="off" onblur="validate('password', this.value)" placeholder="Password" class="btn btn-light"><span id='password'></span></div>
      <div class="sbmt"><input onclick="checkForm()" type='button' value='Submit' class="btn btn-success"></div>
    </form>
</body>
</html>
