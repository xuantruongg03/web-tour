<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Đăng ký</title>
</head>
<body>
    <?php include "../Components/Header/Header.php"?>
    <div class="flex justify-center h-full my-5">
        <form action="" class="flex flex-col py-10 px-5 border">
            <h1 class="uppercase font-bold text-2xl text-center my-5">Đăng ký tài khoản</h1>
            <input type="text" name="name" id="name" placeholder="Họ và tên" class="border p-2 my-2 focus:outline-none text-sm w-80">
            <input type="text" name="phone" id="phone" placeholder="Số điện thoại" class="border p-2 my-2 focus:outline-none text-sm w-80">
            <input type="text" name="username" id="username" placeholder="Tên tài khoản" class="border p-2 my-2 focus:outline-none text-sm w-80">
            <input type="password" name="password" id="password" placeholder="Mật khẩu" class="border p-2 my-2 focus:outline-none text-sm w-80">
            <button type="submit" class="bg-sky-500 text-white font-bold uppercase p-2 rounded">Đăng ký</button>
            <h2 class="mt-2 text-sm text-gray-500 text-center">Đã có tài khoản đăng nhập tại đây <a href="/web-tour/src/Pages/Login.php" class="text-sky-500">tại đây</a></h2>
        </form>
    </div>
    <?php include "../Components/Footer/Footer.php"?>
</body>
</html>