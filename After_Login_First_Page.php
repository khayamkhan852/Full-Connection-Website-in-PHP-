<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/table.css">
</head>

<body>
    <?php
    require "./After_Login_NavBar.php";
    require "./includes/Database_Connection.php";
    ?>
    
    <br><br><br>
    <center>
        <?php
            $User_Name = $_SESSION['userUid'];
            $User_Email = $_SESSION['userEmail'];
        ?>
        <table class="Table">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            echo $User_Name;
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $User_Email;
                        ?>
                    </td>
                </tr>
            </tbody>
            </tr>
        </table>
    </center>
</body>

</html>