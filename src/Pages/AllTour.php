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
    <?php include "../Components/Zalo.php" ?>
    <div>
        <div class="my-5">
            <h1 class="font-bold text-sky-500 text-3xl text-center my-10">Tour du lịch</h1>
            <?php if(isset($_GET['search']) && $_GET['search'] == 'quy nhơn') {
                include "../Components/Intro.php";
            } ?>
            <div class='flex'>
                <?php include "../Components/Filter.php" ?>
                <div>
                    <h2 class="font-bold text-xl uppercase block text-sky-500">Tour du lịch <?php echo isset($_GET['search']) ? $_GET['search'] : null ?></h2>
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
                                echo "<h1 class='text-center text-3xl text-red-500 my-10 uppercase font-bold w-full'>Không có tour nảo phù hợp!</h1>";
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
                                echo "<h1 class='text-center text-3xl text-red-500 my-10 uppercase font-bold w-full'>Không có tour nảo phù hợp!</h1>";
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
                                echo "<h1 class='text-center text-3xl text-red-500 my-10 uppercase font-bold w-full'>Không có tour nảo phù hợp!</h1>";
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
                                // echo (string)$image;
                            } else {
                                echo "<h1 class='text-center text-3xl text-red-500 my-10 uppercase font-bold w-full'>Không có tour nảo phù hợp!</h1>";
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