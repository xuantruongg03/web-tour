<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)</title>
    <link rel="stylesheet" href="/web/style.css">
    <link rel="icon" href="./logo.png" type="img/x.icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php include'./header.php' ?>
    <div class="row">
        <div class="head">
            <div class="head__title">
                <h2 class="title__head">
                    Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)
                </h2>

            </div>
            <div class="head__conner">
            </div>
            <div class="head__inventory">
                <span>Hết tour</span>
            </div>
        </div>
        <div class="img">
            <img id="father" src="https://bizweb.dktcdn.net/100/315/268/products/royalpalacecambodiasunsetwallp.jpg?v=1536114542553" alt="ảnh Thái Lan">
        </div>
        <div class="item">
            <div class="item__son" id="son1"><img id="img1" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/268/products/cam-hangluc4jpg.jpg?v=1536114542553" alt="ảnh Thái Lan"></div>
            <div class="item__son" id="son2"><img id="img2" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/268/products/cungcapphiendichthongdichvient.jpg?v=1536114542553" alt=""></div>
            <div class="item__son" id="son3"><img id="img3" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/268/products/angkorwatwithwatersenantour.jpg?v=1536114542553" alt=""></div>
            <div class="item__son" id="son4"><img id="img4" src="https://bizweb.dktcdn.net/100/315/268/products/preahvihear5447611a6fc7f.jpg?v=1536114542553" alt=""></div>
            <div class="item__son" id="son5"><img id="img5" src="https://bizweb.dktcdn.net/100/315/268/products/royalpalacecambodiasunsetwallp.jpg?v=1536114542553" alt=""></div>
        </div>

        <script>

            var img = document.getElementById("father")

            window.onload = function() {
            var son1 = document.getElementById("son1");
            var son2 = document.getElementById("son2");
            var son3 = document.getElementById("son3");
            var son4 = document.getElementById("son4");
            var son5 = document.getElementById("son5");
            son1.addEventListener("click", function() {
              clickimg(son1);
            });
            son2.addEventListener("click", function() {
              clickimg(son2);
            });
            son3.addEventListener("click", function() {
              clickimg(son3);
            });
            son4.addEventListener("click", function() {
              clickimg(son4);
            });
            son5.addEventListener("click", function() {
              clickimg(son5);
            });
          }
          
          function clickimg(a) {
                var  g = a.querySelector('img')
                var src = g.getAttribute("src")
                img.setAttribute("src", src)
          }
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
                    - Khám phá vương quốc Campuchia vừa gần gũi vừa kỳ bí với thủ đô Phnôm Pênh trên 500 tuổi soi bóng bên dòng Tonle Sap.
                </p>
                <p>
                    - Thán phục sức sáng tạo của dân tộc Khmer trong từng đường nét kiến trúc được kết hợp một cách tuyệt hảo, lưu giữ...
                </p>
            </div>
            <div class="content__contact">
                <button>
                    <span> × </span>
                </button>
                <span>Vui lòng liên hệ </span>
                <b style="color: #333;">0123456789</b>
                <span> để đặt Tour.</span>
            </div>

                
        </div>
    </div>
    <div class="topic">
        <div class="topic__content">
            <div class="topic__head">
                <h2>CHƯƠNG TRÌNH TOUR</h2>
            </div>
            <div class="topic__content__rte">
                <p>Xe và hướng dẫn viên Vietravel đón Quý khách tại 190 Pasteur, Q.3, TP.HCM, khởi hành đến cửa khẩu Mộc Bài. Ăn sáng trên đường. Đến Mộc Bài, Quý khách làm thủ tục qua cửa khẩu. Xe và hướng dẫn viên địa phương đón đoàn và đưa đi dùng bữa trưa tại nhà hàng địa phương . Sau đó, Quý khách tiếp tục lên đường đi Siem Reap. Đến nơi, Quý khách về nhận phòng tại khách sạn 3 sao. Ăn tối và tự do nghỉ ngơi.</p>
                <strong>NGÀY 01: HỒ CHÍ MINH –  CAO NGUYÊN BOKOR (SÁNG, TRƯA, TỐI)</strong>
                <p>
                    5h00 sáng: Xe và hướng dẫn của Công ty đón khách tại điểm hẹn khởi hành đi <strong>Campuchia.</strong>
                    Dùng điểm tâm tại <strong>Trảng Bàng (đặc sản bánh canh giò heo).</strong> Đến cửa khẩu Mộc Bài làm thủ tục xuất nhập cảnh. Tiếp tục hành trình tới Thủ đô Phnom Penh.
                </p>
                <p>
                    - Buổi trưa: Đoàn dùng cơm trưa tại nhà hàng sau đó Tiếp tục hành trình chinh phục <strong>Cao Nguyên Bokor </strong>(độ cao 1080m so với mặt nước biển), với hệ thống đường uốn lượn tuyệt đẹp – từ đây có thể phóng tầm mắt nhìn toàn <strong>Vịnh Thailand và Đảo Phú Quốc</strong> (Việt Nam)…
                </p>
                <p>
                    - Sau đó tiếp tục hành trình đến với thiên đường <strong>Cao Nguyên Bokor.</strong>Đến Bokor đoàn nhận phòng nghỉ ngơi tại 
                    <strong>khách sạn Thansur Bokor Highland Resort 5 sao.</strong>
                </p>
                <p>Buổi tối: Đoàn dùng <strong>cơm tối tại khách sạn Thunsar Bokor 5 sao.</strong></p>
                <p>Quý khách tự do khám phá cao nguyên Bokor và thử vận may tại Casino.</p>
                <strong>NGÀY 02: BOKOR -  SIHANOUK VILLE - KOHRONG (SÁNG, TRƯA, TỐI)</strong>
                <p>Buổi sáng: Dùng bữa sáng buffet tại khách sạn. Làm thủ tục trả phòng.</p>
                <p>
                    Đoàn tham quan: nơi nghỉ và sinh hoạt của <strong>Vua Shihanouk </strong>từng đi săn bắn tại nơi đây, chụp hình <strong>Cung điện - Casino, Nhà Thờ Công Giáo </strong>do thực dân Pháp xây dựng những năm 1917. Đặc biệt viếng Chùa Năm Thuyền – nghe kể truyền thuyết của <strong>Hoàng Tử Preah Thom và Công chúa Thủy Cung Nagani </strong> – nơi khởi đầu của nền văn minh Khmer…
                </p>
                <p>Sau đó xe đưa đoàn đến thành phố biển <strong>Sau đó xe đưa đoàn đến thành phố biển </strong> Đến Shihanouk đoàn dùng cơm trưa.</p>
                <p>Sau đó xe đưa Quý khách ra cảng khởi hành đến vui chơi tại đảo <strong>Koh Rong Saloem,</strong> được mệnh danh là bãi biển đẹp nhất Đông Nam Á. Đến đây, Quý khách tự do tắm biển khám phá đảo Kohrong Saloem.</p>
                <p>16h00: Quý khách lên tàu về lại thành phố biển <strong>Shihanouk Ville.</strong>. Về khách sạn nhận phòng.</p>
                <p>Đoàn dùng cơm tối, sau đó tự do dạo biển ngắm nhìn những tia pháo hoa vụt sáng trên bầu trời hoặc lồng đèn được đốt sáng thả lên trời… Nghỉ đêm tại Sihanouk.</p>
                <strong>NGÀY 03: SHIHANOUK VILLE – PHNOM PENH (SÁNG, TRƯA, CHIỀU)</strong>
                <p>7:00 Dùng bữa sáng Buffet tại khách sạn. Làm thủ tục trả phòng.</p>
                <p>- Sau đó đoàn khởi hành về lại thủ đô Phnom Penh. Tham quan, mua sắm tại chợ Campot và khởi hành về Phnompenh.</p>
                <p>- Buổi trưa: Đoàn đến Phnom penh dùng cơm trưa. Sau đó về khách sạn nhận phòng nghỉ ngơi.</p>
                <p>Buổi chiều: Đoàn dùng bữa tối. Sau đó tham quan và thử vận may tại Casino Naga World 5 Sao sang trọng nhất Cambodia.Về khách sạn, tự do khám phá thủ đô Phnom Penh.</p>
                <strong>NGÀY 04: PHNOM PENH – HỒ CHÍ MINH (SÁNG, TRƯA)</strong>
                <p>7h00: Dùng bữa sáng Buffet tại khách sạn, làm thủ tục trả phòng. Sau đó, tham quan chợ Mới mua đặc sản Campuchia.</p>
                <p>Đoàn Khởi hành về lại Tp. Hồ Chí Minh. HDV Công Ty tiễn khách về điểm khởi hành ban đầu. Kết thúc tour, chia tay và hẹn gặp lại Quý khách.</p>
                <h6>Chính sách Tour</h6>
                <p><strong>1- Khách mua trực tiếp tại quầy:</strong><br>- Nhóm từ 1- 4 khách: được giảm ngay <strong> 200.000đ/khách</strong><br>- Nhóm từ 5- 8 khách: được giảm ngay <strong>300.000đ/khách</strong><br>- Nhóm trên 8 khách: được giảm ngay <strong>400.000đ/khách</strong></p>
                <p><strong>* Giá tour bao gồm:</strong><br>- Chi phí xe máy lạnh phục vụ theo chương trình. <br>- Chi phí khách sạn theo tiêu chuẩn 3 sao (2 khách/phòng, khách thứ 3 dùng extra bed hoặc phụ thu để ở phòng đơn)
                <br>- Chi phí ăn - uống theo chương trình. <br>- Chi phí Hướng dẫn viên tiếng Việt suốt tuyến.  <br>- Quà tặng: nón cao cấp, nước suối, khăn lạnh</p>
                <p><strong> * Giá tour không bao gồm:  </strong><br>- Chi phí visa nhập cảnh Campuchia, visa tái nhập Việt Nam - Trong trường hợp khách chỉ có visa một lần vào Việt Nam. <br>- Chi phí cá nhân - giặt ủi - điện thoại - chi phí phát sinh ngoài chương trình. <br>- Tiền bồi dưỡng cho hướng dẫn viên địa phương và tài xế (70.000đ/khách/ngày)</p>
                <strong>THÔNG TIN HƯỚNG DẪN</strong>
                <p><strong>* Vé trẻ em:  </strong><br>- Trẻ em dưới 2 tuổi: phụ thu 350.000đ phí xuất cảnh. <br>- Trẻ em từ 2 đến 6 tuổi: Tính 50% giá tour (Ngủ chung giường với bố mẹ). <br>- Trẻ em từ trên 6 đến 11 tuổi: Tính 75% giá tour (Ngủ chung giường với bố mẹ). <br>- Trẻ em trên 11 tuổi: Tính 100% giá tour. <br>- 100% Chi phí Visa nhập cảnh Campuchia và tái nhập VN (nếu có).                </p>
            </div>
        </div>
        <div class="tournb">
            <h3>TOUR NỔI BẬT</h3>
            <div class="tour__son"><a href=""><img src="https://bizweb.dktcdn.net/thumb/large/100/315/268/products/cam-hangluc4jpg.jpg?v=1536114542000" alt=""></a> <div class="tour__infor"> <h3><a href="" title="Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)" >Siem Reap -Phnom Penh (khách sạn 3*, tour tiết kiệm ) </a></h3> <span class="price">1.790.000đ </span> <span class="old__price">6.000.000đ</span>  </div> </div>
            <div class="tour__son"><a href=""><img src="https://res.cloudinary.com/dcweof28t/image/upload/v1677038330/web_tour/qn_oezbfx.gif" alt=""></a> <div class="tour__infor"> <h3><a href="" title="Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)">Siem Reap -Phnom Penh (khách sạn 3*, tour tiết kiệm ) </a></h3> <span class="price">1.790.000đ </span> <span class="old__price">6.000.000đ</span>  </div> </div>
            <div class="tour__son"><a href=""><img src="https://res.cloudinary.com/dcweof28t/image/upload/v1677038330/web_tour/qn4_beaydx.gif" alt=""></a> <div class="tour__infor"> <h3><a href="" title="Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)">Siem Reap -Phnom Penh (khách sạn 3*, tour tiết kiệm ) </a></h3> <span class="price">1.790.000đ </span> <span class="old__price">6.000.000đ</span>  </div> </div>
            <div class="tour__son"><a href=""><img src="https://res.cloudinary.com/dcweof28t/image/upload/v1677038328/web_tour/qn5_bmp0uo.jpg" alt=""></a> <div class="tour__infor"> <h3><a href="" title="Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)">Siem Reap -Phnom Penh (khách sạn 3*, tour tiết kiệm ) </a></h3> <span class="price">1.790.000đ </span> <span class="old__price">6.000.000đ</span>  </div> </div>
            <div class="tour__son"><a href=""><img src="https://res.cloudinary.com/dcweof28t/image/upload/v1677038328/web_tour/qn6_j9spxi.jpg" alt=""></a> <div class="tour__infor"> <h3><a href="" title="Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)">Siem Reap -Phnom Penh (khách sạn 3*, tour tiết kiệm ) </a></h3> <span class="price">1.790.000đ </span> <span class="old__price">6.000.000đ</span>  </div> </div>
            <div class="tour__son"><a href=""><img src="https://res.cloudinary.com/dcweof28t/image/upload/v1677038327/web_tour/qn2_cerycy.gif" alt=""></a> <div class="tour__infor"> <h3><a href="" title="Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)">Siem Reap -Phnom Penh (khách sạn 3*, tour tiết kiệm ) </a></h3> <span class="price">1.790.000đ </span> <span class="old__price">6.000.000đ</span>  </div> </div>
        </div>
    </div>

    <div class="tourcl">
        <div class="tourcl__head">
            <h3>Tour cùng loại</h3>
        </div>
        <div class="tourcl__father">
            <div class="tourcl__son"> <div class="img__"> <a href=""> <img src="https://res.cloudinary.com/dcweof28t/image/upload/v1677038327/web_tour/qn3_ibmeyq.jpg" alt="">   </a>
                <div class="chitiet"> <button title="Chi tiết " type="button" onclick=""> <span>Chi tiết</span></button></div> </div> <div class="tourcl__infor"> <h3><a href="" title="Chào hè du lịch Phan Thiết - Mũi Né 3 ngày (giá sốc)">Chào hè du lịch Phan Thiết - Mũi Né 3 ngày (giá sốc) </a></h3> <span class="price"> 2.000.000đ</span> <span class="old__price">5.000.000đ</span></div> 
       
        </div>
        <div class="tourcl__son"> <div class="img__"> <a href=""> <img src="https://res.cloudinary.com/dcweof28t/image/upload/v1677038527/web_tour/nb1_f4yg3j.jpg" alt="">   </a>
            <div class="chitiet"> <button title="Chi tiết " type="button" onclick=""> <span>Chi tiết</span></button></div> </div> <div class="tourcl__infor"> <h3><a href="" title="Chào hè du lịch Phan Thiết - Mũi Né 3 ngày (giá sốc)">Chào hè du lịch Phan Thiết - Mũi Né 3 ngày (giá sốc) </a></h3> <span class="price"> 2.000.000đ</span> <span class="old__price">5.000.000đ</span></div> 
   
    </div>
    <div class="tourcl__son"> <div class="img__"> <a href=""> <img src="https://bizweb.dktcdn.net/thumb/large/100/315/268/products/5ae28b3ca48a9319fe608337629845.jpg?v=1532329022793" alt="">   </a>
        <div class="chitiet"> <button title="Chi tiết " type="button" onclick=""> <span>Chi tiết</span></button></div> </div> <div class="tourcl__infor"> <h3><a href="" title="Chào hè du lịch Phan Thiết - Mũi Né 3 ngày (giá sốc)">Chào hè du lịch Phan Thiết - Mũi Né 3 ngày (giá sốc) </a></h3> <span class="price"> 2.000.000đ</span> <span class="old__price">5.000.000đ</span></div> 

</div>
        </div>
    </div>
    <div class="comment__container">
        <div class="comment__head"><h5>Bình luận</h5></div>
        <form action="" method="post">
           <div class="comment__bag">
            <div class="comment__avt">
                <img src="https://secure.gravatar.com/avatar/?s=56&d=mm&r=g" alt="avt">
            </div>
     <textarea id="comment" class="comment" name="comment" required></textarea>
           </div>
          <div class="information">
            <div class="name"> <label for="name">Name:</label><input type="text" id="name" name="name" required placeholder="Name"></div>
            <div class="email"><label for="email">Email:</label><input type="text" id="email" name="email" required placeholder="123abc@gmail.com"></div>
          </div>
        </form>
        
    </div>
    <?php include'./footer.php' ?>
    

</body>
</html>