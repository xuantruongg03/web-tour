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
        <form action="" class="flex flex-col py-10 px-5 border">
            <h1 class="uppercase font-bold text-2xl text-center my-5">Đăng ký tài khoản</h1>
            <input type="text" name="name" id="name" placeholder="Họ và tên"
                class="border p-2 my-2 focus:outline-none text-sm w-80">
            <input type="number" name="phone" id="phone" placeholder="Số điện thoại"
                class="border p-2 my-2 focus:outline-none text-sm w-80">
            <input type="text" name="username" id="username" placeholder="Tên tài khoản"
                class="border p-2 my-2 focus:outline-none text-sm w-80">
            <input type="password" name="password" id="password" placeholder="Mật khẩu"
                class="border p-2 my-2 focus:outline-none text-sm w-80">
            <button type="submit" class="bg-sky-500 text-white font-bold uppercase p-2 rounded mt-2" id="btnSubmit">Đăng
                ký</button>
            <h2 class="mt-2 text-sm text-gray-500 text-center">Đã có tài khoản đăng nhập tại đây <a
                    href="/web-tour/src/Pages/Login.php" class="text-sky-500">tại đây</a></h2>
        </form>
    </div>
    <?php include "../Components/Footer/Footer.php"?>
    <script>
    const btnSubmit = document.getElementById('btnSubmit');
    btnSubmit.addEventListener('click', (e) => {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const first_name = name.split(' ').slice(0, -1).join(' ');
        const last_name = name.split(' ').slice(-1).join(' ');
        const phone = document.getElementById('phone').value;
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../module/register.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function(params) {
            if (this.status === 200) {
                console.log(this.responseText);
                if (this.responseText === 'Successfully') {
                    window.location.href = '/web-tour/src/Pages/Login.php';
                }
            }
        }
        xhr.send(
            `username=${username}&password=${password}&first_name=${first_name}&last_name=${last_name}&phone=${phone}`
            );
    })
    </script>
</body>

</html>