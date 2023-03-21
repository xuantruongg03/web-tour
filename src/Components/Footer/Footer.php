<style>
.footer__container {
    background-image: url("https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/bg_brand.png?1666237949898");
    background-size: cover;
    padding: 50px 0;
    position: relative;
    min-height: 270px;
    background-repeat: no-repeat;
}

.footer__container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

@media screen and (max-width: 480px) {
    .footer__container_box {
        margin: 0 20px;
    }

    .footer__container_register {
        margin-top: 15px;
    }

    .footer__container_box_input {
        padding: 0;
        font-size: 12px;
        width: 208px;
    }

    .footer__container_box_button {
        font-size: 12px;
    }

    .footer__box_info {
        flex-direction: column;
    }

    .footer__box_info_item {
        width: 100%;
        margin: 5px;
    }

    .footer__box_info_item_box {
        flex-direction: row;
    }
}
</style>

<body>
    <footer>
        <div class="footer__container w-full">
            <div class="position: relative z-1 sm:mx-28 footer__container_box">
                <h1 class="text-3xl text-white font-bold text-center mb-2">Đăng ký nhận tin</h1>
                <h2 class="lg:text-base text-white text-center sm:text-sm ">Tổng hợp những chương trình tour theo tháng,
                    du lịch vòng
                    quanh thế giới với mức chi phí cực rẻ. Để
                    nhận
                    ngay những thông tin chương trình tour hot. Quý khách hàng vui lòng nhập thông tin email tại
                    đây !
                    Thanks</h2>
                <div class="flex mt-10 sm:mt-5 footer__container_register">
                    <div class="flex content-center mx-auto">
                        <input class="p-2 md:w-80 footer__container_box_input focus:outline-none" type="email" placeholder="Email nhận tin"
                            aria-placeholder="Email nhận tin" name="email" id="email_sale"/>
                        <button class="p-2 bg-sky-500 text-white footer__container_box_button" id="btnSubmit">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-80 xl:mx-36 md:mx-10 lg:mx-20">
            <div class="flex justify-between mt-12 footer__box_info">
                <div class="w-64 footer__box_info_item">
                    <h1 class="text-sky-500 font-bold uppercase footer__box_info_item_title">Liên hệ</h1>
                    <p class="text-sm mt-2">
                        <span class="font-bold">Địa chỉ:</span>
                        Ladeco Building, 266 Doi Can Street, Ba Dinh District, Ha Noi
                    </p>
                    <p class="text-sm mt-2">
                        <span class="font-bold">Điện thoại:</span>
                        024 7300 8888
                    </p>
                    <p class="text-sm mt-2">
                        <span class="font-bold">Email:</span>
                        text@gmail.com
                    </p>
                    <p class="text-sm mt-2">
                        <span class="font-bold">Giờ làm việc:</span>
                        8:00 - 17:00 (T2 - T7)
                    </p>
                </div>
                <div class="w-56 footer__box_info_item">
                    <h1 class="text-sky-500 font-bold uppercase">Kết nối với chúng tôi</h1>
                    <a href="#"><i class="fa-brands fa-facebook text-blue-900 p-2 text-2xl "></i></a>
                    <a href="#"><i class="fab fa-instagram text-rose-500 p-2 text-2xl"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter text-blue-500 p-2 text-2xl"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube text-red-700 p-2 text-2xl"></i></a>
                    <h1 class="text-sky-500 font-bold uppercase">Chấp nhận thanh toán</h1>
                    <div class="flex-wrap">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_1.png?1671122588148"
                            alt="visa" class="inline mt-1">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_2.png?1671122588148"
                            alt="visa" class="inline mt-1">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_3.png?1671122588148"
                            alt="visa" class="inline mt-1">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_4.png?1671122588148"
                            alt="visa" class="inline mt-1">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_5.png?1671122588148"
                            alt="visa" class="inline mt-1">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_6.png?1671122588148"
                            alt="visa" class="inline mt-1">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_7.png?1671122588148"
                            alt="visa" class="inline mt-1">
                        <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/img_payment_8.png?1671122588148"
                            alt="visa" class="inline mt-1">
                    </div>
                </div>
                <div class="footer__box_info_item">
                    <h1 class="text-sky-500 font-bold uppercase">Trong nước</h1>
                    <div class="flex flex-col footer__box_info_item_box">
                        <a href="#">
                            <p class="text-sm mt-1">Hạ long</p>
                        </a>
                        <a href="#">
                            <p class="text-sm mt-1">Ninh Bình</p>
                        </a>
                        <a href="#">
                            <p class="text-sm mt-1">Nghệ An</p>
                        </a>
                        <a href="#">
                            <p class="text-sm mt-1">Đà Nẵng</p>
                        </a>
                        <a href="#">
                            <p class="text-sm mt-1">Tam Đảo</p>
                        </a>
                        <a href="#">
                            <p class="text-sm mt-1">Quảng Ninh</p>
                        </a>
                        <a href="#">
                            <p class="text-sm mt-1">Thanh Hóa</p>
                        </a>
                    </div>
                </div>
                <div class="footer__box_info_item">
                    <h1 class="text-sky-500 font-bold uppercase">Ngoài nước</h1>
                    <div class="flex flex-col footer__box_info_item_box">
                        <a href="#" class="text-sm mt-1 mx-1">
                            Tây Ban Nha
                        </a>
                        <a href="#" class="text-sm mt-1 mx-1">
                            Hàn Quốc
                        </a>
                        <a href="#" class="text-sm mt-1 mx-1">
                            Trung Quốc
                        </a>
                        <a href="#" class="text-sm mt-1 mx-1">
                            Triều Tiên
                        </a>
                        <a href="#" class="text-sm mt-1 mx-1">
                            Thái Lan
                        </a>
                        <a href="#" class="text-sm mt-1 mx-1">
                            Pháp
                        </a>
                    </div>
                </div>
                <div class="footer__box_info_item">
                    <h1 class="text-sky-500 font-bold uppercase">Thông tin</h1>
                    <div class="flex flex-col footer__box_info_item_box">
                        <a href="#" class="text-sm mt-1">
                            Tin tức
                        </a>
                        <a href="#" class="text-sm mt-1">
                            Tạp chí du lịch
                        </a>
                        <a href="#" class="text-sm mt-1">
                            Cẩm nang du lịch
                        </a>
                        <a href="#" class="text-sm mt-1">
                            Kinh nghiệm du lịch
                        </a>
                        <a href="#" class="text-sm mt-1">
                            Liên hệ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const email = document.getElementById('email_sale');
        const btnSubmit = document.getElementById('btnSubmit');
        btnSubmit.addEventListener('click', function () {
            if (email.value == '') {
                alert('Vui lòng nhập email');
            } else {
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '/web-tour/src/controllers/RegistSale.php', true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onload = function () {
                    if (this.responseText == 'Success') {
                        alert('Đăng ký thành công');
                        window.location.reload();
                        window.scrollTo(0, 0);
                    } else if (this.responseText == 'Email been used') {
                        alert(`Email: ${email.value} đã tồn tại! Vui lòng nhập email khác.`);
                    } else {
                        alert('Có lỗi xảy ra! Vui lòng thử lại sau');
                    }
                }
                xhr.send(`email=${email.value}`)
            }
        })
    </script>
</body>