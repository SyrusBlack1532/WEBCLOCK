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
        <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
<body>
<?php include("header.php"); ?>
    <div class="app">
        <div class="container">
            <div class="grid">
                <div class="grid__row grid__content">
                    <div class="grid__column-2"> 
                        <img src="./assets/img/KH.png" alt="" class="info-img">
                        <h3 class="info-name">Tên KH</h3>
                    </div>
                    <div class="grid__column-10"> 
                        <div class="info-all">
                            <h2 class="info-heading1">Hồ sơ của tôi</h2>
                            <h4 class="info-heading2">Quản lý thông tin hồ sơ để bảo mật tài khoản</h4>
                        </hr>
                        
                        <div class="info-form">
                            <div class="info-item">
                                <h4 class="info grid__column-2-4">Tên đăng nhập</h4>
                                <input type="text" class="au-form__input" placeholder="UserName">
                            </div>
                            <div class="info-item">
                                <h4 class="info grid__column-2-4">Mật khẩu</h4>
                                <input type="password" class="au-form__input" placeholder="********">
                            </div>
                            <div class="info-item">
                                <h4 class="info grid__column-2-4">Tên khách hàng </h4>
                                <input type="text" class="au-form__input" placeholder="Tên KH">
                            </div>
                            <div class="info-item">
                                <h4 class="info grid__column-2-4">Email</h4>
                                <input type="email" class="au-form__input" placeholder="Lúc đăng ký á">
                            </div>
                            <div class="info-item">
                                <h4 class="info grid__column-2-4">Số diện thoại</h4>
                                <input type="number" class="au-form__input" placeholder="Lúc đăng ký á">
                            </div>
                            <div class="info-item">
                                <h4 class="info grid__column-2">Giới tính</h4>
                                <div class="pretty p-icon p-curve sex  p-tada">
                                    <input type="checkbox" />
                                    <div class="state p-success as">
                                      <i class="icon fa fa-check" aria-hidden="true"></i>
                                      <label> Nam</label>
                                    </div>
                                  </div>
                                  <div class="pretty p-icon p-curve  sex p-tada">
                                    <input type="checkbox" />
                                    <div class="state p-success as">
                                      <i class="icon fa fa-check" aria-hidden="true"></i>
                                      <label> Nữ</label>
                                    </div>
                                  </div>
                                  <div class="pretty p-icon p-curve sex  p-tada">
                                    <input type="checkbox" />
                                    <div class="state p-success as">
                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                      <label> Khác</label>
                                    </div>
                                  </div>
                            </div>
                            <div class="info-item">
                                <h4 class="info grid__column-2-4">Ngày sinh</h4>
                                <input type="date" class="au-form__input" >                               
                            </div>
                            <div class="form__controls info-but">
                                <div class="grid__column-40"></div>
                                <button class="btn" >TRỞ LẠI</button>
                                <button class="btn btn--buy">Lưu thông tin</button>
                            </div>
                            
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>