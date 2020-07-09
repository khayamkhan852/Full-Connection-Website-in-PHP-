<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="./css/Index_Page.css">
</head>

<body>
    <?php
    if (isset($_SESSION['userId'])) {
        header("Location: ./After_Login_First_Page.php");
   
    } else {
        echo ' 
        <header>
            <div class="Logo_Container">
                <a href="./index.php"><img class="logo" src="./images/logo.JPG" alt="logo"></a>
            </div>

            <h1>
                Connection Website
            </h1>
        </header>
        <br><br>

        <div class="Button_Div">
            <center>
                <p>
                    To Register Yourself, go to Registeration Page
                </p>
                <a href="./Register.php"><button class="myButton">Register</button> </a>
                <br><br>
                <hr>
                <br>
                <p>
                    To Log in, Go to Log In page
                </p>
                <a href="./SignIn.php"><button class="myButton">Sign In </button> </a>
            </center>
        </div>';
    }
    ?>

</body>

</html>