<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After NavBar</title>
    <link rel="stylesheet" href="./css/After_Login_NavBar_css.css">
</head>

<body>
    <header>
        <div class="logo_Container">
            <a class="logo" href="./After_Login_First_Page"> Profile</a>
        </div>
        <nav>
            <ul class="nav_Links">
                <li><a class="nav_Link" href="./Send_Message.php">Send Message</a></li>
                <li><a class="nav_Link" href="./inbox.php">inbox</a></li>
                <li><a class="nav_Link" href="./Sent_Messages.php">Sent Messages</a></li>
            </ul>
        </nav>
        <div class="cart">
            <form action="./includes/logout.php" method="post">
                <button class="btn" type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
    </header>
</body>

</html>