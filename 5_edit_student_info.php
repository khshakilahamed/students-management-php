<?php 
    $student_id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    $sql = "SELECT * FROM students WHERE student_id='$student_id'";
    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);

    // echo $row['address']
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
                    <a href="./1_index.php">
                        <button class="btn">Student List</button>
                    </a>
                </div>
                <div class="studentContainer">
                    <div class="logoutContainer">
                        <h2>Edit Student Info</h2>
                        <a href="">
                            <button class="btn">Logout</button>
                        </a>
                    </div>
                    <hr>

                    <form action="./6_update_student_info.php?id=<?php echo $row['id'] ?>" method="POST" class="student-form">
                        <label for="id">Student ID: </label>
                        <input type="text" value="<?php echo $row['student_id'] ?>" name="student_id" id="id" placeholder="Student ID" required>

                        <label for="name">Name: </label>
                        <input type="text" value="<?php echo $row['name'] ?>" name="name" id="name" placeholder="Name" required>

                        <label for="email">Email: </label>
                        <input type="email" value="<?php echo $row['email'] ?>" name="email" id="email" placeholder="Email" required>

                        <label for="semester">Semester: </label>
                        <input type="number" value="<?php echo $row['semester'] ?>" name="semester" id="semester" placeholder="Semester" required>

                        <label for="image">Image Link: </label>
                        <input type="text" value="<?php echo $row['imageLink'] ?>" name="image" id="image" placeholder="Image Link" required>

                        <label for="department">Department: </label>
                        <input type="text" value="<?php echo $row['department'] ?>" name="department" id="department" placeholder="Department" required>

                        <label for="section">Section: </label>
                        <input type="text" value="<?php echo $row['section'] ?>" name="section" id="section" placeholder="Section" required>

                        <label for="phone">Phone: </label>
                        <input type="number" value="<?php echo $row['phone'] ?>" name="phone" id="phone" placeholder="Phone Number" required>

                        <label for="address">Address: </label>
                        <textarea name="address" id="address" rows="3" placeholder="Address" required><?php echo $row['address'] ?></textarea>

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