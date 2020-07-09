<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resister Page</title>
  <link rel="stylesheet" href="./css/Index_Page.css">
  <link rel="stylesheet" href="./css/Register.css">
</head>

<body>
  <header>
    <div class="Logo_Container">
      <a href="./index.php"><img class="logo" src="./images/logo.JPG" alt="logo"></a>
    </div>

    <h1>
      Connection Website
    </h1>
  </header>
  <?php
  if (isset($_GET['error'])) {
    if ($_GET["error"] == "emptyfields") {
      echo '<p style="text-align:center;color:red">Fill in all Fields!</p>';
    } else if ($_GET["error"] == "invaliduidmail") {
      echo '<p style="text-align:center;color:red">Invalid Username and E-mail!</p>';
    } else if ($_GET["error"] == "invaliduid") {
      echo '<p style="text-align:center;color:red">Invalid Username!</p>';
    } elseif ($_GET["error"] == "invalidmail") {
      echo '<p style="text-align:center;color:red">invalid E-mail!</p>';
    } elseif ($_GET["error"] == "passwordcheck") {
      echo '<p style="text-align:center;color:red">Your Passwords do not match!</p>';
    } elseif ($_GET["error"] == "emptyfield") {
      echo '<p style="text-align:center;color:red">invalid username and e-mail!</p>';
    } elseif ($_GET["error"] == "usertaken") {
      echo '<p style="text-align:center;color:red">User is already taken!</p>';
    }
  }
  ?>
  <div class="wrap">
    <h2>Register Here</h2>
    <form action="./includes/register.php" method="post">

      <input type="text" name="uid" placeholder="Username...">
      <input type="text" name="mail" placeholder="E-mail...">
      <input type="password" name="pwd" placeholder="Password...">
      <input type="password" name="pwd_repeat" placeholder="Repeat password...">
      <button class="button" type="submit" name="register-submit">Register</button>
    </form>
    <a href="./SignIn.php"><button class="button" type="button">Login</button> </a>
  </div>
</body>

</html>