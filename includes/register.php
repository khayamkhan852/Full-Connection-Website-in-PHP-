<?php
if (isset($_POST['register-submit'])) { //user got here
  require 'Database_Connection.php';

  $username = $_POST['uid'] ;
  $email = $_POST['mail'] ;
  $password = $_POST['pwd'] ;
  $passwordRepeat = $_POST['pwd_repeat'] ;

  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../Register.php?error=emptyfields&uid=".$username."&mail=".$email."&password=".$password);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../Register.php?error=invalidmailuid");
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //will automatically filter out the email structure 
    header("Location: ../Register.php?error=invalidmail&uid=".$username);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../Register.php?error=invaliduid&mail=".$email);
    exit();
  }
  elseif ($password !== $passwordRepeat) {
    header("Location: ../Register.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }
  else {
    //prepared statement '?' is the place holder, its for security
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn); //creating a prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) { //preparing the prepared statement
      header("Location: ../Register.php?error=sqlerror");
      exit();
    }else {
      mysqli_stmt_bind_param($stmt, 's', $username); //binding the parameters
      mysqli_stmt_execute($stmt); //executing the prepared statement
      //checking for already registered user
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt); //how many result in variable stmt
      if ($resultCheck > 0) {
        header("Location: ../Register.php?error=usertaken&mail=".$email);
        exit();
      }
      else {
        $sql = "INSERT INTO users (UidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) { //preparing the prepared statement
          header("Location: ../Register.php?error=sqlerror");
          exit();
      }
      else {
        //Hashing the password
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashedPwd); //3 sss because we have 3 place holders
        mysqli_stmt_execute($stmt);
        header("Location: ../Register.php?SignUp=success");
        exit();
      }
    }
  }
}
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../Register.php");
  exit();
}
