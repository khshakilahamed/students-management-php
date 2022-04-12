<?php 

    $id = $_GET['id'];

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

    $sql = "UPDATE students SET student_id='$student_id', name='$name', email='$email', semester='$semester', imageLink='$imageLink', department='$department', section='$section', phone='$phone', address='$address' WHERE id=$id;";

    if(mysqli_query($conn, $sql)){
        header("Location: 1_index.php");
    }

    else{
        
    }

    // echo $name, $email, $semester, $imageLink, $department, $section, $phone, $address;
?>