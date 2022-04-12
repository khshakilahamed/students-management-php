<?php 
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password';";

    $result = mysqli_query($conn, $sql);

    $rowCount = mysqli_num_rows($result);

    if($rowCount == 1){
        $_SESSION['signin-success'] = true;
        $_SESSION['my_email'] = $email;
        header("Location: 1_index.php");
    }
    else{
        $_SESSION['signin_error'] = true;
        header("Location: 8_signin.php");
    }
?>