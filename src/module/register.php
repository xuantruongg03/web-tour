<?php
    include "../config/connectDB.php";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user (user_first_name, user_last_name, user_name, user_password, user_role) VALUES 
    ('$first_name', '$last_name', '$username', '$password', 'user')";
    if (mysqli_query($conn, $sql)) {
        echo "Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>