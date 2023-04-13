<?php
include '../config/connectDB.php';
session_start();
if(isset($_GET['q'])){
$id=intval($_GET['q']);
$sql="select * from tours where tour_id = $id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$tiltle = $row['tour_title'];
$sqlt ="select tour_reviews from tours where tour_id = $id";
$queryt=mysqli_query($conn,$sqlt);
$rowt=mysqli_fetch_assoc($queryt); 
$tour_review = $rowt['tour_reviews'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tiltle;
    ?></title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="icon" href="./logo.png" type="img/x.icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        opacity: 1
    }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-size: 16px;
    line-height: 1.7;
    letter-spacing: 0;
    font-weight: 400;
    color: #2f2f33;
    font-family: "Roboto",Helvetica Neue,Helvetica,Arial,sans-serif;
    height: 100%;

}

.head {
    display: flex;
}

.row {
    background: #F5F4EF;
    width: 1140px;
    min-height: 530px ;
    position: relative;
    margin: 0 auto;
    margin-top: 30px ;
    padding: 0 15px;

}

.title__head {
    padding: 25px 0;
    font-weight: bold;
    font-size: 18px;
    line-height: 22px;
    margin-top: 0;
    margin-bottom: 0;
}
.head__conner  {
    position: absolute;
    top: -7px;
    right: 70px;
    width: 0;
    height: 0;
    border-bottom: 7px solid #333;
    border-left: 7px solid transparent;

}
div {
    display: block;
}
.head__inventory::before {
content: '';
position: absolute;
height: 0;
width: 0;
top: 100%;
border-top:20px solid #32aad6;
border-left: 50px solid transparent;
right: 0;

}
.head__inventory::after {
    content: '';
    position: absolute;
    height: 0;
    width: 0;
    top: 100%;
    border-top:20px solid #32aad6;
    border-right: 50px solid transparent;
    right: 0;
    
    }

.head__inventory {
    position: absolute;
    top: -7px;
    height: 60px;
    margin: 0 auto;
    width: 50px;
    text-align: center;
    vertical-align: middle;
    line-height: initial;
    font-size: 13.5px;
    color: #fff;
    padding: 10px;
    font-weight: 500;
    padding-left: 5px;
    padding-right: 5px;
    right: 20px;
    background: #32aad6;
}

.img {
    width: 540px;
    height: 360px;
}

.img img {
    width: 100%;
    height: 360px;
    background: cover !important;
}

.item {
 width: 545px;
 height: 75px;
 display: flex;
justify-content: space-between;

}
.item__son img {
    max-height: 100%;
    max-width: 100%;
    border: 0 none;
    vertical-align: middle;
    padding-left: 1px;
    padding-right: 1px;
}

.item__son{
    width: 104px;
    height: 75px;
    margin-top: 8px;
    border: 1px solid #32aad6;
    align-items: center;
    justify-content: center;
    display: flex;
}
.content {
    width: 570px;
    height: 290px;
    padding: 0px 30px;
    position: absolute;
    right: 0;
    text-align: left;
    top: 85px;
    
}

.content__infor {
    margin-bottom:15px ;
}
.ul__dacbiet {
    list-style: none;
    margin-left: 16px;
}
.tagdacbiet {
    position: relative;
    padding-left: 13px;
    list-style: initial;
    margin-bottom: 0.4em;
}
.tagdacbiet::marker {
    unicode-bidi: isolate;
    font-variant-numeric: tabular-nums;
    text-transform: none;
    text-indent:0px !important;
    text-align-last: start !important;
}

.tagdacbiet::before {
    display: block;
    width: 6px;
    height: 6px;
    position: absolute;
    content: '';
    border-radius: 50%;
    left: 0;
    top: 12px;
    background: #32aad6;
}
.content__describe {
    margin-bottom: 30px;
}
.content__contact {
    width: 500px;
    height: 50px;
    color: #8a6d3b;
    background-color: #fcf8e3;
    border: 1px solid #faebcc;
    position: relative;
    text-align: left;
    padding-right: 35px;
    padding: 15px;
    
}

.content__contact button {
    position: absolute;
    right: 8px;
    top: 50%;
    border: none;
    background: transparent;
    font-size:large;
    transform: translate(-50%, -50%);
}
.content__contact b {
    cursor: pointer;
}
.content__contact b:hover {
    color: #32aad6 !important;

}
.topic {
    width: 1140px;
    margin: 0 auto ;
    display: flex;
    margin-top: 30px;
}
.topic__content {
    min-width: 768px;
    min-height: 200px;
    margin-top: 20px;
    display: block;
    padding: 24px;
    border: 1px solid #ebebeb !important;
    clear: left;
    opacity: 1;
    height: auto ;
    transition: all 200ms ease-in-out;
    visibility: visible;
    margin-right: 25px;
}

.tournb {
    min-width: 300px;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    overflow: hidden;
}
.tour__son {
    width: 100%;
    padding: 10px;
    border: #ebebebeb solid 1px;
    position: relative;
}
.tour__son img {
    width: 100%;
    height: 185px;
}
.price {
    font-size: 16px;
    font-weight: 600;
    color: #32aad6;
}
.old__price {
    font-size: 13px;
    font-weight: 300;
    color: #bbbb;
    text-decoration: line-through;
    
}
.tour__infor a{
    text-decoration: none;
    color: #2f2f33;
    font-size: 18px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
.topic__content__rte p {
    margin: 20px 0;
}
.topic__content__rte h6 {
    font-size: 20px;
    font-weight: 600;
}
.tourcl {
    width: 1140px;
    margin: 0 auto;
    margin-top: 30px ;
}
.tourcl__father {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    width: 100%;
    margin-top:20px ;
}
.tourcl__son {
    width:350px;
    border: #ebebeb solid 1px;
    padding: 8px;
}
.tourcl__son img {
    width: 100%;

}
.tourcl__son a {
    text-decoration: none;
    color: #2f2f33;
    font-weight: 500;
}
.tourcl__head {
    border-bottom: #ebebeb solid 1px;
}
.img__ {
    position: relative;
}
.img__ img {
    width: 100%;
    height: 220px !important;
    overflow: hidden;
}
.img__:hover .chitiet button {
    visibility: visible;
    width: 60px;
    height: 25px;
}
.chitiet {
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 15px;

}
.chitiet button {
    background: #32aad6;
    color: #F5F4EF;
    width: 80px;
    height: 40px;
    cursor: pointer;
    border: none;
    border-radius: 20px;
    visibility: hidden;
    transition: 0.3s;
}
h2,h3,h4,h5,h6{
    font-weight: bold;
}
.comment__container {

    width: 1140px;
    margin: 0 auto;
    background: #ebebeb;
    min-height: 330px;
    margin-top: 50px;
    padding: 30px 50px;
    margin-bottom: 30px;
}
.comment__head {
    border-bottom: #2f2f33 solid 1px;
}
.comment {
    width: 960px;
    min-height: 65px;
    background: #fff;
    color: #333;
    border-radius: 5px;
    padding:  2px 10px 5px 10px;
    line-height: normal;
}
.comment__avt {
 width: 56px;
 height: 56px;
 border-radius: 100%;
 border: 1px solid #ccc;
 padding: 2px;
 background-color: #ccc;
 vertical-align: middle;
 text-align: center;
 overflow: hidden;
 
}
.comment__avt img {
    width: 100px;
    object-fit: cover;
    object-position: center;
}
.comment__bag {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.name input {
    height: auto;
    width: 400px;
    padding: 5px;
    margin: 15px 0 10px 5px;
    border-radius: 5px;
}

.information label {
    width: 50px;
    display: inline-block;
}
.email input {
    height: auto;
    width: 400px;
    padding: 5px;
    margin: 0 0 10px 5px;
    border-radius: 5px;
}

.clip-path {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 65%, 0 100%);
}

#comment-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-bottom: 10px;
    cursor: pointer;
  }

  #comment-list {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  #comment-list li {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
  }
  #comment-list li h4 {
    margin-top: 0;
    color: #32aad6;
  }

  .cart {
    width:500px;
    height: 50px;
    justify-content: center;
    text-align: center;
    background: #fff;
    vertical-align: middle;
  }
  .cart td {
    border: #F5F4EF 2px solid;
  }
  .date {
    display: flex;
    justify-content:right;
  }
  .date input {
    margin-left: 5px;
    background: transparent;
    border: #000 1px solid;
    border-radius: 5px;
  }
  .container1 {
      margin-top: 20px;
    display: flex;
    width: 500px;
    justify-content: space-around;
  }
  .container1 h4 {
    color: #F04339;
  }
  .container1 strong {
    color: red;
  }
  .sm {
    width: 500px;
    text-align: right;
  }
  .sm input {
    margin-right: 10px;
    margin-top: 20px;
    background: #F04339;
    color: #fff;
    height:40px;
    width: 150px;
    border-radius: 25px;
    font-family: 'lato', sans;
    transition: transform 0.2 ease-in-out;
    cursor: pointer;
  }
  .sm input:hover {
    transform:scale(0.95) ;
  }

    </style>
</head>
<body>

    <?php include'../Components/Header/Header.php';?>
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
    <form method='post' action='./code.php'>
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
    <input type='hidden' id='totalPrice' name='toltalPrice' value='$tien'>
    <input type='submit' name='add_to_cart' value='BOOK TOUR'>
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

    <?php include'../Components/Footer/Footer.php' ?>
</body>
</html>