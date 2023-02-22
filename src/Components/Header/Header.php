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
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .body {
        background-color: #f2f2f2;
    }

    .header__header {
        background-color: #154054;
        height: 110px;
    }

    /* Search, Logo */
    .header__box {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 66%;
        border-bottom: 1px solid #9CCFF4;
    }

    .header__logo {
        margin-left: 20px;
    }

    .header__logo img {
        width: 165px;
        height: 70px;
    }

    .header__search {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 40%;
        /* border-bottom: 1px solid #fff; */
    }

    .header__input_search {
        width: 515px;
        padding: 5.5px 5.5px 5.5px 25px;
    }

    .header__icon_search {
        color: #fff;
        font-size: 16px;
        padding: 10px;
        background-color: #32AAD6;
    }

    /* Navbar */
    .header__nav {
        /* display: flex; */
        /* justify-content: space-around; */
        /* align-items: center; */
        padding: 0 !important;
        /* height: 35%; */
        height: 19px !important;
        margin-top: 3px;
        ;
        margin: 0 13%;
    }

    .header__nav_item {
        font-size: 14px;
    }

    .header__nav_item:hover {
        background-color: #32AAD6;
    }

    .header__container {
        margin: 0 20%;
    }

    .header__ul {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 40%;
        list-style-type: none;
    }

    @media screen and (max-width: 800px) {
        .header__input_search {
            width: 300px;
        }
    }

    @media screen and (max-width: 530px) {
        .header__input_search {
            width: 250px;
        }
    }

    @media screen and (max-width: 480px) {
        .header__header {
            height: 160px;
        }

        .header__box {
            flex-direction: column;
            height: 70%;
        }

        .header__input_search {
            width: 300px;
        }

        .header__nav {
            margin: 0 5%;
        }
    }
    </style>
</head>

<body>

    <body>
        <header class="header__header">
            <div class="header__box">
                <div class="header__logo">
                    <img class="header__img" src="src/Image/logo.png" alt="logo">
                </div>
                <div class="header__search">
                    <input class="header__input_search" type="text" placeholder="Từ khóa tìm kiếm">
                    <i class="fas fa-search header__icon_search"></i>
                </div>
            </div>
            <nav class="sm:h-8">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex sm:h-9 items-center justify-between">
                        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                            <!-- Mobile menu button-->
                            <button type="button"
                                class="inline-flex items-center justify-center rounded-md p-1 text-white hover:bg-sky-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                aria-controls="mobile-menu" aria-expanded="false" id="btn-nav">
                                <span class="sr-only">Open main menu</span>

                                <svg class="block h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                                <svg class="hidden h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex sm:items-stretch sm:justify-start h-9">
                            <div class="hidden m-0 sm:ml-6 sm:block">
                                <div class="flex h-full">

                                    <a href="/"
                                        class="hover:bg-sky-500 hover:text-white text-white py-2 px-2 text-sm font-medium w-24 text-center"
                                        aria-current="page">Trang chủ</a>

                                    <a href="/about"
                                        class="text-white hover:bg-sky-500 hover:text-white py-2 px-2 text-sm font-medium w-24 text-center">Giới
                                        thiệu</a>

                                    <a href="/tour"
                                        class="text-white hover:bg-sky-500 hover:text-white py-2 px-2 text-sm font-medium w-24 text-center">Tour
                                        du lịch</a>

                                    <a href="/faq"
                                        class="text-white hover:bg-sky-500 hover:text-white py-2 px-2 text-sm font-medium w-24 text-center">FAQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sm:hidden absolute top-30 left-0 z-10 w-full bg-sky-1000 text-white" id="mobile-menu">
                    <div class="space-y-1 px-2 pt-2 pb-3 hidden" id="nav-mobile">
                        <a href="#"
                            class="bg-sky-500 text-white block px-3 py-2 rounded-md text-base font-medium active:bg-sky-500"
                            aria-current="page">Trang chủ</a>

                        <a href="#"
                            class="text-white hover:bg-sky-1000 hover:text-white hover:bg-sky-500 block px-3 py-2 rounded-md text-base font-medium">Giới
                            thiệu</a>

                        <a href="#"
                            class="text-white hover:bg-sky-1000 hover:text-white hover:bg-sky-500 block px-3 py-2 rounded-md text-base font-medium">Tour
                            du lịch</a>

                        <a href="#"
                            class="text-white hover:bg-sky-1000 hover:text-white hover:bg-sky-500 block px-3 py-2 rounded-md text-base font-medium">FAQ</a>
                    </div>
                </div>
            </nav>
        </header>
        <script>
        const btn = document.getElementById("btn-nav");
        const nav = document.getElementById("nav-mobile");
        let showMenu = false;
        btn.addEventListener('click', toggleMenu);

        function toggleMenu() {
            if (!showMenu) {
                nav.classList.remove("hidden");
                showMenu = true;
            } else {
                nav.classList.add("hidden");
                showMenu = false;
            }
        }
        </script>
        <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sky-1000': '#154054'
                    }
                }
            }
        }
        </script>
    </body>
</body>

</html>