<?php 
    session_start();
    if(!isset($_SESSION['signin-success'])){
        header("Location: 8_signin.php");
    }

    $email = $_SESSION['my_email'];

    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    $sql = "SELECT * FROM users WHERE email='$email';";
    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);
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
    <link rel="stylesheet" href="css/my-profile.css">

    <title>Document</title>
</head>
<body>
    <header>
        <h1>Student Management System</h1>
    </header>
    <main>
        <section>
            <div class="main-content">
                <div>
                    <div>
                        <a href="./1_index.php">
                            <button class="btn">Student List</button>
                        </a>
                   </div>
                    <br>
                    <div>
                        <a href="./2_addStudent.php">
                            <button class="btn">New Student</button>
                        </a>
                    </div>
                    <br>
                    <div>
                        <a href="./2_addStudent.php">
                            <button class="btn">My Profile</button>
                        </a>
                    </div>
                </div>
                <div class="studentContainer">
                    <div class="logoutContainer">
                        <h2>My Profile</h2>
                        <a href="./12_logout.php">
                            <button class="btn">Logout</button>
                        </a>
                    </div>
                    <hr>
                    <div class="myProfile-container">
                        <?php 
                            if(isset($_SESSION['update_password_msg'])) {?>
                                <p class="update_password_msg"><?php echo $_SESSION['update_password_msg']; ?></p>
                        
                        <?php
                        }
                        ?>
                        <img src="<?php echo $row['imageLink'] ?>" alt="">
                        <p>Name: <?php echo $row['name'] ?></p>
                        <p>Unique Key: <?php echo $row['uniqueKey'] ?></p>
                        <p>Email: <?php echo $row['email'] ?></p>
                        <p>
                            Password: 
                            <input class="password-field" type="password" value="<?php echo $row['password'] ?>" disabled> 
                            <a class="password-update" href="./14_update-password.php?uniqueKey=<?php echo $row['uniqueKey']; ?>">update password</a>
                        </p>

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

<?php 
    unset($_SESSION['update_password_msg']);
?>