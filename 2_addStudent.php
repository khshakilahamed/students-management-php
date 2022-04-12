<?php 
    session_start();
    if(!isset($_SESSION['signin-success'])){
        header("Location: 8_signin.php");
    }
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
    <link rel="stylesheet" href="css/addStudent.css">
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
                        <a href="./13_my-profile.php">
                            <button class="btn">My Profile</button>
                        </a>
                    </div>
                </div>
                <div class="studentContainer">
                    <?php 
                        if(isset($_SESSION['insert_error'])) { ?>
                            <p class="insert_error"><?php echo "Something wrong. Please, try again." ?></p>

                       <?php }
                    ?>
                    <div class="logoutContainer">
                        <h2>Add a Student</h2>
                        <a href="./12_logout.php">
                            <button class="btn">Logout</button>
                        </a>
                    </div>
                    <hr>

                    <form action="./3_store.php" method="POST" class="student-form">
                        <label for="id">Student ID: </label>
                        <input type="text" name="student_id" id="id" placeholder="Student ID" required>

                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" placeholder="Name" required>

                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" placeholder="Email" required>

                        <label for="semester">Semester: </label>
                        <input type="number" name="semester" id="semester" placeholder="Semester" required>

                        <label for="image">Image Link: </label>
                        <input type="text" name="image" id="image" placeholder="Image Link" required>

                        <label for="department">Department: </label>
                        <input type="text" name="department" id="department" placeholder="Department" required>

                        <label for="section">Section: </label>
                        <input type="text" name="section" id="section" placeholder="Section" required>

                        <label for="phone">Phone: </label>
                        <input type="number" name="phone" id="phone" placeholder="Phone Number" required>

                        <label for="address">Address: </label>
                        <textarea name="address" id="address" rows="3" placeholder="Address" required></textarea>

                        <div>
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>