<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custome styles -->
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .clip-path {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 65%, 0 100%);
    }

    @keyframes animation {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .animation-btn {
        animation: animation 1s infinite;
    }

    .animation_title {
        transform: translate(-50%, -50%);
        animation: typing 3s steps(52),
            blink step-end 0.5s infinite alternate;
    }

    @keyframes typing {
        from {
            width: 0;
        }
    }

    @keyframes blink {
        50% {
            border-color: transparent;
        }
    }

    @font-face {
        font-family: 'lora';
        src: url("./Font/Lora-SemiBold.ttf");
    }

    .font-lora {
        font-family: 'lora';
    }
    </style>
    <title>Home</title>
</head>

<body>
    <?php include '../Components/Header/Header.php' ?>
    <div>
        <div class="relative">
            <div class="absolute inset-0 bg-black opacity-30 relative z-negative"></div>
            <h1 class="absolute top-1/2 left-1/2 text-white text-center xl:text-6xl font-bold block w-full overflow-hidden whitespace-nowrap font-lora animation_title
                        md:text-5xl sm:text-4xl">
                Chào mừng bạn đến với Epic Escapes! </h1>
            <img src="https://cdn.vietnambiz.vn/171464876016439296/2020/10/19/quynhonnhintucangotua-nguyen-dung-1603075894101769523040.jpg"
                alt="background" class="w-full h-96 relative z-negative">
        </div>
    </div>
    <div class="mt-12 min-h-screen">
        <div class="mb-12">
            <h1 class="font-bold text-sky-500 text-center text-3xl">Tuor trong nước</h1>
            <p class="text-center">Sale off tất cả các tour trong tháng này. Nhanh tay đặt tour để cho gia đình mình
                cùng
                quây quần bên nhau.</p>
        </div>
        <div class="flex justify-around flex-wrap mx-4">
            <?php
                $transport = array("train", "plane");
                $image = "../Image/nha-tho-lang-song.jpg"; 
                $title = "Tour Land Tour Quy Nhơn 5 ngày 4 đêm";
                $price = 5525000;
                $sale = 1;
                include "../Components/Item/Item.php"
             ?>
            <?php 
                $transport = array("train");
                $image = '../Image/du-lich-tet-am-lich-quy-nhon-gia-tot.jpg';
                $title = "Du lịch Tết Âm lịch Quy Nhơn - Bình Định 3N2Đ từ Sài Gòn giá tốt 2022";
                $price = 4000000;
                $sale = 0;
                include "../Components/Item/Item.php" 
            ?>
            <?php
                $transport = array("plane", "ship");
                $image = "../Image/du-lich-binh-dinh-he-2019.jpg";
                $title = "Du lịch Phú Yên - Quy Nhơn - Kỳ Co - KDL Hầm Hồ từ Sài Gòn giá tốt 2021";
                $price = 4500000;
                $sale = 2; 
                include "../Components/Item/Item.php" 
            ?>
            <?php 
                $transport = array("plane");
                $image = "../Image/kinh-nghiem-tua-du-lich-tet-quy-nhon-gia-re.jpg";
                $title = "Du lịch Tết Nguyên Đán Quy Nhơn - Bình Định 3 ngày từ Sài Gòn 2021";
                $price = 5500000;
                $sale = 10; 
                include "../Components/Item/Item.php" 
            ?>
            <?php
                $transport = array("plane", "ship");
                $image = "../Image/tour-du-lich-binh-dinh-mua-thu.jpg";
                $title = "Du lịch Quy Nhơn – Bãi Dứa – Eo Gió mùa Thu khởi hành từ Sài Gòn";
                $price = 2700000;
                $sale = 0;  
                include "../Components/Item/Item.php" 
            ?>
            <?php
                $transport = array("ship");
                $image = "../Image/quy-nhon.jpg";
                $title = "Du lịch Miền Trung - Quy Nhơn - Phú Yên dịp Tết Dương lịch từ Sài Gòn giá tốt";
                $price = 4700000;
                $sale = 0;  
                include "../Components/Item/Item.php" 
            ?>
        </div>
        <div>
            <?php include '../Components/Footer/Footer.php' ?>
            <script>
            tailwind.config = {
                theme: {
                    extend: {
                        zIndex: {
                            'negative': '-1',
                        },
                        colors: {
                            'sky-1000': '#154054'
                        }
                    }
                }
            }
            </script>
</body>

</html>