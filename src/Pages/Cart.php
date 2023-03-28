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

            /* html,
            body {
                margin: 0;
                padding: 0;
                font-size: 14px;
                font-family: Arial, Helvetica, sans-serif;
            } */

            .btn-list li a {

                background-color: #0e2a35;
                border-radius: 4px;
                color: #fff;
                display: inline-block;
                text-decoration: none;
                transition: 0.3s
            }

            .btn-list li a:hover {
                background-color: #00aeef;
            }
        </style>
    </head>

    <body>
    <?php include '../Components/Header/Header.php'; ?>
        <div class="cart " style="margin:100px 190px; width: 1150px;">
            <h4 class="title">Giỏ hàng</h4>
            <div style="justify-content: space-between; width: 100%;">
                <table class="table" style="width: 1150px; border: 1px solid #171617; border-radius: 4px;">

                    <tr style="background-color: #154054; height: 50px;">
                        <th class="item">Xóa</th>
                        <th class="item">Ảnh Tour</th>
                        <th class="item">Tên Tour</th>
                        <th class="item">Giá</th>
                        <th class="item">Số Lượng</th>
                        <th class="item">Thành Tiền</th>
                    </tr>

                    <div>
                        <tr>
                            <th class="item--content" id="item--xoa"><i class="fa-solid fa-xmark"></i></th>
                            <th class="item--content 4"><img style="height: 90px;" id="item--img" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/268/products/jed1367636408.jpg?v=1532329024767" alt=""></th>
                            <th class="item--content" id="item--ten">Miền Tây - Đồng Tháp - Tràm Chim - Thiền Viện Trúc Lâm Chánh Giác</th>
                            <th class="item--content" id="item--gia">6.400.000₫</th>
                            <th class="item--content" id="item--sl">1</th>
                            <th class="item--content" id="item--thanhtien">6.400.000₫</th>
                        </tr>
                    </div>
                    <div>
                        <tr>
                            <th class="item--content" id="item--xoa"><i class="fa-solid fa-xmark"></i></th>
                            <th class="item--content 4"><img style="height: 90px;" id="item--img" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/268/products/jed1367636408.jpg?v=1532329024767" alt=""></th>
                            <th class="item--content" id="item--ten">Miền Tây - Đồng Tháp - Tràm Chim - Thiền Viện Trúc Lâm Chánh Giác</th>
                            <th class="item--content" id="item--gia">6.400.000₫</th>
                            <th class="item--content" id="item--sl">1</th>
                            <th class="item--content" id="item--thanhtien">6.400.000₫</th>
                        </tr>
                    </div>
                    <div>
                        <tr>
                            <th class="item--content" id="item--xoa"><i class="fa-solid fa-xmark"></i></th>
                            <th class="item--content 4"><img style="height: 90px;" id="item--img" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/268/products/jed1367636408.jpg?v=1532329024767" alt=""></th>
                            <th class="item--content" id="item--ten">Miền Tây - Đồng Tháp - Tràm Chim - Thiền Viện Trúc Lâm Chánh Giác</th>
                            <th class="item--content" id="item--gia">6.400.000₫</th>
                            <th class="item--content" id="item--sl">1</th>
                            <th class="item--content" id="item--thanhtien">6.400.000₫</th>
                        </tr>
                    </div>
                    <div>
                        <tr>
                            <th class="item--content" id="item--xoa"><i class="fa-solid fa-xmark"></i></th>
                            <th class="item--content 4"><img style="height: 90px;" id="item--img" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/268/products/jed1367636408.jpg?v=1532329024767" alt=""></th>
                            <th class="item--content" id="item--ten">Miền Tây - Đồng Tháp - Tràm Chim - Thiền Viện Trúc Lâm Chánh Giác</th>
                            <th class="item--content" id="item--gia">6.400.000₫</th>
                            <th class="item--content" id="item--sl">1</th>
                            <th class="item--content" id="item--thanhtien">6.400.000₫</th>
                        </tr>
                    </div>
                </table>
            </div>
            <div style="display: flex; justify-content: space-between; margin:100px auto;">
                <div class="button--next">
                    <ul class="btn-list">
                        <li><a href="./">Tiếp Tục Đặt Tour</a></li>
                    </ul>
                </div>
                <div style="width: 460px; height: 150px;">

                    <div style=" height: 85px;">
                        <div style="display: flex ;justify-content:space-between;border: 0.5px solid #171617; height: 50%;">
                            <div>Tổng giá tour</div>
                            <div style="display: flex ;justify-content:space-between;border-left: 0.5px solid #171617; ">6.400.000₫</div>
                        </div>
                        <div style="display: flex ;justify-content:space-between;border: 0.5px solid #171617; height: 50%;">
                            <div>TỔNG TIỀN THANH TOÁN</div>
                            <div style="display: flex ;justify-content:space-between;border-left: 0.5px solid #171617; ">6.400.000₫</div>
                        </div>
                    </div>

                    <div style="margin-top: 8px;">
                        <ul class="btn-list">
                            <li><a style="width: 100%;" href="./">THANH TOÁN NGAY</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <?php include '../Components/Footer/Footer.php'; ?>
    </body>

    </html>