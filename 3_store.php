<?php 


    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $semester = $_POST['semester'];
    $imageLink = $_POST['image'];
    $department = $_POST['department'];
    $section = $_POST['section'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');

    $sql = "INSERT INTO students VALUES(null, '$student_id', '$name', '$email', '$semester', '$imageLink', '$department', '$section', '$phone', '$address');";

    if(mysqli_query($conn, $sql)){
        header("Location: 1_index.php");
    }

    // echo $name, $email, $semester, $imageLink, $department, $section, $phone, $address;
?>