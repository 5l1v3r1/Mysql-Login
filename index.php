<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="PHP-MySQL Login">
  <meta name="author" content="Choudhary Abdullah">
  <meta name="keywords" content="Cyberstark Corporation">
  <meta name="theme-color" content="#202029">
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <title>PHP-MySQL Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  body
  {
    font-family: montserrat;
    background-color: #5cdb95 !important;
  }
  .form
  {
    width: 310px;
    background: #f1f1f1;
    height: 310px;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  .form h2
  {
    text-align: center;
  }
  </style>
</head>

<body>

  <div class="form">
  <pre><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h2>Login</h2>
      <input type="text" name="username" placeholder="Username" class="btn btn-light"></br>
      <input type="text" name="password" placeholder="Password" class="btn btn-light"></br>
      <input type="submit" class="btn btn-success">
  </form></pre>
  </div>

</body>
</html>
