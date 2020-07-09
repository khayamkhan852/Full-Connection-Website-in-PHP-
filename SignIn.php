<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="./css/Index_Page.css">
    <link rel="stylesheet" href="./css/Login.css">
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
    <h2 class="heading-one">Login</h2>
    <form action="./includes/login.php" method="post">
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="mailuid" placeholder="Username/Email...">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd" placeholder="Password...">
        </div>
        <button class="btn" type="submit" name="login-submit">Login</button>
    </form>
    <a href="./Register.php"><button class="btn">Register Yourself</button></a>

</body>

</html>