<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="PHP-MySQL Login">
  <meta name="author" content="Choudhary Abdullah">
  <meta name="keywords" content="Cyberstark Corporation">
  <meta name="theme-color" content="#fff">
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <title>PHP-MySQL Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  body
  {
    background-color: #5cdb95 !important;
  }
  .form
  {
    width: 300px;
    background: #f1f1f1;
    height: 290px;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  .form h2
  {
    text-align: center;
    font-weight: 500;
  }
  .param
  {
    display: table;
    margin: 0 auto;
    padding-bottom: 20px;
  }
  .sbmt
  {
    display: table;
    margin: 0 auto;
    padding-top: 5px;
  }
  .heading
  {
    padding-top: 30px;
    padding-bottom: 20px;
  }
  </style>
</head>

<body>

  <div class="form">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="heading"><h2>Login</h2></div>
      <div class="param"><input type="text" name="username" placeholder="Username" class="btn btn-light"></div>
      <div class="param"><input type="password" name="password" placeholder="Password" class="btn btn-light"></div>
      <div class="sbmt"><input type="submit" class="btn btn-success"></div>
  </form>

  <?php
  $ousername = $_POST["username"];
  $opassword = $_POST["password"];
  $username = "CyberStark";
  $password = "@TheDawn89";

  if($ousername == $username && $opassword == $password){ ?>

    <script type="text/javascript">
       window.open('home.php', '_self');
    </script>

  <?  } ?>

  </div>

</body>
</html>
