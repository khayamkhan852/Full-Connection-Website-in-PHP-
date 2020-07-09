<?php
session_start();
?>
<?php
if (isset($_POST['Send_Message'])) {
    require 'Database_Connection.php';

    $To_email  = $_POST['email'];
    $Message = $_POST['Message'];
    $From_email = $_SESSION['userEmail'];

    if (empty($To_email) || empty($Message)) {
        header("Location: ../Send_Message.php?error=emptyfields&email=" . $To_email . "&Message = " . $Message);
        exit();
    } else if (!filter_var($To_email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../Send_Message.php?error=invalidmailuid");
        exit();
    } else {
        $sql = "INSERT INTO messages_table (To_Email,From_Email, Actual_Text_Message,Time_of_Message) VALUES (?, ?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Send_Message.php?error=sqlerror");
            exit();
        } else {
            $t = time();
            $date = date("Y-m-d", $t);
            mysqli_stmt_bind_param($stmt, 'ssss', $To_email, $From_email, $Message, $date);
            mysqli_stmt_execute($stmt);
            header("Location: ../Send_Message.php?MessageSent");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../Send_Message.php");
    exit();
}

?>