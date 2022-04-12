<?php 
    $student_id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    $sql = "SELECT * FROM students WHERE student_id='$student_id'";
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
    <link rel="stylesheet" href="css/studentDetails.css">

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
                    <a href="./2_addStudent.php">
                        <button class="btn">New Student</button>
                    </a>
                </div>
                <div class="studentContainer">
                    <div class="logoutContainer">
                        <h2>Student Details</h2>
                        <a href="">
                            <button class="btn">Logout</button>
                        </a>
                    </div>
                    <hr>
                    <div class="student-details">
                        <div>
                            <img src="<?php echo $row['imageLink'] ?>" alt="">
                            <p class="student-name"><?php echo $row['name'] ?></p>
                            <p>Student ID: <?php echo $row['student_id'] ?></p>
                            <p>Email: <?php echo $row['email'] ?></p>
                            <p>Semester: <?php echo $row['semester'] ?></p>
                            <p>Section: <?php echo $row['section'] ?></p>
                            <p>Department: <?php echo $row['department'] ?></p>
                            <p>Contact Number: <?php echo $row['phone'] ?></p>
                            <p>Address: <?php echo $row['address'] ?></p>
                            
                            <a href="./1_index.php">
                                <button class="btn">Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>