<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour du lịch</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .clip-path {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 65%, 0 100%);
    }
    </style>
</head>

<body>
    <?php include "../Components/Header/Header.php"?>
    <div class="mx-24">
        <h1 class="font-bold text-sky-500 text-3xl text-center my-10">Tour du lịch</h1>
        <h2 class="font-bold text-xl">Bộ lọc</h2>
        <div class="flex justify-between mt-3 mx-14">
            <select name="price" id="price" class="border border-solid border-gray-500 p-2 w-80 focus:outline-none ">
                <option value="tour_price > 100000000" selected disabled>Khoảng giá</option>
                <option value="tour_price >= 500000 and tour_price <= 1000000">Từ 500.000đ đến 1.000.000đ</option>
                <option value="tour_price >= 1000000 and tour_price <= 2000000">Từ 1.000.000đ đến 2.000.000đ</option>
                <option value="tour_price >= 2000000 and tour_price <= 5000000">Từ 2.000.000đ đến 5.000.000đ</option>
                <option value="tour_price >= 5000000 and tour_price <= 10000000">Từ 5.000.000đ đến 10.000.000đ</option>
                <option value="tour_price >= 10000000">Trên 10.000.000đ</option>
            </select>
            <select name="type" id="type" class="border border-solid border-gray-500 p-2 w-80 focus:outline-none ">
                <option value="Tour" selected disabled>Loại tour</option>
                <option value="Tour nội địa">Trong nước</option>
                <option value="Tour ngoại quốc">Nước ngoài</option>
            </select>
            <select name="place" id="place" class="border border-solid border-gray-500 p-2 w-80 focus:outline-none ">
                <option value="Place" selected disabled>Địa điểm</option>
                <option value="Quy Nhơn">Quy Nhơn</option>
                <option value="Hàn Quốc">Hàn Quốc</option>
                <option value="Đài Loan">Đài Loan</option>
                <option value="Ninh Bình">Ninh Bình</option>
            </select>
            <button class="p-2 bg-sky-500 text-white w-52 border-none" id="search">Tìm kiếm</button>
        </div>
    </div>
    <div class="w-5/6 flex flex-wrap mx-40 mt-2 tours">
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
                        const priceSale = Number(item.price) - (Number(item.price) * Number(item.sale) / 100);
                        const div = document.createElement('div');
                        div.innerHTML = `<div class="xl:w-96 sm:w-10/12 md:w-1/3 h-96 border-2 drop-shadow my-5 mx-2"> <div class="relative group"> ${item.sale > 0 ? `<div class="absolute top-0 left-3 bg-red-600 h-14 w-12 text-white pl-2 pt-2 clip-path"> -${item.sale}% </div>` : ''} <div class="group"> <img class="h-64 w-full" src=${item.image} alt="place"> <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition duration-500 ease-in-out"> </div> <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"> <button class="hidden group-hover:block w-24 h-8 rounded-3xl bg-sky-500 p-1 text-sm text-white font-semibold animation-btn"> <a href="/tour/${item.title}?q=${item.id}">Chi tiết</a> </button> </div> </div> <div class="absolute bottom-3 right-3 flex"> <div class="bg-white p-1 mr-2"> <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_1.png?1671122588148" alt="transport"> </div> <div class="bg-white p-1 mr-2"> <img src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_3.png?1671122588148" alt="transport"> </div> </div> </div> <a href="#" title="${item.title}" class="xl:text-base font-semibold p-2 truncate block cursor-pointer hover:text-sky-500"> ${item.title} </a> <div class="flex border-t-2 p-1 mx-3 drop-shadow-none mt-4"> <p class="xl:text-2xl text-sky-500 font-semibold mr-3 mt-2"> ${item.price} VNĐ </p> ${item.sale != 0 ? `<p class="text-sm leading-8 text-gray-400 line-through mt-3"> ${priceSale} VNĐ </p>` : ''} </div>`;
                        tours.appendChild(div);
            })
            } else {
                const h1 = document.createElement('h1');
                h1.classList.add('text-center', 'text-3xl', 'text-red-500', 'my-10', 'uppercase', 'font-bold', 'w-full');
                h1.innerText = 'Không có tour nào phù hợp!';
                tours.appendChild(h1);
            }
            }}
        const price = document.getElementById('price').value;
        const type = document.getElementById('type').value;
        const place = document.getElementById('place').value;
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(`price=${price}&type=${type}&place=${place}`);
        
    })
    </script>
</body>

</html>