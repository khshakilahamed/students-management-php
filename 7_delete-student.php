<?php 
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
    $sql = "DELETE FROM students WHERE student_id='$id'";

    if(mysqli_query($conn, $sql)){
        header("Location: 1_index.php");
    }
    else{
        echo "Not Deleted";
    }
?>