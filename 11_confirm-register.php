<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $uniqueKey = $name.rand(1, 10000);

    

    
    if($password != $password2){
        echo "<script>alert('Both password should be same')</script>;";
        header("Location: 10_signup.php");
    }
    echo "password1: ".$password." password2: ".$password2;
?>