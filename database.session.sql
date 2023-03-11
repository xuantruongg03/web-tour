use web_tour;

-- Tạo bảng các tour 
CREATE TABLE tours (
    tour_id INT NOT NULL PRIMARY KEY, 
    tour_title VARCHAR(400) NOT NULL, 
    tour_reviews text not null,
    tour_price INT NOT NULL, 
    tour_discount_rate INT NOT NULL, 
    tour_quantity INT NOT NULL, 
    tour_place VARCHAR(300) NOT NULL, --địa điểm tour (Hà Nội, Hồ Chí Minh, Đà Nẵng, ...)
    tour_region VARCHAR(300) NOT NULL, --vùng miền tour (miền bắc, miền trung, miền nam)
    tour_type VARCHAR(50) NOT NULL, --loại tour (du lịch biển, du lịch mạo hiểm, du lịch thông thường),
    tour_times VARCHAR(50) NOT NULL, --thời gian tour (3 ngày 2 đêm, Trong ngày, ...)
);

INSERT INTO tours (tour_id, tour_title, tour_reviews, tour_price, tour_discount_rate, tour_quantity, tour_place, tour_type, tour_region, tour_times) VALUE 
(1, 'Tour Xe Lửa Quy Nhơn 3N4Đ: KDL Hầm Hô - Kỳ Co - Eo Gió - Chùa Ông Núi', '<p lang="en-US" link="#0000ff" vlink="#800000" dir="ltr"> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Quê hương xứ Nẫu Quy Nhơn</font> </font> </font> </h3> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Xứ Nẫu hay Quy Nhơn (Bình Định) được thiên nhiên ban tặng phong cảnh nên thơ, hữu tình và những bãi biển trải dài tuyệt đẹp. Quy Nhơn hội tụ đầy đủ các yếu tố của một điểm nghĩ dưỡng hàng đầu với những bãi biển trong xanh, các khu resorts đẳng cấp quốc tế, ẩm thực đặc sắc cùng với các danh lam thắng cảnh như Kỳ Co - Eo Gió được ví như Maldives phiên bản Việt, chùa ông Núi với tượng phật lớn nhất Đông Nam Á hay Tháp Đôi - một kiến trúc Champa độc đáo được xây dựng từ thế kỷ 12.</font> </font> </font> </font> </p> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font color="#3f3b3b">&nbsp;</font> </p> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Những trải nghiệm thú vị trong chương trình</font> </font> </font> </h3> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Khu du lịch Ghềnh Ráng:</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">&nbsp;kết hợp hài hòa giữa trời, mây, non nước, một bên là biển mênh mông, một bên là núi đá muôn hình vạn trạng. Từ đây du khách có thể ngắm nhìn gần trọn hết vẻ đẹp đầy sức sống của phố biển Quy Nhơn.</font> </font> </font> </font> </p> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Bãi tắm Kỳ Co:</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">&nbsp;Với&nbsp;dải cát vàng ôm lấy biển, bọc thành một hình cung, mềm mại như dải lụa uốn lượn, ôm trọn lấy làn nước trong xanh tận đáy. Nơi này được ví như là Maldives của Việt Nam.</font> </font> </font> </font> </p> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Khu Du Lịch Hầm Hô</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">&nbsp;hoà mình vào thiên nhiên giữa khung cảnh núi non và sông suối hùng vỹ, tận hưởng không khí trong lành.&nbsp;</font> </font> </font> </font> </p> <p style="line-height: 108%; margin-bottom: 0.11in"><br /> <br /> </p> </p>', 3650000, 0, 10, 'Quy Nhơn', 'Du lịch biển', 'Miền Trung', '3 ngày 4 đêm'),
(2, 'Tour Ninh Bình 1N : Hà Nội - Bái Đính - Tràng An', '<p lang="en-US" link="#0000ff" vlink="#800000" dir="ltr"> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Khám phá Ninh Bình vùng đất Cố đô cùng khung cảnh nên thơ hữu tình</font> </font> </font> </h3> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Ninh Bình với nhiều danh thắng đẹp cả về cảnh quan và ý nghĩa lịch sử, đã trở thành điểm đến được nhiều du khách lựa chọn. Nói nơi đây là 1 Việt Nam thu nhỏ quả không sai bởi nó hòa quyện toàn bộ đặc trưng văn hóa, thiên nhiên và lịch sử. Cùng iVIVU khám phá điểm đặc trưng này, tại sao không? Cùng iVIVU khám phá ngay hôm nay!</font> </font> </font> </font> </p> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Những trải nghiệm thú vị trong chương trình</font> </font> </font> </h3> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Chùa Bái Đính</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">: Ngôi chùa lớn nhất và nắm giữ nhiều kỷ lục nhất Việt Nam.</font> </font> </font> </font> </p> <p align="justify" style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Khu Du Lịch Sinh Thái Tràng An</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">: Phong cảnh thiên nhiên hoang sơ, tuyệt đẹp của Tràng An đã được UNESCO công nhận là di sản thiên nhiên và di sản văn hóa thế giới. Khung cảnh nơi đây được tạo nên từ dòng sông chạy uốn lượn qua các dãy núi đá vôi, tạo thành vô vàn những hang động tự nhiên huyền ảo, kỳ bí.</font> </font> </font> </font> </p> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Bạn có sẵn sàng</font> </font> </font> </h3> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Khám phá chùa Bái Đính có thể đi bộ nhiều nên quý khách chuẩn bị giày đế bằng, thấp và thoải mái, dù (ô) hoặc nón.</font> </font> </font> </font> </p> <p style="line-height: 108%; margin-bottom: 0.11in"><br /> <br /> </p> </p>', 700000, 0, 10, 'Ninh Bình', 'Du lịch thông thường', 'Miền Bắc', 'Trong ngày'),
(3, 'Trải Nghiệm Du Lịch Mạo Hiểm Đỉnh Cao: Chinh Phục Hang Sụt Sâu Nhất Hành Tinh', '<p lang="en-US" link="#0000ff" vlink="#800000" dir="ltr"> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Chinh Phục Kong Collapse - Hố Sụt Sâu Nhất Hành Tinh</font> </font> </font> </h3> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Bạn là người ưa thích du lịch mạo hiểm, yêu thiên nhiên hay muốn thử thách bản thân? Đây có thể là trải nghiệm mà bạn đang tìm kiếm, một hành trình chỉ dành cho những người thực sự đam mê khám phá và muốn chinh phục những thử thách cực đại để có được những trải nghiệm để đời, bức phá&nbsp;giới hạn của bản thân. Cùng iVIVU khám phá những hang động và cánh rừng nguyên sinh tuyệt đẹp tại vùng lõi của Di sản thiên nhiên thế giới Vườn quốc gia Phong Nha – Kẻ Bàng và các khu vực lân cận.&nbsp;Chinh phục&nbsp;hang Pygmy, hang động lớn thứ&nbsp;tư thế giới và khám phá Kong Collapse - một trong những hố sụt sâu nhất hành tinh với trải nghiệm đu dây 100m đầy thách thức!&nbsp;</font> </font> </font> </font> </p> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Những trải nghiệm thú vị trong chương trình</font> </font> </font> </h3> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">- Trở thành một trong những người đầu tiên khám phá hố sụt Kong với trải nghiệm đu dây từ độ cao 100m,&nbsp;một trong những hố sụt sâu nhất hành tinh với độ sâu hơn 450m.</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;Kết hợp tuyệt vời các trải nghiệm như đi bộ giữa rừng nguyên sinh, leo trèo qua các tảng đá, bơi trong hang tối, cắm trại trong hang và đặc biệt là hoạt động đu dây khám phá hang động.</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;Hang Pygmy được đánh giá là hang động lớn thứ tư thế giới với vòm hang rộng và cao 100m</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">- Xây dựng kỹ năng khám phá hang động và các kỹ năng an toàn.</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font color="#3f3b3b">&nbsp;</font> </p> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Bạn có sẵn sàng</font> </font> </font> </h3> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Tour khám phá không thích hợp với du khách có tiền sử các bệnh về tim mạch, huyết áp cao, hen suyễn,các bệnh về xương khớp và du khách có triệu chứng sợ độ cao và bóng tối . Du khách sẽ thực hiện trả lời một số câu hỏi liên quan đến sức khỏe và được đội ngũ chuyên gia y tế của&nbsp;công ty&nbsp;kiểm tra sức khỏe trước khi tour khởi hành</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Cung đường bao gồm:</font> </font> </b></font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Đi bộ: 23 km</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Khám phá hang động: 7 km</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Đu dây: 100 m</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Bơi 300 m&nbsp;</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Cấp độ mạo hiểm: cực kỳ khó</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Độ tuổi: từ 16 đến 65</font> </font> </font> </font> </p> <p style="line-height: 108%; margin-bottom: 0.11in"><br /> <br /> </p> </p>', 35000000, 0, 10, 'Hang Sụt', 'Du lịch mạo hiểm', 'Miền Bắc', 'Trong ngày'),
(4, 'Tour Đà Nẵng 1N: Bà Nà Hill - Đường Lên Tiên Cảnh', '<p lang="en-US" link="#0000ff" vlink="#800000" dir="ltr"> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Châu Âu Thu Nhỏ</font> </font> </font> </h3> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Bà Nà Hills được biết đến là một trong những địa điểm nổi tiếng bậc nhất tại Việt Nam mà bất kỳ du khách nào cũng không thể bỏ qua. Nơi này được ví von như chốn ‘’tiên cảnh’’, như một ‘’châu Âu thu nhỏ trong lòng thành phố’’ với những công trình kiến trúc cổ đẹp ma mị, những trò chơi giải trí cực kỳ hấp dẫn hay cả một vườn hoa thơm ngát ngào ngạt chờ đón du khách đến chụp hình. Cùng iVIVU khám phá ngay hôm nay!&nbsp;</font> </font> </font> </font> </p> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Những trải nghiệm thú vị trong chương trình</font> </font> </font> </h3> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Bà Nà được ví von như Đà Lạt của miền trung hay ‘’lá phổi xanh’’, ‘’hòn ngọc khí hậu’’ của Việt Nam</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Fantasy</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">&nbsp;chia làm 3 tầng với hàng ngàn trò chơi từ nhẹ nhàng tới mạo hiểm với tổng số hơn 90 trò chơi miễn phí như phi công Skiver, tháp rơi tự do, công viên kỷ Jura, ngôi nhà ma ám, đua xe Outrun, cối xay gió, khu rừng thần tiên, vòng đua tử thần 4D,…</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;Đến với&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">ngôi làng Pháp</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">, các bạn sẽ được trải nghiệm một nước Pháp đầy lãng mạn và cổ điển với dấu ấn phong cách từ thế kỷ thứ 20 với những công trình kiến trúc độc đáo như hàng loạt lâu đài lãng mạn, Thánh đường St Denis, Brittany, ngôi làng nhỏ nhắn Apremont sur Allier, quảng trường, khách sạn, làng mạc, thị trấn…</font> </font> </font> </font> </p> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">-&nbsp;</font> </font><b> <font color="#3f3b3b"> <font face="Helvetica, serif">Cây cầu Vàng</font> </font> </b> <font color="#3f3b3b"> <font face="Helvetica, serif">&nbsp;đã trở thành một hiện tượng thu hút sự chú ý của đông đảo người đam mê du lịch trong nước cũng như quốc tế.</font> </font> </font> </font> </p> <h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.1in; background: #ffffff"> <font color="#003c71"> <font face="Helvetica, serif"> <font size="5" style="font-size: 19pt">Bạn có sẵn sàng</font> </font> </font> </h3> <p style="line-height: 100%; margin-bottom: 0.1in; background: #ffffff"> <font face="Times New Roman, serif"> <font size="3" style="font-size: 12pt"> <font color="#3f3b3b"> <font face="Helvetica, serif">Khám phá Bà Nà&nbsp;có thể đi bộ nhiều nên quý khách chuẩn bị giày đế bằng, thấp và thoải mái, dù (ô) hoặc nón.</font> </font> </font> </font> </p> <p style="line-height: 108%; margin-bottom: 0.11in"><br /> <br /> </p> </p>', 1390000, 0, 10, 'Đà Nẵng', 'Du lịch thông thường', 'Miền Trung', 'Trong ngày'),

-- Mẫu
--(id theo thứ tự, tên tour, review (code html), giá, giảm giá (%), số lượng, địa điểm (Quy Nhơn, Đà Nẵng, ...), Loại tour (Nghỉ dưỡng, Du lịch, Mạo hiểm, ...), Vùng miền (Miền Bắc, Miền Trung, Miền Nam, ...), Thời gian (1 ngày, 2 ngày, 3 ngày, ...))

-- Tạo bảng ảnh các tour
CREATE TABLE tour_images (
    tour_image_id INT NOT NULL PRIMARY KEY, 
    tour_id INT NOT NULL, 
    tour_image VARCHAR(500) NOT NULL,
    FOREIGN KEY (tour_id) REFERENCES tours(tour_id)
);
-- Mẫu
-- (id theo thứ tự, id tour, link ảnh)

--Insert dữ liệu vào bảng tour_images
INSERT INTO tour_images (tour_image_id, tour_id, tour_image) VALUE 
(1, 1, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038330/web_tour/qn_oezbfx.gif'),
(2, 1, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038330/web_tour/qn4_beaydx.gif'),
(3, 1, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038328/web_tour/qn5_bmp0uo.jpg'),
(4, 1, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038328/web_tour/qn6_j9spxi.jpg'),
(5, 1, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038327/web_tour/qn2_cerycy.gif'),
(6, 1, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038327/web_tour/qn3_ibmeyq.jpg'),
(7, 2, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038527/web_tour/nb1_f4yg3j.jpg'),
(8, 2, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038528/web_tour/nb2_mqd5hp.jpg'),
(9, 3, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038919/web_tour/hs2_jwwwgj.gif'),
(10, 3, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038919/web_tour/hs3_pdngyb.gif'),
(11, 3, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038920/web_tour/hs6_wdsysq.gif'),
(12, 3, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038920/web_tour/hs5_svyf3l.gif'),
(13, 3, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038919/web_tour/hs4_agiidp.gif'),
(14, 3, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677038919/web_tour/hs1_a3lnhh.gif'),
(15, 4, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677039286/web_tour/dn5_vj9awa.jpg'),
(16, 4, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677039287/web_tour/dn4_s1nnaw.gif'),
(17, 4, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677039288/web_tour/dn6_fzmqqh.gif'),
(18, 4, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677039288/web_tour/dn1_huijgu.gif'),
(19, 4, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677039288/web_tour/dn2_z4k7zo.gif'),
(20, 4, 'https://res.cloudinary.com/dcweof28t/image/upload/v1677039288/web_tour/dn3_c86xju.gif'),

-- Tạo bảng đơn hàng  
CREATE TABLE orders (
    order_id INT NOT NULL PRIMARY KEY, 
    tour_id INT NOT NULL , 
    order_name VARCHAR(100) NOT NULL, 
    order_phone VARCHAR(50) NOT NULL, 
    order_citizen_id VARCHAR(30) NOT NULL,
    order_date DATE NOT NULL,
    order_quantity_person INT NOT NULL,
    order_total_price FLOAT(20, 5) NOT NULL,
    order_status VARCHAR(50) NOT NULL,
    FOREIGN KEY (tour_id) REFERENCES tours(tour_id)
);

-- Tạo bảng FAQ
CREATE TABLE faq (
    faq_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    faq_question VARCHAR(400) NOT NULL,
    faq_answer VARCHAR(900) NOT NULL
);

CREATE TABLE users (
    user_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    user_email VARCHAR(100) NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    user_phone VARCHAR(50) NOT NULL,
    user_address VARCHAR(300) NOT NULL,
    user_citizen_id VARCHAR(30) NOT NULL,
    user_role VARCHAR(50) NOT NULL
);

CREATE TABLE comments (
    comment_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tour_id INT NOT NULL,
    comment_content VARCHAR(500) NOT NULL,
    comment_date DATE NOT NULL,
    FOREIGN KEY (tour_id) REFERENCES tours(tour_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

INSERT INTO comments (comment_id, tour_id, comment_content, comment_date) VALUE 
(1, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(2, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(3, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(4, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(5, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(6, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(7, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(8, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(9, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(10, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(11, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(12, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(13, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(14, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(15, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(16, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(17, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(18, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(19, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(20, 1, 'Tour rất hay, đáng để tham gia', now DATE()),
(21, 1, 'Tour rất hay, đáng để tham gia', now DATE())

INSERT INTO orders (order_id, tour_id, order_name, order_phone, order_citizen_id, order_date, order_quantity_person, order_total_price, order_status) VALUE 
(1, 1, 'Nguyễn Văn Giàu', '0988888888', '123456', now DATE(), 2, 10000000, 'Chờ xử lý'),
(2, 4, 'Nguyễn Văn Nghèo', '0988796425', '456789', now DATE(), 4, 20000000, 'Chờ xử lý'),
(3, 6, 'Lê Thị Ít Tiền', '0987777778', '789123', now DATE(), 2, 50000000, 'Chờ xử lý'),

INSERT INTO faq (faq_question, faq_answer) VALUE 
('Có thể hủy tour không?', 'Có thể hủy tour trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi ngày đi không?', 'Có thể thay đổi ngày đi trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi số lượng người đi không?', 'Có thể thay đổi số lượng người đi trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi thông tin cá nhân không?', 'Có thể thay đổi thông tin cá nhân trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi tour không?', 'Có thể thay đổi tour trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi phương tiện đi không?', 'Có thể thay đổi phương tiện đi trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi phương tiện về không?', 'Có thể thay đổi phương tiện về trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi địa điểm khởi hành không?', 'Có thể thay đổi địa điểm khởi hành trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi địa điểm kết thúc không?', 'Có thể thay đổi địa điểm kết thúc trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi thời gian đi không?', 'Có thể thay đổi thời gian đi trong vòng 24h sau khi đặt tour'),
('Có thể thay đổi thời gian về không?', 'Có thể thay đổi thời gian về trong vòng 24h sau khi đặt tour')