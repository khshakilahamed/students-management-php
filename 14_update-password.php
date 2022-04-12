<?php 
    session_start();
    if(!isset($_SESSION['signin-success'])){
        header("Location: 8_signin.php");
    }

    $uniqueKey=$_GET['uniqueKey'];

    $email = $_SESSION['my_email'];

    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    $sql = "SELECT * FROM users WHERE uniqueKey='$uniqueKey';";
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
    <link rel="stylesheet" href="css/update-password.css">

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
                        <img src="<?php echo $row['imageLink'] ?>" alt="">
                        <p>Name: <?php echo $row['name'] ?></p>
                        <p>Unique Key: <?php echo $row['uniqueKey'] ?></p>
                        <p>Email: <?php echo $row['email'] ?></p>
                        <div>
                            <form action="./15_confirm-update-password.php?uniqueKey=<?php echo $row['uniqueKey']; ?>" method="POST">
                                Password: 
                                <input class="password-field" type="password" id="password" name="password" value="<?php echo $row['password'] ?>"> 
                                <br>
                                <input type="checkbox" name="" id="checkbox"> <label for="checkbox"><small>show password</small></label>
                                <br>
                                <input class="btn" type="submit" value="Save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="./js/jquery-3.6.0.js"></script>
    <script>
        $('#checkbox').click(()=>{
            $('#password').attr('type', $('#checkbox').is(':checked') ? 'text':'password');
        });
    </script>
</body>
</html>
