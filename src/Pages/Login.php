<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Đăng nhập</title>
</head>
<body>
    <?php include "../Components/Header/Header.php"?>
    <div class="flex justify-center h-full my-5">
        <form action="" class="flex flex-col py-10 px-5 border">
            <h1 class="uppercase font-bold text-2xl text-center my-5">Đăng nhập Tài Khoản</h1>
            <input type="text" name="username" id="username" placeholder="Tên tài khoản" class="border p-2 my-2 focus:outline-none text-sm w-80">
            <input type="password" name="password" id="password" placeholder="Mật khẩu" class="border p-2 my-2 focus:outline-none text-sm w-80">
            <a href="#" class="text-sky-500 font-semibold mt-3 mb-2 underline text-sm">Quên mật khẩu?</a>
            <button type="submit" class="bg-sky-500 text-white font-bold uppercase p-2 rounded">Đăng nhập</button>
            <h2 class="mt-2 text-sm text-gray-500 text-center">Chưa có tài khoản đăng ký <a href="/web-tour/src/Pages/Register.php" class="text-sky-500">tại đây</a></h2>
        </form>
    </div>
    <?php include "../Components/Footer/Footer.php"?>
</body>
</html>