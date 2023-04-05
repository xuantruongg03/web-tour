<?php
include './config/connectDB.php';
session_start();
$id=15;
if(isset($_GET['id'])){
$id=intval($_GET['id']);
}
$sql="select * from tours where tour_id = $id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$tiltle = $row['tour_title'];
$sqlt ="select tour_reviews from tours where tour_id = $id";
$queryt=mysqli_query($conn,$sqlt);
$rowt=mysqli_fetch_assoc($queryt); 
$tour_review = $rowt['tour_reviews'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tiltle;
    ?></title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./logo.png" type="img/x.icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        opacity: 1
    }

    </style>
</head>
<body>

    <?php include'./header.php';?>
    <div class="row">
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
                   $qrquantity="select * from tours where tour_id = $id" ; 
                   $result_quantity= mysqli_query($conn,$qrquantity);
                   $row_quantity= mysqli_fetch_assoc($result_quantity);
                   $quantity = intval($row_quantity['tour_quantity']);
                    $tien=intval($row_quantity['tour_price']);
                   if($quantity>0)
                        echo "còn tour";
                    else 
                        echo "hết tour"; 

                    ?>
                </span>
            </div>
        </div>

        <?php
        $qrimg="select tour_image from tour_images where tour_id=$id";
        $result_img=mysqli_query($conn,$qrimg);
        ?>

        <div class="img">
            <?php
            $row_img=mysqli_fetch_assoc($result_img);
            $path=$row_img['tour_image'];
            echo "<img id='father' src='$path' alt='ảnh'>";
            ?>
        </div>


        <div class="item">
            <?php 
             echo "<div class='item__son'><img src='$path' data-src='$path' alt=''></div>";
             $j=0;
            while ($row_img=mysqli_fetch_assoc($result_img)){
                $path=$row_img['tour_image'];
                echo "<div class='item__son'><img src='$path' data-src='$path' alt=''></div>";
                $j=$j+1;
                //gioi han hien thi 5 anh
                if($j==4)
                    break;
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
                    <li class="tagdacbiet"><b>Di chuyển bằng:</b> Di chuyển bằng máy bay</li>
                    <li class="tagdacbiet"><b>Di chuyển bằng:</b> Di chuyển bằng Ô tô</li>
                    <li class="tagdacbiet"><b>Ngày khởi hành:</b> Chủ nhật hàng tuần</li>
                </ul>
            </div>
            <div class="content__describe">
                <p>
                    - Khám phá Quy nhơn qua tour xe lửa mang cảm giác hoài niệm trên từng cung đường được đi qua ...tour còn được ghé biển quy nhơn 1 trong những bãi biển đẹp nhất Việt Nam...
                </p>
                <p>
                    - Thán phục sức sáng tạo của dân tộc Chăm trong từng đường nét kiến trúc được kết hợp một cách tuyệt hảo, lưu giữ...
                </p>
            </div>
             <?php 
             if($quantity==0){
                 echo '<div class="content__contact">
                 <span>Vui lòng liên hệ </span>
                 <b style="color: #333;">0123456789</b>
                 <span> để đặt Tour </span>
             </div>';
             }
             else{
             ?>
            <div>
            <div class="w-1/2">
    <?php 
    $max=$quantity;
    echo "
    <form method='post' action='./test.php'>
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
                <label for='' id='giatour'>$tien <span>VNĐ</span></label>
            </td>
            <td class='text-center'>
            <label for='' class='text-sky-500 font-bold tongtien'>$tien <span>VND</span></label>
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
    Tổng tiền : <strong id='ttmn'>
    $tien VNĐ
    </strong>
    </h4>
    </div>
    </div>
    <div class='sm'>
    <input type='hidden' id='totalPrice' name='toltalPrice' value='$tien' readonly>
    <input type='submit' value='BOOK TOUR'>
    </div>
    </form>
    ";
    }
    ?>
    
    <script>
       var max= Number(document.getElementById('numberPerson').max);
       var tien= Number(document.getElementById('giatour').textContent.split(' ')[0]);
        var totalpricedisplay = document.getElementById('ttmn');
        var totalPrice = document.getElementById('totalPrice');
       const numberPerson = document.getElementById('numberPerson');
       const price= document.getElementsByClassName('tongtien');

       numberPerson.addEventListener('change', function(){
        if(numberPerson.value > max){
            numberPerson.value=max;
        }
        if(numberPerson.value <1){
            numberPerson.value=1;
        }
        totalpricedisplay.innerHTML=numberPerson.value*tien+" VNĐ"
        price[0].innerHTML=numberPerson.value*tien +" VND";
        totalPrice.value=numberPerson.value*tien;
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
            <h3>TOUR NỔI BẬT</h3>
            <?php 
            $sqll="select * from tours";
            $queryl=mysqli_query($conn,$sqll);
            $j=6;
            while ($row_nb=mysqli_fetch_assoc($queryl)){
                $tt=$row_nb['tour_title'];
                $price=$row_nb['tour_price'];
                $tour_idnb=$row_nb['tour_id'];
                $sqlnb="select * from tour_images where tour_id=$tour_idnb";
                $querynb=mysqli_query($conn,$sqlnb);
                $row_img=mysqli_fetch_assoc($querynb);
                $path=$row_img['tour_image'];
                $rate=$row_nb['tour_discount_rate'];
                $discount=$price+($price*$rate)/100;
                $tour_id=$row_nb['tour_id'];
                $sv=basename($_SERVER['PHP_SELF']);
                if($discount!=$price)
                echo "<div class='tour__son'><a href='./$sv?id=$tour_id'>
                <img src='$path' alt=''></a> <div class='tour__infor'> <h3><a href='./$sv?id=$tour_id' title='$tt' >$tt </a></h3> <span class='price'> $price VNĐ</span> <span class='old__price'> $discount VNĐ</span>  </div> </div> ";
                else
                echo "<div class='tour__son'><a href='./$sv?id=$tour_id'><img src='$path' alt=''></a> <div class='tour__infor'> <h3><a href='./$sv?id=$tour_id' title='$tt' >$tt </a></h3> <span class='price'> $price VNĐ </span> <span class='old__price'></span>  </div> </div> ";
                
                //gioi han hien thi 6 tour
                $j--;
                if($j==0)
                    break;
            } 
            ?>
        </div>
    </div>
    <div class="tourcl">
        <div class="tourcl__head">
            <h3>Tour cùng loại</h3>
        </div>
        <div class="tourcl__father">
            <?php 
            $mien=$row['tour_region'];
            $querycl="select * from tours where tour_region = '$mien' and tour_id != $id";
            $resultcl=mysqli_query($conn,$querycl);
            while ($row = mysqli_fetch_assoc($resultcl)){
                $tt=$row['tour_title'];
                $price=$row['tour_price'];
                $rate=$row['tour_discount_rate'];
                $discount=$price+($price*$rate)/100;
                $tour_idnb=$row['tour_id'];
                $sqlnb="select * from tour_images where tour_id=$tour_idnb";
                $querynb=mysqli_query($conn,$sqlnb);
                $row_img=mysqli_fetch_assoc($querynb);
                $path=$row_img['tour_image'];
                $sv=basename($_SERVER['PHP_SELF']);
                if ($price!=$discount)
                 echo "<div class='tourcl__son'> <div class='img__'> <a href='./$sv?id=$tour_idnb'> <img src='$path' alt=''>   </a>
                <div class='chitiet'> <button title='Chi tiết' type='button'> <span>Chi tiết</span></button></div> </div> <div class='tourcl__infor'> <h3><a href='./$sv?id=$tour_idnb' title='$tt'>$tt</a></h3> <span class='price'>$price VNĐ</span> <span class='old__price' > $discount VNĐ </span></div> 
                </div>";
                else
                   echo "<div class='tourcl__son'> <div class='img__'> <a href='./$sv?id=$tour_idnb'> <img src='$path' alt=''>   </a>
                <div class='chitiet'> <button title='Chi tiết' type='button'> <span>Chi tiết</span></button></div> </div> <div class='tourcl__infor'> <h3><a href='./$sv?id=$tour_idnb' title='$tt'>$tt</a></h3> <span class='price'>$price VNĐ</span> <span class='old__price' ></span></div> 
                </div>";
                $j++;
                if($j==3)
                    break;
            }
            ?>
        </div>
    </div>
    <div class="comment__container">
        <div class="comment__head"><h5>Bình luận</h5></div>
        <form action="" method="post" id="comment-form">
           <div class="comment__bag">
                <div class="comment__avt">
                    <img src="https://secure.gravatar.com/avatar/?s=56&d=mm&r=g" alt="avt">
                </div>
                <textarea id="comment" class="comment focus:outline-none "  name="comment" required ></textarea>
           </div>
          <div class="information">
                 <div class="name"> <label for="name">Name:</label><input class="focus:outline-none" type="text" id="name" name="name" required placeholder="Name"></div>
                 <div class="email"><label for="email">Email:</label><input class="focus:outline-none" type="text" id="email" name="email" required placeholder="123abc@gmail.com"></div>
          </div>
          <input type="submit" value="Submit">
        </form>
        <ul id="comment-list"></ul>
    </div>
<script>
  const form = document.getElementById("comment-form");
  const list = document.getElementById("comment-list");
  form.addEventListener("submit", event => {
      event.preventDefault();
      const name = form.elements['name'].value;
      const email = form.elements['email'].value;
      const comment = form.elements['comment'].value;
      const li = document.createElement('li');
      const h4 = document.createElement('h4');
      const p = document.createElement('p');
      h4.textContent = name;
      p.innerHTML = `${comment}`
      li.appendChild(h4);
      li.appendChild(p);
      list.appendChild(li);
      form.reset();
    });
    </script>

    <?php include'./footer.php' ?>
</body>
</html>