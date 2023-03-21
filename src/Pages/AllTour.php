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
    </style>
</head>

<body>
    <?php include "../Components/Header/Header.php" ?>
    <div>
        <div class="my-5">
            <h1 class="font-bold text-sky-500 text-3xl text-center my-10">Tour du lịch</h1>
            <div class='flex'>
                <!-- style="margin-left: 3rem !important; width: 74rem !important" -->
                <div class="mx-16 w-50">
                    <h2 class="font-bold text-xl w-32 uppercase">Danh mục</h2>
                    <div class="mt-4">
                        <h3 class="font-bold text-base uppercase">Khoảng Giá</h3>
                        <div class="flex flex-col">
                            <div class="flex">
                                <input type="checkbox" name="price" id="price1" value="0" class="checked:accent-blue-500">
                                <label for="price1" class="ml-3 text-sm text-slate-400">Dưới 1 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="checkbox" name="price" id="price2" value="1" class="checked:accent-blue-500">
                                <label for="price2" class="ml-3 text-sm text-slate-400">1 - 3 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="checkbox" name="price" id="price3" value="2" class="checked:accent-blue-500">
                                <label for="price3" class="ml-3 text-sm text-slate-400">3 - 5 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="checkbox" name="price" id="price4" value="3" class="checked:accent-blue-500">
                                <label for="price4" class="ml-3 text-sm text-slate-400">5 - 10 triệu</label>
                            </div>
                            <div class="flex">
                                <input type="checkbox" name="price" id="price5" value="4" class="checked:accent-blue-500">
                                <label for="price5" class="ml-3 text-sm text-slate-400">Trên 10 triệu</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold uppercase">Thời gian</h1>
                        <div class="flex">
                            <input type="checkbox" name="time" value="0" class="checked:accent-blue-500" id="time1">
                            <label for="time1" class="ml-3 text-sm text-slate-400">8 ngày 7 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time" value="1" class="checked:accent-blue-500" id="time2">
                            <label for="time2" class="ml-3 text-sm text-slate-400">7 ngày 6 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time" value="2" class="checked:accent-blue-500" id="time3">
                            <label for="time3" class="ml-3 text-sm text-slate-400">6 ngày 5 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time" value="3" class="checked:accent-blue-500" id="time4">
                            <label for="time4" class="ml-3 text-sm text-slate-400">5 ngày 4 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time" value="4" class="checked:accent-blue-500" id="time5">
                            <label for="time5" class="ml-3 text-sm text-slate-400">3 ngày 2 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time" value="5" class="checked:accent-blue-500" id="time6">
                            <label for="time6" class="ml-3 text-sm text-slate-400">2 ngày 1 đêm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="time" value="6" class="checked:accent-blue-500" id="time7">
                            <label for="time7" class="ml-3 text-sm text-slate-400">Trong ngày</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold text-base uppercase">Vùng miền</h1>
                        <div class="flex">
                            <input type="checkbox" name="region" id="region1" value="0" class="checked:accent-blue-500">
                            <label for="region1" class="ml-3 text-sm text-slate-400">Miền Bắc</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="region" id="region2" value="1" class="checked:accent-blue-500">
                            <label for="region2" class="ml-3 text-sm text-slate-400">Miền Trung</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="region" id="region3" value="2" class="checked:accent-blue-500">
                            <label for="region3" class="ml-3 text-sm text-slate-400">Miền Nam</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold text-base uppercase">Địa điểm</h1>
                        <div class="flex">
                            <input type="checkbox" name="place" id="place1" value="0" class="checked:accent-blue-500">
                            <label for="place1" class="ml-3 text-sm text-slate-400">Ninh Bình</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="place" id="place2" value="1" class="checked:accent-blue-500">
                            <label for="place2" class="ml-3 text-sm text-slate-400">Đà Nẵng</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="place" id="place3" value="2" class="checked:accent-blue-500">
                            <label for="place3" class="ml-3 text-sm text-slate-400">Quy Nhơn</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="place" id="place4" value="3" class="checked:accent-blue-500">
                            <label for="place4" class="ml-3 text-sm text-slate-400">Nha Trang</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="place" id="place5" value="4" class="checked:accent-blue-500">
                            <label for="place5" class="ml-3 text-sm text-slate-400">Vũng Tàu</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bold text-base uppercase">Loại du lịch</h1>
                        <div class="flex">
                            <input type="checkbox" name="type" id="type1" value="0" class="checked:accent-blue-500">
                            <label for="type1" class="ml-3 text-sm text-slate-400">Mạo hiểm</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="type" id="type2" value="1" class="checked:accent-blue-500">
                            <label for="type2" class="ml-3 text-sm text-slate-400">Du lịch biển</label>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="type" id="type3" value="2" class="checked:accent-blue-500">
                            <label for="type3" class="ml-3 text-sm text-slate-400">Du lịch thông thường</label>
                        </div>
                    </div>
                </div>
                <!-- <form action="" class="mx-16 w-56">
                </form> -->
                <div>
                    <h2 class="font-bold text-xl uppercase block">Tour du lịch</h2>
                    <div class="flex flex-wrap mt-2 tours" id="filter">
                        <?php
                        include "../config/connectDB.php";
                        if (isset($_GET['search'])) {
                            $search = $_GET['search'];
                            $tours_search = "SELECT tour_id, tour_title, tour_price, tour_discount_rate FROM tours WHERE tour_title LIKE '%$search%' OR tour_reviews LIKE '%$search%'  OR tour_times LIKE '%$search%' OR tour_type LIKE '%$search%' OR tour_place LIKE '%$search%'";
                            $tours_image_search = "SELECT tour_image_id, tour_id, tour_image FROM tour_images";
                            $result_tours_search = mysqli_query($conn, $tours_search);
                            $result_tours_image_search = mysqli_query($conn, $tours_image_search);
                            $tours_image_search = array();
                            if (mysqli_num_rows($result_tours_image_search) > 0) {
                                while ($row = mysqli_fetch_assoc($result_tours_image_search)) {
                                    $tours_image_search[$row['tour_id']] = $row['tour_image'];
                                }
                            } else {
                                echo "0 results";
                            }
                            
                            if (mysqli_num_rows($result_tours_search) > 0) {
                                while ($row = mysqli_fetch_assoc($result_tours_search)) {
                                    $transport = array("train", "plane");
                                    if (array_key_exists($row['tour_id'], $tours_image_search)) {
                                        $image = $tours_image_search[$row['tour_id']];
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
                        } else {
                            $tours = "SELECT tour_id, tour_title, tour_price, tour_discount_rate FROM tours ";
                            $tour_image = "SELECT tour_image_id, tour_id, tour_image FROM tour_images";
                            $result_tours = mysqli_query($conn, $tours);
                            $result_tour_image = mysqli_query($conn, $tour_image);
                            $tour_image = array();
                            if (mysqli_num_rows($result_tour_image) > 0) {
                                while ($row = mysqli_fetch_assoc($result_tour_image)) {
                                    $tour_image[$row['tour_id']] = $row['tour_image'];
                                }
                            } else {
                                echo "0 results";
                            }
                            if (mysqli_num_rows($result_tours) > 0) {
                                while ($row = mysqli_fetch_assoc($result_tours)) {
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
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../Components/Footer/Footer.php" ?>
        <script src="../js/filter.js"></script>
</body>

</html>