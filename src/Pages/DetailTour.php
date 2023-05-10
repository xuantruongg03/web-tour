<?php
include '../config/connectDB.php';
session_start();
if (isset($_GET['q'])) {
    $id = intval($_GET['q']);
} else {
    $id = 1;
}
mysqli_query($conn, "update tours set tour_visited = tour_visited + 1 where tour_id = $id");
$sql = "select * from tours where tour_id = $id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$tiltle = $row['tour_title'];
$tour_review = $row['tour_reviews'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tiltle; ?></title>
    <link rel="icon" href="./logo.png" type="img/x.icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/styledetailTour.css">
</head>

<body>

    <?php include '../Components/Header/Header.php'; ?>
    <div class="rowtt">
        <div class="head">
            <div class="head__title">
                <h2 class="title__head"><?php echo $tiltle; ?>
                </h2>

            </div>
            <div class="head__conner">
            </div>
            <div class="head__inventory">
                <span>
                    <?php
                    $qrquantity = "select * from tours where tour_id = $id";
                    $result_quantity = mysqli_query($conn, $qrquantity);
                    $row_quantity = mysqli_fetch_assoc($result_quantity);
                    $quantity = intval($row_quantity['tour_quantity']);
                    $tien = intval($row_quantity['tour_price']);
                    if ($quantity > 0)
                        echo "còn tour";
                    else
                        echo "hết tour";

                    ?>
                </span>
            </div>
        </div>

        <?php
        $qrimg = "select tour_image from tour_images where tour_id=$id limit 5";
        $result_img = mysqli_query($conn, $qrimg);
        ?>

        <div class="img">
            <?php
            $row_img = mysqli_fetch_assoc($result_img);
            $path = $row_img['tour_image'];
            echo "<img id='father' src='$path' alt='ảnh'>";
            ?>
        </div>


        <div class="item">
            <?php
            echo "<div class='item__son'><img src='$path' data-src='$path' alt=''></div>";
            while ($row_img = mysqli_fetch_assoc($result_img)) {
                $path = $row_img['tour_image'];
                echo "<div class='item__son'><img src='$path' data-src='$path' alt=''></div>";
            }
            ?>
        </div>

        <script>
            var img = document.getElementById("father");
            var item = document.querySelector(".item");

            item.addEventListener("click", function(event) {
                if (event.target.tagName === "IMG") {
                    var src = event.target.getAttribute("data-src");
                    img.setAttribute("src", src);
                }
            });
        </script>
        <div class="content">
            <div class="content__infor">
                <ul class="ul__dacbiet">
                    <?php
                    $query = "SELECT * FROM `transportation` WHERE tour_id = ?";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $query);
                    mysqli_stmt_bind_param($stmt, 'i', $id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while ($rowtrans = mysqli_fetch_assoc($result)) {
                        switch ($rowtrans['transportation_name']) {
                            case 'Plane':
                                $trans = 'máy bay';
                                break;
                            case 'Train':
                                $trans = 'tàu lửa';
                                break;
                            case 'Boat':
                                $trans = 'thuyền';
                                break;
                            default:
                                $trans = 'ô tô';
                                break;
                        }
                        echo ' <li class="tagdacbiet"><b>Di chuyển bằng:</b> Di chuyển bằng ' . $trans . '</li>';
                    }

                    ?>
                </ul>
            </div>
            <div class="content__describe">
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const describe = document.querySelectorAll('.topic__content__rte p');
                    const viewdescribe = document.querySelector('.content__describe');

                    let html = '';
                    for (let i = 0, j = 0; i < describe.length, j < 2; i++) {
                        let text = describe[i].textContent;
                        if (text.length > 180) {
                            text = text.slice(0, 150) + '....';
                            html += '<p>-\t' + text + '</p>';
                            j++;
                        }
                    }
                    viewdescribe.innerHTML = html;
                });
            </script>
            <?php
            if ($quantity == 0) {
                echo '<div class="content__contact">
                 <span>Vui lòng liên hệ </span>
                 <b style="color: #333;">0123456789</b>
                 <span> để đặt Tour </span>
             </div>';
            } else {
            ?>
                <div>
                    <div class="w-1/2">
                    <?php
                    $max = $quantity;
                    echo "
    <form method='post' action='../controllers/bookTour.php'>
    <table class='cart mt-3'>
    <thead class='border border-b-2'>
        <td class='text-center p-1 '>Số lượng người</td>
        <td class='text-center p-1 '>Đơn giá</td>
        <td class='text-center p-1 '>Thành tiền</td>  
        </thead>
        <tbody>
            <tr class='text-sm '>
                <td>
                    <input  type='number' name='quantity'  value='1' min='1' max='$max' class='w-full text-center focus:outline-none' id='numberPerson'>
                </td>
                <td class='text-center'>
                <label for=''>" . number_format($tien, 0, '', '.') . "<span  id='giatour' data-value='$tien'> VNĐ</span></label>
            </td>
            <td class='text-center'>
            <label for='' class='text-sky-500 font-bold tongtien'>" . number_format($tien, 0, '', '.') . " <span>VND</span></label>
        </td>
    </tr>

    </table>
    <div class='container1'>
    <div class='date'>
    <label for='date'>
        Ngày đi :
    </label>
    <input type='date' name='date' required>
    </div>
    <div class='total_money'>
    <h4>
    Tổng tiền : <strong id='ttmn'>" . number_format($tien, 0, '', '.') . " VNĐ
    </strong>
    </h4>
    </div>
    </div>
    <div class='sm'>
    <input type='hidden' id='idtour' name='idtour' value='$id' readonly>
    <input type='hidden' id='totalPrice' name='toltalPrice' value='$tien' readonly>
    <input type='submit' value='BOOK TOUR' name='booktour'>
    </div>
    </form>
    ";
                }
                    ?>
                    <script>
                        var max = Number(document.getElementById('numberPerson').max);
                        var tien = Number(document.getElementById('giatour').dataset.value);
                        console.log(tien);
                        var toltalpricedisplay = document.getElementById('ttmn');
                        var toltalPrice = document.getElementById('totalPrice');
                        const numberPerson = document.getElementById('numberPerson');
                        const price = document.getElementsByClassName('tongtien');
                        numberPerson.addEventListener('change', function() {
                            if (numberPerson.value > max) {
                                numberPerson.value = max;
                            }
                            if (numberPerson.value < 1) {
                                numberPerson.value = 1;
                            }
                            toltalpricedisplay.innerHTML = (numberPerson.value * tien).toLocaleString('vi-VN') + " VND";
                            price[0].innerHTML = (numberPerson.value * tien).toLocaleString('vi-VN') + " VND";
                            toltalPrice.value = numberPerson.value * tien;
                        })
                    </script>
                    </div>
                </div>
        </div>
    </div>
    <div class="topic">
        <div class="topic__content">
            <div class="topic__head">
                <h2>CHƯƠNG TRÌNH TOUR</h2>
            </div>
            <div class="topic__content__rte">
                <?php
                echo $tour_review;
                ?>
            </div>
        </div>
        <div class="tournb">
            <div class="sticky">
                <h3>TOUR NỔI BẬT</h3>
                <?php
                $sqll = "select * from tours limit 6";
                $queryl = mysqli_query($conn, $sqll);
                while ($row_nb = mysqli_fetch_assoc($queryl)) {
                    $tt = $row_nb['tour_title'];
                    $price = $row_nb['tour_price'];
                    $tour_idnb = $row_nb['tour_id'];
                    $sqlnb = "select * from tour_images where tour_id=$tour_idnb";
                    $querynb = mysqli_query($conn, $sqlnb);
                    $row_img = mysqli_fetch_assoc($querynb);
                    $path = $row_img['tour_image'];
                    $rate = $row_nb['tour_discount_rate'];
                    $discount = $price + ($price * $rate) / 100;
                    $tour_id = $row_nb['tour_id'];
                    $sv = basename($_SERVER['PHP_SELF']);
                    if ($discount != $price)
                        echo "<div class='tour__son'><a href='./$sv?id=$tour_id'>
                <img src='$path' alt=''></a>
                 <div class='tour__infor'> <h3><a href='./$sv?id=$tour_id' title='$tt' >$tt </a></h3> 
                 <span class='price'> " . number_format($price, 0, '', '.') . " VNĐ</span> <span class='old__price'>" . number_format($discount, 0, '', '.') . " VNĐ</span>  </div> </div> ";
                    else
                        echo "<div class='tour__son'>
                            <a href='./$sv?id=$tour_id'>
                                <img src='$path' alt=''>
                            </a>
                            <div class='tour__infor'>
                                <h3><a href='./$sv?id=$tour_id' title='$tt' >$tt</a></h3>
                                <span class='price'> " . number_format($price, 0, '', '.') . " VNĐ </span>
                            </div>
                         </div> ";

                    //gioi han hien thi 6 tour
                }
                ?>
            </div>
        </div>
    </div>
    <div class="tourcl">
        <div class="tourcl__head">
            <h3>Tour cùng loại</h3>
        </div>
        <div class="tourcl__father">
            <?php
            $mien = $row['tour_region'];
            $querycl = "select * from tours where tour_region = '$mien' and tour_id != $id limit 3";
            $resultcl = mysqli_query($conn, $querycl);
            while ($row = mysqli_fetch_assoc($resultcl)) {
                $tt = $row['tour_title'];
                $price = $row['tour_price'];
                $rate = $row['tour_discount_rate'];
                $discount = $price + ($price * $rate) / 100;
                $tour_idnb = $row['tour_id'];
                $sqlnb = "select * from tour_images where tour_id=$tour_idnb";
                $querynb = mysqli_query($conn, $sqlnb);
                $row_img = mysqli_fetch_assoc($querynb);
                $path = $row_img['tour_image'];
                $sv = basename($_SERVER['PHP_SELF']);
                if ($price != $discount)
                    echo "<div class='tourcl__son'> <div class='img__'> <a href='./$sv?id=$tour_idnb'> <img src='$path' alt=''>   </a>
                <div class='chitiet'><a href='./$sv?id=$tour_idnb'> <button title='Chi tiết' type='button'> <span>Chi tiết</span></button> </a>
                </div> </div> <div class='tourcl__infor'> <h3><a href='./$sv?id=$tour_idnb' title='$tt'>$tt</a></h3> <span class='price'>" . number_format($price, 0, '', '.') . " VNĐ</span> <span class='old__price' >" . number_format($discount, 0, '', '.') . " VNĐ </span></div> 
                </div>";
                else
                    echo "<div class='tourcl__son'> <div class='img__'> <a href='./$sv?id=$tour_idnb'> <img src='$path' alt=''>   </a>
                <div class='chitiet'><a href='./$sv?id=$tour_idnb'>  <button title='Chi tiết' type='button'> <span>Chi tiết</span></button>   </a>
                </div> </div> <div class='tourcl__infor'> <h3><a href='./$sv?id=$tour_idnb' title='$tt'>$tt</a></h3> <span class='price'>" . number_format($price, 0, '', '.') . " VNĐ</span></div> 
                </div>";
            }
            ?>
        </div>
    </div>
    <div class="comment__container">
        <div class="comment__head">
            <h5>Bình luận</h5>
        </div>
        <form action="../controllers/process_comment.php?id=<?php echo $id; ?>" method="post" id="comment-form">
            <div class="comment__bag">
                <div class="comment__avt">
                    <img src="https://secure.gravatar.com/avatar/?s=56&d=mm&r=g" alt="avt">
                </div>
                <textarea id="comment" class="comment focus:outline-none " placeholder="Hãy nhập bình luận của bạn ở đây" name="comment" required></textarea>
            </div>
            <div class="information">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo '<div class="name"> <label for="name">Name:</label><input class="focus:outline-none" type="text" id="name" name="name" required placeholder="Name"></div>';
                }
                ?>
            </div>
            <input type="submit" value="Bình luận" style="margin-top : 15px;">
        </form>
        <ul id="comment-list">
            <?php
            $result = mysqli_query($conn, "SELECT count(*) as total FROM comments WHERE tour_id = $id");
            $row = mysqli_fetch_assoc($result);
            $total_records = $row['total'];
            if( $total_records>0){
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 5;
            $total_page = ceil($total_records / $limit);
            if ($current_page > $total_page) {
                $current_page = $total_page;
            } else if ($current_page < 1) {
                $current_page = 1;
            }
            $start = ($current_page - 1) * $limit;
            $result = mysqli_query($conn, "SELECT * FROM comments WHERE tour_id = $id ORDER BY comment_id DESC LIMIT $start, $limit");
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li><h4>' . $row['name_comment'] . '</h4><p>' . $row['comment_content'] . '</p> </li>';
            }
            ?>
        </ul>
        <div class="pagination">
            <?php
            if ($current_page > 1 && $total_page > 1) {
                echo '<a href="'.$_SERVER['PHP_SELF'].'?id='.$id.'&page=' . ($current_page - 1) . '">Prev</a> | ';
            }
            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $current_page) {
                    echo '<span>' . $i . '</span> | ';
                } else {
                    echo '<a href="'.$_SERVER['PHP_SELF'].'?id='.$id.'&page=' . $i . '">' . $i . '</a> | ';
                }
            }
            if ($current_page < $total_page && $total_page > 1) {
                echo '<a href="'.$_SERVER['PHP_SELF'].'?id='.$id.'&page=' . ($current_page + 1) . '">Next</a> | ';
            }
        }
            ?>
        </div>
    </div>
    <?php include '../Components/Footer/Footer.php' ?>
</body>

</html>