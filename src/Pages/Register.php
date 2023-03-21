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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Đăng ký</title>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <?php include "../Components/Header/Header.php"?>
    <div class="flex justify-center h-full my-5">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="flex flex-col py-10 px-5 border" method="post">
            <h1 class="uppercase font-bold text-2xl text-center my-5">Đăng ký tài khoản</h1>
            <input type="text" name="name" id="name" placeholder="Họ và tên"
                class="border p-2 my-2 focus:outline-none text-sm w-80" name="name">
            <input type="number" name="phone" id="phone" placeholder="Số điện thoại"
                class="border p-2 my-2 focus:outline-none text-sm w-80" name="phone">
            <input type="text" name="username" id="username" placeholder="Tên tài khoản"
                class="border p-2 my-2 focus:outline-none text-sm w-80" name="username">
            <input type="password" name="password" id="password" placeholder="Mật khẩu"
                class="border p-2 my-2 focus:outline-none text-sm w-80" name="password">
            <button type="submit" class="bg-sky-500 text-white font-bold uppercase p-2 rounded mt-2" id="btnSubmit">Đăng
                ký</button>
            <h2 class="mt-2 text-sm text-gray-500 text-center">Đã có tài khoản đăng nhập tại đây <a
                    href="/web-tour/src/Pages/Login.php" class="text-sky-500">tại đây</a></h2>
        </form>
    </div>
    <?php include "../Components/Footer/Footer.php"?>
</body>

</html>