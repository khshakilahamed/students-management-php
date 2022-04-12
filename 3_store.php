<?php 

    session_start();

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
        $_SESSION['successfully-added'] = true;
        header("Location: 1_index.php");
    }

    else{
        $_SESSION['insert-error'] = true;
        header("Location: 3_store.php");
    }

    // echo $name, $email, $semester, $imageLink, $department, $section, $phone, $address;
?>