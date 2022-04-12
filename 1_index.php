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
                        <h2>Student List</h2>
                        <a href="">
                            <button class="btn">Logout</button>
                        </a>
                    </div>
                    <hr>
                    <div class="table-container">
                        <table>
                            <thead>
                                <th>#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th> 
                                <th>Action</th> 
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['student_id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td>
                                            <a href="">
                                                <button class="btn-details" title="Details">
                                                    <img width="20" height="20" src="./images/list.png" alt="">
                                                </button>
                                            </a>
                                            <a href="">
                                                <button class="btn-edit" title="Edit">
                                                    <img width="20" height="20" src="./images/editing.png" alt="">
                                                </button>
                                            </a>
                                            <a href="">
                                                <button class="btn-delete" title="Delete">
                                                    <img width="20" height="20" src="./images/bin.png" alt="">
                                                </button>
                                            </a>
                                        </td>
                                    </tr>

                                    <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>