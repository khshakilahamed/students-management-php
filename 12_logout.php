<?php
    session_start();
    session_destroy();

    header('Location: 8_signin.php');
?>