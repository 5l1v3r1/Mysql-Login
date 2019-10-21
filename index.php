<?php
require_once "database.php";
$username = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $username = mysqli_real_escape_string($conn, trim($_POST["username"]));
    $password = md5(mysqli_real_escape_string($conn, $_POST["password"]));
    $query = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = $result->fetch_assoc();
    if (!$result) die("Fatal Error");
    else if (is_numeric($row["id"]))
    {
      header("Location: home.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Login">
  <meta name="author" content="Choudhary Abdullah">
  <meta name="keywords" content="Choudhary Abdullah">
  <meta name="theme-color" content="#fff">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="form">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="heading"><h2>Login</h2></div>
      <div class="param"><input type="text" name="username" placeholder="Username" class="btn btn-light"></div>
      <div class="param"><input type="password" name="password" placeholder="Password" class="btn btn-light"></div>
      <div class="sbmt"><input type="submit" class="btn btn-success"></div>
  </form>
  </div>
</body>
</html>
