<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.0.0-web/css/all.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.leanhduc.pro.vn/utilities/animation/shake-effect/style.css" />
</head>

<body>
<?php include("header.php"); ?>
    <div class="app">
        


        <div class="container">
            <div class="grid">
                <div class="grid__row grid__content">
                    <div class="grid__column-8">
                        <div class="grid__column-50">
                            <div class="home-product-item-img"
                                style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2021/11/FS5835-399x399.jpg)">
                            </div>
                            
                        </div>
                        <div class="grid__column-50">
                            <h3 class="product-heading">SEIKO SSB343P1 – NAM – QUARTZ (PIN) – DÂY KIM LOẠI – MẶT SỐ 43MM</h3>

                            <h3 class="product-heading">Giá: 5.920.000 VND</h3>
                            <ul class="product-list">
                                <li class="product-info">Mã Số Sản Phẩm: SSB313P1</li>
                                <li class="product-info">Thương Hiệu: Seiko</li>
                                <li class="product-info">Xuất xứ: Nhật Bản</li>
                                <li class="product-info">Giới tính: Nam</li>
                                <li class="product-info">Bảo hàng:5 năm</li>
                                <li class="product-info">Kính: Hardlex Crystal</li>
                                <li class="product-info">Dây: Dây kim loại</li>
                                <li class="product-info">Đường kính: 45 mm</li>
                            </ul>
                            <p class="product-info">Đậm chất nam tính đến từ mẫu Seiko SSB313P1 với phiên bản vỏ máy cùng dây đeo kim loại bạc mang lại vẻ ngoài sang trọng đầy mạnh mẽ với kiểu dáng 6 kim kèm theo chức năng Chronograph.</p>
                            
                            <form id="add-to-cart-form" action="" method="POST" class="add-form">
                                <h2>Số lượng: <input type="text" value="1" name="" size="4" /><br/></h2>
                                
                                <div class="product-buy">
                                    <label for="buy-product" class="btn btn--buy label-buy">ĐẶT HÀNG</label>
                                    <input type="checkbox" hidden class="buy_product" name="" id="buy-product">
                                    <div class="modal">
                                        <label class="modal__overlay" for="buy-product"></label>
                                        <div class="modal__body">
                                        <div class="modal__inner">
                                            <div class="au-form">
                                                <div class="au-form__container">
                                                    <div class="au-form__header">
                                                        <h3 class="au-form__heading">Thông tin sản phẩm</h3>
                                                        
                                                    </div>
                                                    <div class="product_infor">
                                                        <div class="product_infor__gr">
                                                        <h4 class="product_infor__buy">Tên sản phẩm:</h4>
                                                        <h2>Casio</h2>
                                                        </div>
                                                        <div class="product_infor__gr">
                                                            <h4 class="product_infor__buy">Giá tiền:</h4>
                                                        </div>
                                                        <div class="product_infor__gr">
                                                            <h4 class="product_infor__buy">Số lượng:</h4>
                                                        </div>
                                                        <div class="product_infor__gr">
                                                            <h4 class="product_infor__buy">Tổng cộng:</h4>
                                                        </div>
                                                    </div><hr>
                                                    <div class="au-form__header">
                                                        <h3 class="au-form__heading">Đặt hàng</h3>
                                                        
                                                    </div>
                                                    <div class="au-form__form">
                                                        <div class="au-form__gr">
                                                            <input type="text" class="au-form__input" placeholder="Nhập họ tên khách hàng">
                                                        </div>
                                                        <div class="au-form__gr">
                                                            <input type="text" class="au-form__input" placeholder="Nhập số điện thoại">
                                                        </div>
                                                        <div class="au-form__gr">
                                                            <input type="text" class="au-form__input" placeholder="Nhập địa chỉ">
                                                        </div>
                                                        <div class="au-form__gr">
                                                            <input type="text" class="au-form__input" placeholder="Nhập email">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                
                                                    <div class="form__controls">
                                                        <button class="btn" >TRỞ LẠI</button>
                                                        <button class="btn btn--buy">ĐẶT HÀNG</button>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!------------------------------Footer-------------------------------------------------------------->
    <?php include("footer.php"); ?>

    </div>

</body>

</html>