<?php
        session_start();
    if (isset($_SESSION['user_id'])) {
        header("Location: /web-tour/index.php");
    }
    if (isset($_POST['username'])) {
        include "../config/connectDB.php";
        $username = $_POST['username'];
        $check_user = "SELECT * from users where user_username = '$username'";
        $check_user_result = mysqli_query($conn, $check_user);
        if (mysqli_num_rows($check_user_result) == 0) {
            $error_user = "Not found username";
        } else {
            $check_user_result_row = mysqli_fetch_array($check_user_result);
            $password = $_POST['password'];
            if ($check_user_result_row['user_username'] !== $_POST['username']) {
                $error_user = "Not found username";
                exit();
            } else {
                if ($check_user_result_row['user_password'] === $_POST['password']) {
                    $_SESSION['user_id'] = $check_user_result_row['user_id'];
                    $_SESSION['username'] = $check_user_result_row['user_username'];
                    $_SESSION['role'] = $check_user_result_row['user_role'];
                    header("Location: /web-tour/index.php");
                } else {
                    $error_password = "Wrong password";
                    // exit();
                }
            }
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
    <script src="../Lib/tailwind.js"></script>
    <title>Đăng nhập</title>
    <style>
        @keyframes sliderIn {
            0% {
                top: 50%;
            }

            100% {
                top: 0px;
            }
        }

        .animationIn {
            animation: sliderIn 0.5s ease-in-out;
            animation-fill-mode: forwards;
        }

        @keyframes sliderOut {
            0% {
                top: -0.5px;
            }

            100% {
                top: 50%;
            }
        }

        .animationOut {
            animation: sliderOut 0.5s ease-in-out;
            animation-fill-mode: forwards;
        }
    </style>
</head>
<body>
    <?php include "../Components/Header/Header.php"?>
    <div class="flex justify-center h-full my-5">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" class="flex flex-col py-10 px-5 border" method="post">
            <h1 class="uppercase font-bold text-2xl text-center my-5">Đăng nhập Tài Khoản</h1>
            <div class="relative mt-2">
                <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : '' ?>"
                    class="border rounded p-2 my-2 focus:outline-none text-sm w-80 <?php echo isset($error_user) ? 'border-red-500' : ''?>">
                <label for="username" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400 <?php echo isset($error_user) ? 'text-red-500' : ''?>"
                    id="labelUsername">Tên đăng nhập</label>
            </div>
            <?php
                if (isset($error_user)) {
                    echo '<label for="" class="text-xs text-red-500 mb-2" id="validUsername">Tên đăng nhập không tồn tại!</label>';
                }
            ?>
            <div class="relative mt-3">
                <input type="password" name="password" id="password" value="<?php echo isset($password) ? $password : '' ?>"
                    class="border rounded p-2 my-2 focus:outline-none text-sm w-80 <?php echo isset($error_password) ? 'border-red-500' : ''?>">
                <label for="username" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400 <?php echo isset($error_password) ? 'text-red-500' : ''?>"
                    id="labelPassword">Mật khẩu</label>
            </div>
            <?php
                if (isset($error_password)) {
                    echo '<label for="" class="text-xs text-red-500 mb-2" id="validPassword">Sai mật khẩu!</label>'  ;                }
            ?>
            <a href="#" class="text-sky-500 font-semibold mt-3 mb-2 underline text-sm">Quên mật khẩu?</a>
            <button type="submit" class="bg-sky-500 text-white font-bold uppercase p-2 rounded" id="btnSubmitLogin">Đăng
                nhập</button>
            <h2 class="mt-2 text-sm text-gray-500 text-center">Chưa có tài khoản đăng ký <a
                    href="/web-tour/src/Pages/Register.php" class="text-sky-500">tại đây</a></h2>
        </form>
    </div>
    <?php include "../Components/Footer/Footer.php"?>
    <script>
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            const labelForUsername = document.getElementById('labelUsername');
            const labelForPassword = document.getElementById('labelPassword');
            if (username.value !== '') {
                labelForUsername.classList.add('animationIn');
            }
            if (password.value !== '') {
                labelForPassword.classList.add('animationIn');
            }
            //animation for input username
            username.addEventListener('focus', () => {
                labelForUsername.classList.remove('animationOut');
                labelForUsername.classList.add('animationIn');
            });
            username.addEventListener('focusout', () => {
                const value = username.value;
                if (value === '') {
                    labelForUsername.classList.remove('animationIn');
                    labelForUsername.classList.add('animationOut');
                }
            });
            //animation for input password
            password.addEventListener('focus', () => {
                labelForPassword.classList.remove('animationOut');
                labelForPassword.classList.add('animationIn');
            });
            password.addEventListener('focusout', () => {
                const value = password.value;
                if (value === '') {
                    labelForPassword.classList.remove('animationIn');
                    labelForPassword.classList.add('animationOut');
                }
            })
        </script>
</body>
</html>