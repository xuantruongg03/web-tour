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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="flex flex-col py-10 px-5 border" method="post">
            <h1 class="uppercase font-bold text-2xl text-center my-5">Đăng ký tài khoản</h1>
            <div class="relative">
                <input type="text" name="name" id="name" value="<?php echo isset($name) ? $name : '' ?>"
                    class="border p-2 my-2 focus:outline-none text-sm w-80 ">
                    <label for="username" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400 "
                    id="labelName">Họ và tên</label>
            </div>

            <div class="relative">
                <input type="text" name="phone" id="phone" value="<?php echo isset($phone) ? $phone : '' ?>"
                class="border p-2 my-2 focus:outline-none text-sm w-80" name = "phone" >
                <label for="phone" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400 "
                    id="labelPhone">Số điện thoại</label>
            </div>
            <div class="relative">
                <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : '' ?>"
                    class="border p-2 my-2 focus:outline-none text-sm w-80" name = "username" >
                <label for="username" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400 "
                    id="labelUsername">Tên tài khoản</label>
            </div>
            <div class="relative">
            <input type="password" name="password" id="password" value="<?php echo isset($password) ? $password : '' ?>"
                    class="border p-2 my-2 focus:outline-none text-sm w-80" name = "password">
                <label for="password" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400 "
                    id="labelPassword">Mật khẩu</label>
            </div>
                

    
            
            <button type="submit" class="bg-sky-500 text-white font-bold uppercase p-2 rounded mt-2 " id="btnSubmit">Đăng
                ký</button>
            <h2 class="text-sm text-gray-500 text-center">Đã có tài khoản đăng nhập tại đây <a
                    href="/web-tour/src/Pages/Login.php" class="text-sky-500">tại đây</a></h2>
        </form>
    </div>
    <?php include "../Components/Footer/Footer.php"?>
    <script>
        const name = document.getElementById('name');
        const phone = document.getElementById('phone');
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const labelForName = document.getElementById('labelName');
        const labelForPhone = document.getElementById('labelPhone');
        const labelForUsername = document.getElementById('labelUsername');
        const labelForPassword = document.getElementById('labelPassword');
        if(name.value !==''){
            labelForName.classList.add('animationIn');
        }
        if(phone.value!==''){
            labelForPhone.classList.add('animationIn');
        }
        if(username.value!==''){
            labelForUsername.classList.add('animationIn');
        }
        if(password.value!==''){
            labelForPassword.classList.add('animationIn');
        }
        //animation for input name
        name.addEventListener('focus', () =>{
            labelForName.classList.remove('animationOut');
            labelForName.classList.add('animationIn');
        });
        name.addEventListener('focusout', () =>{
            labelForName.classList.remove('animationIn');
            labelForName.classList.add('animationOut');
        });
        //animation for input phone
        phone.addEventListener('focus', () =>{
            labelForPhone.classList.remove('animationOut');
            labelForPhone.classList.add('animationIn');
        });
        phone.addEventListener('focusout', () =>{
            labelForPhone.classList.remove('animationIn');
            labelForPhone.classList.add('animationOut');
        });
        //animation for input username
        username.addEventListener('focus', () =>{
            labelForUsername.classList.remove('animationOut');
            labelForUsername.classList.add('animationIn');
        });
        username.addEventListener('focusout', () =>{
            labelForUsername.classList.remove('animationIn');
            labelForUsername.classList.add('animationOut');
        });
        //animation for input password
        password.addEventListener('focus', () =>{
            labelForPassword.classList.remove('animationOut');
            labelForPassword.classList.add('animationIn');
        });
        password.addEventListener('focusout', () =>{
            labelForPassword.classList.remove('animationIn');
            labelForPassword.classList.add('animationOut');
        });
            


           
    </script>
</body>

</html>