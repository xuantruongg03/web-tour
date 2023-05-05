<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['username'])) {
    require '../config/connectDB.php';
} else {
    header('Location: ./Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="./Assest//css/cart.css">
    <link rel="stylesheet" href="./Assest/css/base.css">
    <link rel="stylesheet" href="./Assest/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        .btn-list li a {

            background-color: #154054;
            border-radius: 5px;
            color: #32aad6;
            display: inline-block;
            text-decoration: none;
            transition: 0.3s
        }   


        .btn-list li a:hover {
            background-color: #00aeef;
        }
        .cart_title{
            text-align: center;
            color: #0EA5E9;
            font-size: 1.875rem;
            margin:40px 0px;
        }
        .cart{
            margin:0px 170px;
        }

    </style>
</head>

<body>
    <?php include "../Components/Header/Header.php" ?>
    <div class="cart">
        <h1 class="cart_title">Giỏ hàng</h1>

        <table class="table" style=" width: 1150px;border: 1px solid #171617; border-radius: 4px;">
            <thead>
                <tr class="" style="background-color: #154054;color:aliceblue ; width: 1150px; height: 50px;  border-radius: 4px;">
                    <th  style = "text-align:center;">Xóa</th>
                    <th style = "text-align:center;">Ảnh tour</th>
                    <th style = "text-align:center;">Tên Tour</th>

                    <th style = "text-align:center;">Giá</th>
                    <th style = "text-align:center;">Số Lượng</th>
                    <th style = "text-align:center;">Thành Tiền</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];

                    $query = "SELECT * FROM cart WHERE  user_id = '$user_id' ";
                    $query_run = mysqli_query($conn, $query);


                    if (mysqli_num_rows($query_run) > 0) {
                        while ($value = mysqli_fetch_assoc($query_run)) {
                            $id = $value['tour_id'];
                            $qrimg = "select tour_image from tour_images where tour_id=$id";
                            $tour_title = "select tour_title from tours where tour_id=$id";
                            $quantity = $value['cart_quantity'];

                            $price = "select tour_price from tours where tour_id=$id";
                            $result_img = mysqli_query($conn, $qrimg);
                            $result_title = mysqli_query($conn, $tour_title);
                            // $result_quantity=mysqli_query($conn,$quantity);
                            $result_price = mysqli_query($conn, $price);

                ?>

                            <div>
                                <tr style="border: 1px solid #ebdede ">
                                    <td class="item--ntent">
                                        <a href="cart.php?action=remove&id=<?= $value['cart_id']; ?>">
                                            <button style="margin-left: 12px;" class="btn btn-danger btn-block"><i class="fa-solid fa-xmark"></i></button>
                                        </a>
                                    </td>
                                    <td class="item--content 4" style="display:flex;align-items:center; justify-content:center">
                                        <?php
                                        $row_img = mysqli_fetch_assoc($result_img);
                                        $path_im = $row_img['tour_image'];
                                        echo "<img id='father'  style='text-align:center; margin :10px 0px;height: 90px;margin-left: 20px; ' src='$path_im' alt='ảnh'>";
                                        ?>
                                    </td>
                                    <td class="item--content">
                                        <?php
                                        $row_title = mysqli_fetch_assoc($result_title);
                                        $path_title = $row_title['tour_title'];
                                        echo "<p style='text-align:center;'>$path_title</p>";
                                        ?>
                                    </td>

                                    <td class="item--content "style="text-align:center">
                                        <?php
                                        $row_price = mysqli_fetch_assoc($result_price);
                                        $path_price = $row_price['tour_price'];
                                        echo "$path_price ";
                                        ?>
                                    </td>
                                    <td class="item--content">
                                        <?php

                                        echo "<input style='  text-align:center;  type='number' value='$quantity'  class='w-full text-center focus:outline-none' >";
                                        ?>
                                    </td>
                                    <td class="item--content" style="text-align:center">

                                        <?php

                                        $total_price = $quantity * $path_price;
                                        echo "<p>$total_price</p>";
                                        ?>
                                    </td>

                                </tr>
                            </div>

                <?php

                            $total = $total + $value['cart_quantity'] * $path_price;
                        }
                    }
                }

                ?>
            </tbody>
        </table>



        <div style="display: flex; justify-content: space-between; margin:100px auto;align-items:center; ">
            <div class="button--next">
                <ul class="btn-list">
                    <li><a style="width: 150px; height: 60px; " href="Destail.php">
                            <p style="margin-top: 20px;">
                                <p style="margin-left: 16px;">Tiếp Tục Đặt Tour</p>
                            </p>
                        </a></li>
                </ul>
            </div>
            <div style=" height: 150px; ">

                <div style=" height: 85px;border:1px solid #ebdede;padding :10px ">
                    <div style="display: flex ;justify-content:space-between; height: 50%;">
                        <div>TỔNG GIÁ :</div>
                        <div style="display: flex ;justify-content:space-between; "><?= number_format($total, 2) ?> VNĐ</div>
                    </div>
                    <div style="display: flex ;justify-content:space-between; height: 50%;">
                        <div>TỔNG TIỀN THANH TOÁN :</div>
                        <div style="display: flex ;justify-content:space-between; "><?= number_format($total, 2) ?> VNĐ</div>
                    </div>
                </div>

                <form action="code.php" method="post">
                    <input type='hidden' id='totalPrice' name='tour_title' value="<?= $path_title ?>">
                    <input type='hidden' id='totalPrice' name='tour_price' value="<?= $total_price ?>">
                    <input type='hidden' id='totalPrice' name='quantity' value="<?= $quantity ?>">
                    <input type='hidden' id='totalPrice' name='tour_img' value="<?= $path_im ?>">
                    <div style="margin-top: 8px;">
                        <ul class="btn-list">
                            <li><a style="width: 100%; height: 60px;" href="Thanhtoan.php">
                                    <p style="margin: 20px 160px;align-content: center;">THANH TOÁN NGAY</p>
                                </a></li>
                        </ul>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "remove") {
            $cart_id = $_GET['id'];
            echo "$cart_id";
            $delete = "DELETE FROM cart WHERE  $cart_id =cart_id and  user_id = $user_id ";
            $delete_run = mysqli_query($conn, $delete);
        }
    }
    ?>
    <?php include "../Components/Footer/Footer.php" ?>
</body>

</html>