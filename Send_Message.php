<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
    <link rel="stylesheet" href="./css/send_Message.css">
</head>

<body>
    <?php
    require "./includes/Database_Connection.php";
    require "./After_Login_NavBar.php";
    ?>

    <div class="caption">
        <h1>
            Send a New Message
        </h1>
        <p>
            You want to Send Message, So here You are, Send a message
        </p>
    </div>

    <form id="contact-form" action="./includes/Send_Message_Action.php" method="post">
        <input type="email" name="email" class="form-control" placeholder="Email... ">
        <br>
        <textarea name="Message" class="form-control" cols="30" rows="5" placeholder="Type your Message ... "></textarea>
        <br>
        <button class="form-control submit" type="submit" name="Send_Message">Send</button>
    </form>

    <?php
        if (isset($_GET['error'])) {
            if ($_GET["error"] == "emptyfields") {
                echo '<p style="text-align:center;color:red">Fill in all Fields!</p>';
            }else if($_GET["error"] == "invaliduidmail"){
                echo '<p style="text-align:center;color:red">Invalid E-mail!</p>';
            }
        }
    ?>
</body>

</html>