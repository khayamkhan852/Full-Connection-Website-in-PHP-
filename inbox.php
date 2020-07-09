<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link rel="stylesheet" href="./css/inbox.css">
</head>

<body>
    <?php
    require "./includes/Database_Connection.php";
    require "./After_Login_NavBar.php";

    echo '<center><br><h1>This is InBox</center></h1>';

    $User_Email = $_SESSION['userEmail'];

    $sql = "SELECT * FROM messages_table where TO_EMAIL = '$User_Email'";
    $result = mysqli_query($conn, $sql);
    while($result_Check = mysqli_fetch_array($result)){
        echo '
        <div class="sender_Container">
            <h3>'. 
                $result_Check['From_Email']
            .'</h3>
        </div>'; 
        echo '
        <div class="time">
            <h3>'. 
                $result_Check['Time_of_Message']
            .'</h3>
        </div>';
    echo '
        <div class="message">
            <p>'.
                $result_Check['Actual_Text_Message'].
            '</p>
        </div>';
    }
    ?>
</body>

</html>