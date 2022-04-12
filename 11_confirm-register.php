<?php 
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $imageLink = $_POST['image'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $uniqueKey = $name.rand(1, 10000);

    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    


    
    if($password != $password2){
        $_SESSION['error_msg'] = "Both password should be matched";
        header("Location: 10_signup.php");
    }
    else{
        $sql = "SELECT * FROM users WHERE email='$email';";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount == 1){
            $_SESSION['signup_error_msg'] = "Email already exist. Please login";
            header("Location: 8_signin.php");
        }
        else{
            $sql2 = "INSERT INTO users VALUES(null, '$name', '$email', '$imageLink', '$password','$uniqueKey');";

            if(mysqli_query($conn, $sql2)){
                $_SESSION['signup_msg'] = "Successfully created account. Please login here";
                header("Location: 8_signin.php");
            }
        }
    }
?>