<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        include "../config/connectDB.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username_query = "SELECT * FROM users where user_username = '$username'";
    $username_check_result = mysqli_query($conn, $username_query);
    $username_check_row = mysqli_fetch_array($username_check_result);
    // echo json_encode($username_check_row);
    if ($username_check_row['user_username'] !== $username) {
        echo "Not found username";
        return;
    } else {
        if ($username_check_row['user_password'] === $password) {
            echo "Logged in";
            return;
        } else {
            echo "Wrong password";
            return;
        }
    }
    mysql_close($conn);
    } else {
        echo "Not found username or password";
        return;
    }
?>