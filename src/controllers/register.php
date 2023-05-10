<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['username']) && isset($_POST['password'])) {
        include "../config/connectDB.php";
        $name = $_POST['name'];
        $parts = explode(" ", $name);
        $last_name = array_pop($parts);
        $first_name = implode(" ", $parts);
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (user_firstname, user_lastname, user_phone, user_username, user_password, user_role) VALUES 
                ('$first_name', '$last_name', '$phone', '$username', '$password', 'user')";
        if (mysqli_query($conn, $sql)) {
            header("Location: /web-tour/src/Pages/Login.php");
        } else {
            $error = "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo $error;
        }
        mysqli_close($conn);
    }
    
?>