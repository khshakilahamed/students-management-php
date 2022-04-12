<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&family=Roboto&display=swap" rel="stylesheet">

    <!-- font awesome  -->
    <script src="https://kit.fontawesome.com/3697f7f864.js" crossorigin="anonymous"></script>

    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signin.css">

    <title>Document</title>
</head>
<body>
    <div class="signIn-container">
        <form action="" class="signIn-form-container">
            <h2>Sign in</h2>

            <label for="email" class="label">Email: </label>
            <input type="email" class="input" name="email" id="email" placeholder="Email" required>

            <label for="password" class="label">Password: </label>
            <input type="password" class="input" name="password" id="password" placeholder="Password" required>

            <span class="checkbox-container">
                <input type="checkbox" name="" id="checkbox"> <label for="checkbox"><small>show password</small></label>
            </span>
            <p><small><a href="./10_signup.php" class="register-link">click here</a> to register</small></p>

            <button class="btn">Sign up</button>
            <div>
            </div>
        </form>
    </div>

    <script src="./js/jquery-3.6.0.js"></script>
    <script>
        $('#checkbox').click(()=>{
            $('#password').attr('type', $('#checkbox').is(':checked') ? 'text':'password');
        });
    </script>
</body>
</html>