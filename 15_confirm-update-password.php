<?php 
    session_start();
    $uniqueKey = $_GET['uniqueKey'];

    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    $sql = "UPDATE users SET password='$password' WHERE uniqueKey='$uniqueKey';";

    if(mysqli_query($conn, $sql)){
        $_SESSION['update_password_msg'] = "Password Updated";
        header("Location: 13_my-profile.php");
    }

    echo $password;
?>