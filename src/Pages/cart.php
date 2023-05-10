<?php
session_start();
require '../config/connectDB.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="/web-tour/src/Lib/tailwind.js"></script>
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
        .item--content{
            margin: 0;
        }
    </style>
</head>

<body>
    <?php include "../Components/Header/Header.php" ?>
    <div class="cart " style="margin:100px 190px; width: 1150px;">
        <h1 class="text-center text-sky-500 text-3xl font-bold ">Giỏ hàng</h1>
        <?php
        $total = 0;
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $query = "SELECT * FROM cart WHERE  user_id = '$user_id' ";
            $query_run = mysqli_query($conn, $query);
            $num = mysqli_num_rows($query_run);
            if ($num > 0) {
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
                    echo '
                                    <table class="table " style=" width: 1150px;border: 1px solid #171617; border-radius: 4px;">
                                    <thead>
                                        <tr style=" background-color: #154054; color:aliceblue; width: 1150px; height: 50px;  border-radius: 4px;">
                                            <th class="px-2" >Xóa</th>
                                            <th>Ảnh tour</th>
                                            <th>Tên Tour</th>
                                            <th>Giá</th>
                                            <th >Số Lượng người</th>
                                            <th>Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div>
                                            <tr>
                                                <td class="item--content">
                                    ';
                    echo "
                                        <a href='../controllers/deleteCart.php?action=remove&id={$value['cart_id']}'>
                                            <button style='margin-left: 12px;' class='btn btn-danger btn-block'><i class='fa-solid fa-xmark'></i></button>
                                        </a>
                                    </td>
                                    ";
                    $row_img = mysqli_fetch_assoc($result_img);
                    $path_im = $row_img['tour_image'];
                    echo "
                                    <td class='item--content 4'>
                                        <img id='father'  style='margin:10px 0px 5px 40px;height: 90px; ' src='$path_im' alt='ảnh'>
                                    </td>
                                    ";
                    $row_title = mysqli_fetch_assoc($result_title);
                    $path_title = $row_title['tour_title'];
                    echo "
                                        <td class='item--content'>
                                            <p style='margin-left: 90px;'>$path_title</p>
                                        </td>
                                    ";
                    $row_price = mysqli_fetch_assoc($result_price);
                    $path_price = $row_price['tour_price'];
                    echo "
                        <td class = 'item--content'>
                            $path_price
                        </td>
                    ";
                    echo "
                        <td class = 'item--content'>
                            <input style='margin-left: 50px;background-color: #dddddd; width:30px; '  type='number' value='$quantity'  class='w-full text-center focus:outline-none' >
                        </td>
                        ";
                        $total_price = $quantity * $path_price;
                        echo "
                        <td class = 'item--content'>
                            <p style='margin-left: 35px;'>$total_price</p>
                        </td>
                        </tr>
                        </div>
                        ";
                        $total = $total + $value['cart_quantity'] * $path_price;
                        $total = number_format($total, 2);
                        echo "
                            
    </tbody>
    </table>
    <div style='display: flex; justify-content: space-between; margin:100px auto;'>
        <div class='button--next'>
            <ul class='btn-list'>
                <li><a style='width: 150px; height: 60px; ' href='Destail.php'>
                        <p style='margin-top: 20px;'>
                            <p style='margin-left: 16px;'>Tiếp Tục Đặt Tour</p>
                        </p>
                    </a></li>
            </ul>
        </div>
        <div style='width: 460px; height: 150px;'>

            <div style=' height: 85px;'>
                <div style='display: flex ;justify-content:space-between;border: 0.1px solid #171617; height: 50%;'>
                    <div>TỔNG GIÁ</div>
                    <div style='display: flex ;justify-content:space-between;border-left: 0.5px solid #171617; '>$total VNĐ</div>
                </div>
                <div style='display: flex ;justify-content:space-between;border: 0.1px solid #171617; height: 50%;'>
                    <div>TỔNG TIỀN THANH TOÁN</div>
                    <div style='display: flex ;justify-content:space-between;border-left: 0.1px solid #171617; '>$total VNĐ</div>
                </div>
            </div>

            <form action='code.php' method='post'>
                <input type='hidden' id='totalPrice' name='tour_title' value='$path_title'>
                <input type='hidden' id='totalPrice' name='tour_price' value='$total_price'>
                <input type='hidden' id='totalPrice' name='quantity' value='$quantity'>
                <input type='hidden' id='totalPrice' name='tour_img' value='$path_im'>
                <div style='margin-top: 8px;'>
                    <ul class='btn-list'>
                        <li><a style='width: 100%; height: 60px;' href='Thanhtoan.php'>
                                <p style='margin: 20px 160px;align-content: center;'>THANH TOÁN NGAY</p>
                            </a></li>
                    </ul>

                </div>
            </form>
        </div>
    </div>
    </div>
                        ";
                }
            } else {
                echo '<h1 class = "text-center font-bold text-red-500 text-5xl my-10" >Giỏ hàng trống</h1>';
            }
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <?php include "../Components/Footer/Footer.php" ?>
</body>

</html>