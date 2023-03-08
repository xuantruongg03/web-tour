<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour du lịch</title>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    .clip-path {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 65%, 0 100%);
    }
    </style>
</head>

<body>
    <?php include "../Components/Header/Header.php"?>
    <div>
        <div class="">
            <h1 class="font-bold text-sky-500 text-3xl text-center my-10">Tour du lịch</h1>
            <div class='flex'>
                <div class="mx-20 w-60">
                    <h2 class="font-bold text-xl w-32 uppercase">Danh mục</h2>
                    <div class="mt-4">
                        <h3 class="font-bold text-base uppercase">Khoảng Giá</h3>
                        <div class="flex flex-col">
                            <div class="flex">
                                <input type="radio" name="price1" id="price1" value="1" class="checked:accent-blue-500">
                                <label for="price1" class="ml-3 text-sm text-slate-400">Dưới 1 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="radio" name="price2" id="price2" value="2" class="checked:accent-blue-500">
                                <label for="price2" class="ml-3 text-sm text-slate-400">1 - 3 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="radio" name="price3" id="price3" value="3" class="checked:accent-blue-500">
                                <label for="price3" class="ml-3 text-sm text-slate-400">3 - 5 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="radio" name="price4" id="price4" value="4" class="checked:accent-blue-500">
                                <label for="price4" class="ml-3 text-sm text-slate-400">5 - 10 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="radio" name="price5" id="price5" value="5" class="checked:accent-blue-500">
                                <label for="price5" class="ml-3 text-sm text-slate-400">Trên 10 triệu</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold uppercase">Thời gian</h1>
                        <div class="flex">
                            <input type="checkbox" name="time1" class="checked:accent-blue-500" id="time1">
                            <label for="time1" class="ml-3 text-sm text-slate-400">8 ngày 7 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time2" class="checked:accent-blue-500" id="time2">
                            <label for="time2" class="ml-3 text-sm text-slate-400">7 ngày 6 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time3" class="checked:accent-blue-500" id="time3">
                            <label for="time3" class="ml-3 text-sm text-slate-400">6 ngày 5 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time4" class="checked:accent-blue-500" id="time4">
                            <label for="time4" class="ml-3 text-sm text-slate-400">5 ngày 4 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time5" class="checked:accent-blue-500" id="time5">
                            <label for="time5" class="ml-3 text-sm text-slate-400">4 ngày 3 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time6" class="checked:accent-blue-500" id="time6">
                            <label for="time6" class="ml-3 text-sm text-slate-400">2 ngày 1 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time7" class="checked:accent-blue-500" id="time7">
                            <label for="time7" class="ml-3 text-sm text-slate-400">Trong ngày</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold text-base uppercase">Loại tour</h1>
                        <div class="flex">
                            <input type="checkbox" name="dometic" id="dometic" class="checked:accent-blue-500">
                            <label for="dometic" class="ml-3 text-sm text-slate-400 w-32">Du lịch nước ngoài</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="foreign" id="foreign" class="checked:accent-blue-500">
                            <label for="foreign" class="ml-3 text-sm text-slate-400 w-32">Du lịch trong nước</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold text-base uppercase">Trong nước</h1>
                        <div class="flex">
                            <input type="radio" name="dometic1" id="dometic1" class="checked:accent-blue-500">
                            <label for="dometic1" class="ml-3 text-sm text-slate-400">Hạ Long</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="dometic2" id="dometic2" class="checked:accent-blue-500">
                            <label for="dometic2" class="ml-3 text-sm text-slate-400">Quảng Ninh</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="dometic3" id="dometic3" class="checked:accent-blue-500">
                            <label for="dometic3" class="ml-3 text-sm text-slate-400">Nghệ An</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="dometic4" id="dometic4" class="checked:accent-blue-500">
                            <label for="dometic4" class="ml-3 text-sm text-slate-400">Đà Nẵng</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="dometic5" id="dometic5" class="checked:accent-blue-500">
                            <label for="dometic5" class="ml-3 text-sm text-slate-400">Tam Đảo</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold text-base uppercase">Nước ngoài</h1>
                        <div class="flex">
                            <input type="checkbox" name="foreign1" id="foreign1" class="checked:accent-blue-500">
                            <label for="foreign1" class="ml-3 text-sm text-slate-400">Châu Á</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="foreign2" id="foreign2" class="checked:accent-blue-500">
                            <label for="foreign2" class="ml-3 text-sm text-slate-400">Châu Âu</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="foreign3" id="foreign3" class="checked:accent-blue-500">
                            <label for="foreign3" class="ml-3 text-sm text-slate-400">Châu Mỹ</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold text-base uppercase">Loại du lịch</h1>
                        <div class="flex">
                            <input type="checkbox" name="type1" id="type1" class="checked:accent-blue-500">
                            <label for="type1" class="ml-3 text-sm text-slate-400">Mạo hiểm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="type2" id="type2" class="checked:accent-blue-500">
                            <label for="type2" class="ml-3 text-sm text-slate-400">Du lịch biển</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="type3" id="type3" class="checked:accent-blue-500">
                            <label for="type3" class="ml-3 text-sm text-slate-400">Du lịch</label>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="font-bold text-xl uppercase block">Tour du lịch</h2>
                    <div class="flex flex-wrap mt-2 tours">
                        <!-- Hiển thị tát cả tour du lịch -->
                    <?php
                    include "../config/connectDB.php";
                    $tours = "SELECT tour_id, tour_title, tour_price, tour_discount_rate FROM tours ";
                    $tour_image = "SELECT tour_image_id, tour_id, tour_image FROM tour_images";
                    $result_tours = mysqli_query($conn, $tours);
                    $result_tour_image = mysqli_query($conn, $tour_image);
                    $tour_image = array();
                    if (mysqli_num_rows($result_tour_image) > 0) {
                        while($row = mysqli_fetch_assoc($result_tour_image)) {
                            $tour_image[$row['tour_id']] = $row['tour_image'];
                        }
                    } else {
                        echo "0 results";
                    }
                    if (mysqli_num_rows($result_tours) > 0) {
                        while($row = mysqli_fetch_assoc($result_tours)) {
                            $transport = array("train", "plane");
                            if (array_key_exists($row['tour_id'], $tour_image)) {
                                $image = $tour_image[$row['tour_id']];
                            } else {
                                $image = $transport[rand(0, 1)];
                            }
                            $title = $row['tour_title'];
                            $price = $row['tour_price'];
                            $sale = $row['tour_discount_rate'];
                            $id = $row['tour_id'];
                            include "../Components/Item/Item.php";
                        }
                    } else {
                        echo "0 results";
                    }
                    mysqli_close($conn);
                ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "../Components/Footer/Footer.php"?>
            <script type="text/JavaScript">
                const search = document.getElementById('search');
                const tours = document.getElementsByClassName('tours')[0];
                search.addEventListener('click', function() {
                    tours.innerText = '';
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', `../module/getTours.php`, true);
                    xhr.onload = function() {
                        if (this.status === 200) {
                            const data = JSON.parse(this.responseText);
                            if (data.length > 0) {
                                data.forEach(function(item) {
                                    const priceSale = item.price - (item.price * item.sale / 100).toLocaleString('vi-VN', {style : 'currency', currency : 'VND'});
                                    const formatPrice = item.price.toLocaleString('vi-VN', {style : 'currency', currency : 'VND'});
                                    console.log(formatPrice);
                                    const div = document.createElement('div');
                                    div.innerHTML = `<div class="xl:w-96 sm:w-10/12 md:w-1/3 h-96 border-2 drop-shadow my-5 mx-2"> <div class="relative group"> ${item.sale > 0 ? `<div class="absolute top-0 left-3 bg-red-600 h-14 w-12 text-white pl-2 pt-2 clip-path"> ${item.sale}% </div>` : ''} <div class="group"> <img class="h-64 w-full" src=${item.image} alt="place"> <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition duration-500 ease-in-out"> </div> <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"> <button class="hidden group-hover:block w-24 h-8 rounded-3xl bg-sky-500 p-1 text-sm text-white font-semibold animation-btn"> <a href="/tour/${item.title}?q=${item.id}">Chi tiết</a> </button> </div> </div> <div class="absolute bottom-3 right-3 flex"> <div class="bg-white p-1 mr-2"> <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_1.png?1671122588148" alt="transport"> </div> <div class="bg-white p-1 mr-2"> <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_3.png?1671122588148" alt="transport"> </div> </div> </div> <a href="#" title="${item.title}" class="xl:text-base font-semibold p-2 truncate block cursor-pointer hover:text-sky-500"> ${item.title} </a> <div class="flex border-t-2 p-1 mx-3 drop-shadow-none mt-4"> <p class="xl:text-2xl text-sky-500 font-semibold mr-3 mt-2"> ${formatPrice} VNĐ </p> ${item.sale != 0 ? `<p class="text-sm leading-8 text-gray-400 line-through mt-3"> ${priceSale} VNĐ </p>` : ''} </div>`;
                                    tours.appendChild(div);
                                })
                            } else {
                                const h1 = document.createElement('h1');
                                h1.classList.add('text-center', 'text-3xl', 'text-red-500', 'my-10', 'uppercase', 'font-bold', 'w-full');
                                h1.innerText = 'Không có tour nào phù hợp!';
                                tours.appendChild(h1);
                            }
                        }
                    }
                    const price = document.getElementById('price').value;
                    const type = document.getElementById('type').value;
                    const place = document.getElementById('place').value;
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.send(`price=${price}&type=${type}&place=${place}`);
                })
    </script>
</body>

</html>