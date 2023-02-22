# Chức năng tổng quát
## Quản trị
1. Trang Xem/Thêm/Sửa/Xóa hướng dẫn viên
   1. Thêm hướng dẫn viên
      1. Nhập thông tin hướng dẫn viên
      2. Lưu thông tin đã nhập
   2. Xem hướng dẫn viên
      1. Hiển thị thông tin của hướng dẫn viên (Chi tiết)
   3. Sửa thông tin hướng dẫn viên
      1. Hiển thị trang thêm hướng dẫn viên với các trường thông tin tương ứng
      2. Lưu thông tin đã sửa
   4. Xóa thông tin hướng dẫn viên
      1. Xóa thông tin hướng dẫn viên khỏi cơ sở dữ liệu
2. Trang Thêm/Xóa/Sửa Tour
   1. Thêm tour
      1. Tiêu đề tour
      2. Mức giá
      3. Lịch trình
      4. Số lượng
   2. Xóa tour
      1. Xóa tour khỏi cơ sở dữ liệu
    3. Sửa tour
       1. Hiển thị trang thêm tour với thông tin tương ứng
       2. Lưu thông tin đã sữa
3. Trang Xem đơn hàng
   1. Hiển thị những đơn hàng đã được đặt
   2. Có thể xóa đơn hàng
   3. Xuất hóa đơn cho từng đơn hàng
4. Trang Xem thông tin khách hàng
   1. Hiển thị danh sách khách hàng đã, đang đặt hàng
5. Trang Thêm bài viết giới thiệu
   1. Trang để viết bài giới thiệu tour/ địa điểm du lịch -> Thu hút khách truy cập trang web
   2. SEO
6. Trang Thống kê dữ liệu
   1. Thống kê đơn hàng theo ngày
   2. Thống kê đơn hàng theo tháng
   3. Thống kê đơn hàng theo năm
7. Trang thêm FAQ
   1. Hiển thị danh sách các câu hỏi thường gặp
   2. Thêm mới một câu hỏi

## Khách
1. Trang chủ
   1. Hiển thị một số tour đặc trưng
   2. Hiển thị một số điểm đến yêu thích
   3. Hiển thị một số tin tức du lịch
2. Trang tất cả tour du lịch
   1. Hiển thị 10 tour du lịch du lịch (Ấn nút xem thêm thì hiển thị thêm tour)
   2. Lọc tour theo yêu cầu
3. Trang chi tiết tour du lịch
   1. Hiển thị chi tiết 1 tour du lịch
   2. Hiển thị các tour có liên quan
   3. Có thể thêm vào giỏ hàng
   4. Có thể bình luận/ đánh giá về tour đó
4. Trang tất cả hướng dẫn viên
   1. Hiển thị 5 hướng dẫn viên (Ấn nút xem thêm thì hiển thị thêm hướng dẫn viên)
5. Trang giỏ hàng
   1. Hiển thị tất cả tour mà khách hàng đã đặt 
    2. Có thể xóa tour khỏi giỏ hàng
    3. Có thể chọn 1 hoặc nhiều tour và tiến hành thanh toán
6. Trang thanh toán
   1. Thu thập thông tin cá nhân của khách hàng phục vụ cho đơn hàng
   2. Chọn hướng dẫn viên mong muốn (Nếu không chọn thì chọn ngẫu nhiên)
7. Trang đăng ký
   1. Thu thập thông tin cá nhân của khách hàng
8. Trang FAQ + Liên hệ
   1. Hiển thị một số câu hỏi thường gập
   2. Hiển thị box chat trực tiếp (hoặc đặt câu hỏi riêng)

## Thành phần khác
1. Trang đăng nhập
   1. Đăng nhập phân quyền
2. Header
   1. Logo
   2. Tìm kiếm
   3. Đăng nhập/Đăng ký
   4. Giỏ hàng
3. Footer
   1. Thông tin trụ sở
   2. Phương thức thanh toán
   3. Địa điểm gợi ý
4. Item tour du lịch (Dùng ở trang chủ, trang chi tiết tour, trang tất cả tour)
   1. Nút xem chi tiết
   2. Hiển thị giá tiền 
   3. Mức giảm giá (nếu có)
5. Item hướng dẫn viên
   1. Tên hướng dẫn viên
   2. Kinh nghiệm làm việc
   3. Quê quán
   4. Giới thiệu
6. Thanh điều hướng (Trang admin)
   1. Khách hàng
   2. Hướng dẫn viên
      1. Xem hướng dẫn viên hiện có
      2. Thêm hướng dẫn viên
   3. Tour
      1. Xem tour hiện có (Hiển thị tiêu đề)
      2. Thêm tour mới
    4. Đơn hàng
    5. Bài viết
       1. Thêm bài viết
       2. Hiển thị bài viết đã có
    6. Thống kê
       1. Theo ngày
       2. Theo tháng
       3. Theo năm
    7. FAQ
       1. Xem câu hỏi
       2. Thêm câu hỏi

# Chi tiết chức năng
## Quản trị (Admin)
1. Trang Xem/Thêm/Sửa/Xóa hướng dẫn viên

| STT | Chức năng  | Mô tả | DL vào  | DL ra |
| ---- | --------- |-------| ------ | ----- |
| 1   | Xem hướng dẫn viên | Hiển thị danh sách hướng dẫn viên hiện có | N/A | Tên, Ngày sinh, CCCD, Quê quán, Giới thiệu,  |
| 2   | Thêm hướng dẫn viên | Nhập thông tin của hướng dẫn viên sau đó lưu vào csdl | Tên, Ngày sinh, CCCD, Quê quán, Giới thiệu,  | Thông tin được thêm và lưu vào csdl |
| 3   | Xóa hướng dẫn viên | Khi click vào nút xóa thì tiến hành xóa hướng dẫn viên đó khỏi csdl | ID hướng dẫn viên | N/A |
| 4   | Cập nhật hướng dẫn viên | Khi click vào nút sửa thì tiến hành chuyển đến form nhập thông tin với giá trị của các ô là thông tin được lấy ra từ csdl của hướng dẫn viên tương ứng. Sửa thông tin và cập nhật | ID hướng dẫn viên | Thông tin được cập nhật và lưu vào csdl |

2. Trang Thêm/Xóa/Sửa Tour

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Xem tour | Hiển thị danh sách các tour hiện có | N/A | Tiêu đề, Địa điểm, Mức giá, Số lượng |
| 2   | Thêm tour | Nhập thông tin của tour sau đó lưu vào csdl | Tiêu đề, Địa điểm, Mức giá, Số lượng | N/A |
| 3   | Xóa tour | Khi click vào nút xóa thì tiến hành xóa tour đó khỏi csdl | ID tour | N/A |
| 4   | Sửa tour | Khi click vào nút sửa thì tiến hành chuyển hướng đến form thêm tour với thông tin của các ô là giá trị được lấy ra từ csdl. Sửa thông tin tour đó và ấn cập nhật | ID tour | Thông tin đã được sửa và lưu vào csdl |

3. Trang Xem đơn hàng

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Xem đơn hàng | Hiển thị đơn hàng hiện có trong csdl mà chưa hoàn thành | N/A |  |
| 2   | Xóa đơn hàng | Khi click vào nút xóa thì tiến hành xóa đơn hàng đó khỏi csdl | ID đơn hàng | N/A |
| 3   | Xuất hóa đơn | Khi click vào nút xuất hóa đơn thì tiến hành xuất hóa đơn cho đơn hàng đó và cập nhật lại thời gian hoàn thành | ID đơn hàng | Hóa đơn, cập nhật ngày hoàn thành |

4. Trang Xem thông tin khách hàng

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Xem thông tin khách hàng | Hiển thị thông tin khách hàng | Tên, số điện thoại, tên đăng nhập, mật khẩu| N/A |
| 1   | Xóa khách hàng | Khi click vào nút xóa thì tiến hành xóa khách hàng đó khỏi csdl | ID khách hàng | N/A |
| 2   | Xem thông tin khách hàng | Khi click vào nút xem thì tiến hành chuyển đến trang xem thông tin khách hàng | ID khách hàng | Thông tin khách hàng |

5. Trang Thêm bài viết giới thiệu

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Xem bài viết | Hiển thị danh sách các bài viết hiện có | N/A | Tiêu đề, Nội dung, Ngày đăng |
| 2   | Thêm bài viết | Nhập thông tin của bài viết sau đó lưu vào csdl | Tiêu đề, Nội dung, Ngày đăng | N/A |
| 3   | Xóa bài viết | Khi click vào nút xóa thì tiến hành xóa bài viết đó khỏi csdl | ID bài viết | N/A |
| 4   | Sửa bài viết | Khi click vào nút sửa thì tiến hành chuyển hướng đến form thêm bài viết với thông tin của các ô là giá trị được lấy ra từ csdl. Sửa thông tin bài viết đó và ấn cập nhật | ID bài viết | Thông tin đã được sửa và lưu vào csdl |

6. Trang Thống kê dữ liệu

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Thống kê đơn hàng theo ngày | Hiển thị danh sách các đơn hàng theo ngày | N/A | Ngày, Số lượng đơn hàng, Tổng tiền |
| 2   | Thống kê đơn hàng theo tháng | Hiển thị danh sách các đơn hàng theo tháng | N/A | Tháng, Số lượng đơn hàng, Tổng tiền |
| 3   | Thống kê đơn hàng theo năm | Hiển thị danh sách các đơn hàng theo năm | N/A | Năm, Số lượng đơn hàng, Tổng tiền |

7. Trang thêm FAQ

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Xem câu hỏi | Hiển thị danh sách các câu hỏi hiện có | N/A | Câu hỏi, Câu trả lời |
| 2   | Thêm câu hỏi | Nhập thông tin của câu hỏi sau đó lưu vào csdl | Câu hỏi, Câu trả lời | N/A |
| 3   | Xóa câu hỏi | Khi click vào nút xóa thì tiến hành xóa câu hỏi đó khỏi csdl | ID câu hỏi | N/A |
| 4   | Sửa câu hỏi | Khi click vào nút sửa thì tiến hành chuyển hướng đến form thêm câu hỏi với thông tin của các ô là giá trị được lấy ra từ csdl. Sửa thông tin câu hỏi đó và ấn cập nhật | ID câu hỏi | Thông tin đã được sửa và lưu vào csdl |

## Khách
1. Trang chủ

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Hiển thị một số tour đặc trưng | Đề xuất một số tour | Tên tour | N/A |
| 2   | Hiển thị một số điểm đến yêu thích | Đề xuất một số điểm đến | Tên điểm đến | N/A |
| 3   | Hiển thị một số tin tức du lịch | Đề xuất một số tin tức | Tiêu đề, Nội dung, Ngày đăng | N/A |

2. Trang tất cả tour du lịch

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Hiển thị tour du lịch | Hiển thị 10 tour du lịch đầu tiên trong csdl | N/A | Tên tour, Giá tour, Điểm đến, Thời gian, Hình ảnh |
| 2   | Xem thêm | Hiển thị thêm 5 tour du lịch tiếp theo trong csdl. Nếu hết thì ẩn nút xem thêm | N/A | Tên tour, Giá tour, Điểm đến, Thời gian, Hình ảnh |
| 3   | Lọc tour | Lọc tour theo yêu cầu của người dùng | Điểm đến, Thời gian, Giá tour | Tên tour, Giá tour, Điểm đến, Thời gian, Hình ảnh |

3. Trang chi tiết tour du lịch

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Chi tiết tour | Hiển thị chi tiết tour du lịch | N/A | Tên tour, Giá tour, Điểm đến, Thời gian, Hình ảnh, Mô tả |
| 2   | Tour có liên quan | Hiển thị các tour có liên quan | N/A | Tên tour, Giá tour, Điểm đến, Thời gian, Hình ảnh |
| 3   | Thêm vào giỏ hàng | Thêm tour vào giỏ hàng | ID tour | N/A |
| 4   | Bình luận/ đánh giá | Khi người dùng bình luận/ đánh giá về tour thì lưu thông tin vào csdl | Bình luận/ Đánh giá, ID tour | N/A |

4. Trang tất cả hướng dẫn viên

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Hiển thị hướng dẫn viên | Hiển thị 5 hướng dẫn viên đầu tiên trong csdl | N/A | Tên hướng dẫn viên, Hình ảnh, Giới thiệu, Quê quán |
| 2   | Xem thêm | Hiển thị thêm 5 hướng dẫn viên tiếp theo trong csdl. Nếu hết thì ẩn nút xem thêm | N/A | Tên hướng dẫn viên, Hình ảnh, Giới thiệu, Quê quán |
| 3   | Lọc hướng dẫn viên | Lọc hướng dẫn viên theo yêu cầu của người dùng | Quê quán, Giới thiệu | Tên hướng dẫn viên, Hình ảnh, Giới thiệu, Quê quán |

5. Trang giỏ hàng

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Hiển thị giỏ hàng | Hiển thị tất cả tour mà khách hàng đã đặt | N/A | Tên tour, Giá tour, Điểm đến, Thời gian, Hình ảnh |
| 2   | Xóa tour | Xóa tour khỏi giỏ hàng | ID tour | N/A |
| 3   | Thanh toán | Tiến hành thanh toán | N/A | N/A |

6. Trang thanh toán

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Hiển thị thông tin tour | Hiển thị thông tin tour mà khách hàng đã đặt | N/A | Tên tour, Giá tour, Điểm đến, Thời gian, Hình ảnh |
| 2   | Hiển thị thông tin hướng dẫn viên | Hiển thị thông tin hướng dẫn viên mà khách hàng đã chọn | N/A | Tên hướng dẫn viên, Hình ảnh, Giới thiệu, Quê quán |
| 3   | Hiển thị thông tin khách hàng | Hiển thị thông tin khách hàng đã nhập | N/A | Họ tên, Số điện thoại, Email, Địa chỉ, CCCD |
| 4   | Thanh toán | Tiến hành thanh toán. Nếu đặt hàng thành công thì thông báo đã đặt hàng. Ngược lại thông báo lỗi | Thông tin đã nhập | Lưu vào csdl |

7. Trang đăng ký

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Đăng ký | Khi người dùng nhập đầy đủ thông tin và đúng định dạng thì lưu thông tin vào csdl. Ngược lại thông báo lỗi | Thông tin đã nhập | Lưu vào csdl (bảng người dùng) |

8. Trang FAQ + Liên hệ

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1   | Hiển thị câu hỏi | Hiển thị một số câu hỏi thường gặp. Khi ấn vào sẽ hiện ra câu trả lời tương ứng với câu hỏi | ID câu trả lời | Câu hỏi, Câu trả lời |
| 2   | Gửi câu hỏi | Gửi câu hỏi cho admin | Câu hỏi | N/A |
| 2   | Chat trực tiếp | Người dùng nhắn tin trực tiếp cho nhân viên và đượ phản hồi nhanh nhất có thể | Câu hỏi | Câu trả lời |


## Thành phần khác
1. Trang đăng nhập

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1 | Đăng nhập | Khi nhập đúng tài khoản và mật khẩu thì kiểm tra quyền truy cập của tài khoản đó, nếu là quyền admin thì chuyển hướng sang trang admin, nếu quyền truy cập người dùng phổ thông thì chuyển hướng về trang home với tình trạng đã đăng nhập. Ngược lại thì thông báo lỗi sai tài khoản hoặc mật khẩu | Tài khoản, mật khẩu | N/A |

2. Header

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1 | Logo | Khi click vào logo thì chuyển hướng đến trang home | N/A | N/A |
| 2 | Tìm kiếm | Khi nhập từ khóa vào nút tìm kiếm thì tìm với từ khóa đó và hiển thị popup những tour có liên quan. Nếu không tìm thấy thì hiển thị không có | Từ khóa | DS tour |
| 3 | Đăng nhập/Đăng ký | Khi click vào nút đăng nhập/đăng ký thì chuyển hướng đến trang đăng nhập/đăng ký | N/A | N/A |
| 4 | Giỏ hàng | Khi click vào nút giỏ hàng thì kiểm tra đã đăng nhập hay chưa, nếu rồi thì chuyển đến giỏ hàng của người dùng. Ngược lại thì chuyển đến trang đăng nhập| N/A | N/A|

3. Footer 

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1 | Địa điểm gợi ý | Khi click vào nút địa điểm gợi ý thì chuyển đến trang tất cả tour với bộ lọc là địa điểm gợi ý | N/A | N/A |

4. Item tour du lịch

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1 | Chuyển hướng đến trang chi tiết tour | Khi click vào nút chi tiết thì chuyển hướng đến trang chi tiết của tour tương ứng | N/A | N/A |

5. Item hướng dẫn viên

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1 | Hiển thị thông tin hướng dẫn viên | Khi rê chuột vào item thì mở popup hiển thị thông tin hướng dẫn viên tương ứng | ID hướng dẫn viên | Thông tin hướng dẫn viên |

6. Thanh điều hướng

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1 | Chuyển trang xem khách hàng | Khi click vào nút xem khách hàng thì chuyển đến trang xem khách hàng | N/A | N/A |
| 2 | Chuyển trang xem hướng dẫn viên | Khi click vào nút xem hướng dẫn viên thì chuyển đến trang xem hướng dẫn viên | N/A  | N/A |
| 3 | Chuyển trang thêm hướng dẫn viên | Khi click vào nút thêm hướng dẫn viên thì chuyển đến form thêm hướng dẫn viên | N/A | N/A |
| 4 | Chuyển trang xem tour | Khi click vào nút xem tour thì chuyển đến trang xem tour | N/A | N/A |
| 5 | Chuyển trang thêm tour | Khi click vào nút thêm tour thì chuyển đến form thêm tour | N/A | N/A |
| 6 | Chuyển trang xem đơn hàng | Khi click vào nút đơn hàng thì chuyển đến trang xem đơn hàng | N/A | N/A |
| 7 | Chuyển trang xem bài viết | Khi click vào nút xem bài viết thì chuyển đến trang xem bài viết đã có | N/A | N/A |
| 8 | Chuyển trang thêm bài viết mới | Khi click vào nút thêm bài viết mới thì chuyển đến form thêm bài viết mới | N/A | N/A |
| 9 | Chuyển trang thống kê | Khi click vào thì chuyển đến trang thống kê | N/A | N/A |

7. FAQ

| STT | Chức năng  | Mô tả | DL vào  | DL ra   |
| ----| --------- |-------| ------ | ----- |
| 1 | Chuyển trang xem câu hỏi | Khi click vào nút xem câu hỏi thì chuyển đến trang xem câu hỏi | N/A | N/A |
| 2 | Chuyển trang thêm câu hỏi | Khi click vào nút thêm câu hỏi thì chuyển đến form thêm câu hỏi | N/A | N/A |

# Cơ sở dữ liệu
1. Bảng các tour
   - ID tour: Kiểu số
   - Tiêu đề: Kiểu chuỗi
   - Hình ảnh: Kiểu chuỗi (Lưu ảnh trên cloud và lưu đường dẫn vào db)
   - Giá bán: Kiểu số
   - Mức giảm giá: Kiểu số (đơn vị %)
   - Số lượng: Kiểu số
   - Địa điểm: Kiểu chuỗi
2. Bảng hướng dẫn viên
   - ID hướng dẫn viên: kiểu số, tự tăng
   - Họ tên: Kiểu chuỗi
   - Ngày sinh: kiểu chuỗi
   - CCCD: kiểu chuỗi
   - Quê quán: Kiểu chuỗi
   - Hình ảnh: Kiểu chuỗi (Lưu ảnh trên 1 cloud và lưu link tại db)
   - Giới thiệu: Kiểu chuỗi
   - Ngày nhận việc: Kiểu datetime, lấy ngày tạo
3. Bảng đơn hàng
   - ID đơn hàng: Kiểu số (tự tăng)
   - ID tour: Kiểu số
   - ID hướng dẫn viên: Kiểu số
   - Tên người đặt: Kiểu chuỗi
   - Số điện thoại người đặt: Kiểu chuỗi
   - Căn cước công dân người đặt: Kiểu chuỗi
   - Ngày khởi hành: Kiểu date
4. Bảng bài viết
    - ID bài viết: Kiểu số, tự tăng
    - Tiêu đề: Kiểu chuỗi
    - Danh mục: Kiểu chuỗi
    - Nội dung: Kiểu chuỗi
5. Bảng admin
    - ID admin: Kiểu số (tự tăng)
    - Tên đăng nhập: Kiểu chuỗi
    - Mật khẩu: Kiểu chuỗi
6.  Bảng người dùng
    - ID người dùng: Kiểu số (tự tăng)
    - Tên đăng nhập: Kiểu chuỗi
    - Mật khẩu: Kiểu chuỗi
    - Tên người dùng: kiểu chuỗi
    - Số điện thoại: Kiểu chuỗi
7. Bảng đánh giá
    - ID bảng đánh giá: Kiểu số, tự tăng
    - ID tour: kiểu số
    - Lời đánh giá: Kiểu chuỗi
    - Ngày đánh giá: Kiểu date
8. FAQ
    - ID FAQ: kiểu số (tự tăng)
    - Câu hỏi: Kiểu chuỗi
    - Câu trả lời: Kiểu chuỗi