<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <table>
                    <tr class="cart-heading">
                        <th class="product-number">STT</th>
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-img">Ảnh sản phẩm</th>
                        <th class="product-price">Đơn giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="total-money">Thành tiền</th> 
                        <th class="">Xóa sản phẩm</th>                      
                    </tr>
                    <tr class="cart-product">
                        <td class="product-number">1</td>
                        <td class="product-name">Seiko SSB</td>
                        <td class="product-img"><img src="./assets/img/seiko ssb.jpg" alt=""></td>
                        <td class="product-price">2.700.000</td>
                        <td class="product-quantity">1</td>
                        <td class="total-money">2.700.000</td> 
                        <td><button class="btn btn--order">Xóa</button></td>
                    </tr>
                    <tr class="cart-product">
                        <td class="product-number">1</td>
                        <td class="product-name">Seiko SSB</td>
                        <td class="product-img"><img src="./assets/img/seiko ssb.jpg" alt=""></td>
                        <td class="product-price">2.700.000</td>
                        <td class="product-quantity">1</td>
                        <td class="total-money">2.700.000</td> 
                        <td><button class="btn btn--order">Xóa</button></td>
                    </tr>
                    <tr class="cart-product">
                        <td class="product-number">1</td>
                        <td class="product-name">Seiko SSB</td>
                        <td class="product-img"><img src="./assets/img/seiko ssb.jpg" alt=""></td>
                        <td class="product-price">2.700.000</td>
                        <td class="product-quantity">1</td>
                        <td class="total-money">2.700.000</td> 
                        <td><button class="btn btn--order">Xóa</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>