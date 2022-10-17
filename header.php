

    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <!--Navbar trái + QR------------------------------------------------------------------------------------>
                        <li class="header__navbar-item header__navbar-item-qr header__navbar-item--separate">
                            Vào cửa hàng trên ứng dụng
                            <div class="header__qr">
                                <img src="./assets/img/image-qr.png" alt="QR code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="" class="header__qr-link"><img src="./assets/img/app.png" alt="Google Play" class="header__qr-download"></a>
                                    <a href="" class="header__qr-link"><img src="./assets/img/gg.png" alt="App Store" class="header__qr-download"></a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title ">Kết nối</span>
                            <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fa-brands fa-facebook-f"></i></a>
                            <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fa-brands fa-tiktok"></i></a>
                            <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fa-solid fa-envelope"></i></a>
                        </li>

                    </ul>
                    <!--Navbar phải + khung thông báo------------------------------------------------------------------------------------>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item-hover">
                            <a href="" class="header__navbar-item-link"> <i class="header__navbar-icon fa-solid fa-bell rung"></i>Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify_header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify_list">
                                    <li class="header__notify-item ">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/uudai.jpg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Siêu ưu đãi</span>
                                                <span class="header__notify-name2">Ưu đãi cực lớn cho khách hàng vào
                                                    ngày </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <!------------------Trợ giúp--------------------------->
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-circle-question"></i>Trợ giúp
                            </a>
                        </li>
                        <!------------------Đăng nhập--------------------------->
                        <li class="header__navbar-item header__navbar-item-bold ">
                            <label for="login-input">Đăng nhập</label>
                            <input type="checkbox" hidden class="login_input" name="" id="login-input">
                            <div class="modal">
                                <label for="login-input" class="modal__overlay"></label>
                                <div class="modal__body">
                                    <div class="modal__inner">
                                        <div class="au-form">
                                            <div class="au-form__container">
                                                <div class="au-form__header">
                                                    <h3 class="au-form__heading">Đăng nhập</h3>

                                                </div>
                                                <div class="au-form__form">
                                                    <div class="au-form__gr">
                                                        <input type="text" class="au-form__input" placeholder="Nhập số điện thoại">
                                                    </div>
                                                    <div class="au-form__gr">
                                                        <input type="password" class="au-form__input" placeholder="Nhập mật khẩu">
                                                    </div>
                                                </div>

                                                <div class="au-form__aside">
                                                    <div class="au-form__help">

                                                        <label class="au-form__help-link au-form__help-forgot" for="fogot-pass">Quên mật khẩu</label>
                                                        <input type="checkbox" hidden class="fogot_pass" name="" id="fogot-pass">
                                                        <div class="modal">
                                                            <label class="modal__overlay" for="fogot-pass"></label>
                                                            <div class="modal__body">
                                                                <div class="modal__inner">
                                                                    <div class="au-form">
                                                                        <div class="au-form__container">
                                                                            <div class="au-form__header">
                                                                                <h3 class="au-form__heading">Quên mật khẩu</h3>
                                                                                
                                                                            </div>
                                                                            <div class="au-form__form">
                                                                                <div class="au-form__gr">
                                                                                    <input type="text" class="au-form__input" placeholder="Nhập số điện thoại">
                                                                                </div>
                                                                                <div class="au-form__gr">
                                                                                    <input type="password" class="au-form__input" placeholder="Nhập mật khẩu mới">
                                                                                </div>
                                                                                <div class="au-form__gr">
                                                                                    <input type="password-again" class="au-form__input" placeholder="Nhập lại mật khẩu">
                                                                                </div>
                                                                            </div>



                                                                            <div class="au-form__controls">
                                                                                <button class="btn">TRỞ LẠI</button>
                                                                                <button class="btn btn--buy">LƯU LẠI</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="au-form__help-separate"></span>
                                                        <a href="" class="au-form__help-link">Cần trợ giúp ?</a>
                                                    </div>
                                                </div>

                                                <div class="au-form__controls">
                                                <button class="btn">TRỞ LẠI</button>                  
                                                    <button class="btn btn--buy">ĐĂNG NHẬP</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!------------------Đăng ký--------------------------->
                        <li class="header__navbar-item header__navbar-item-bold ">
                            <label for="create-input">Đăng ký</label>
                            <input type="checkbox" hidden class="create_input" name="" id="create-input">
                            <div class="modal">
                                <label for="create-input" class="modal__overlay"></label>
                                <div class="modal__body">
                                    <div class="modal__inner">

                                        <div class="au-form">
                                            <div class="au-form__container">
                                                <div class="au-form__header">
                                                    <h3 class="au-form__heading">Đăng ký</h3>

                                                </div>

                                                <div class="au-form__form">
                                                    <div class="au-form__gr">
                                                        <input type="text" class="au-form__input" placeholder="Nhập số điện thoại">
                                                    </div>
                                                    <div class="au-form__gr">
                                                        <input type="password" class="au-form__input" placeholder="Nhập mật khẩu">
                                                    </div>
                                                    <div class="au-form__gr">
                                                        <input type="password" class="au-form__input" placeholder="Nhập lại mật khẩu">
                                                    </div>
                                                    <div class="au-form__gr">
                                                        <input type="text" class="au-form__input" placeholder="Nhập mã xác minh trên điện thoại">
                                                    </div>
                                                </div>

                                                <div class="au-form__aside">
                                                    <p class="au-form__policy-text">
                                                        Bạn đã đồng ý với Triple N về
                                                        <a href="" class="au-form__text-link">Điều khoản và dịch vụ</a> &
                                                        <a href="" class="au-form__text-link">Chính sách bảo mật</a>
                                                    </p>
                                                </div>

                                                <div class="au-form__controls">
                                                <button class="btn">TRỞ LẠI</button>
                                                    <button class="btn btn--buy">ĐĂNG KÝ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!------------------User --------------------------->
                        <li class="header__navbar-item header__navbar-user">
                            <img src="./assets/img/KH.png" alt="" class="header__navbar-user-avatar">
                            <span class="header__navbar-user-name">Tên KH</span>
                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="./accout.php">Tài khoản của tôi</a>
                                </li>

                                <li class="header__navbar-user-item">
                                    <a href="./cart.php">Đơn hàng của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="./history.php">Lịch sử mua hàng</a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item-separate">
                                    <a href="">Đăng xuất&emsp;&emsp;<i class="fa-solid fa-right-from-bracket"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <!--Tên shop----------------------------------------------------------------------------------->
                <div class="header-with-search">
                    
                    <div class="header__logo">
                        <a href="./index0.php" class="header__logo-link">
                            <img src="./assets/img/name.png" alt="" class="header__logo-img2 " width="150">

                        </a>

                    </div>
                    <!--Khung search-------------------------------------------------------------------------------->
                    <div class="header__search">

                        <input type="text" class="header_search-input" placeholder="Nhập sản phẩm cần tìm kiếm">
                        <button class="header__search-but">
                            <i class="fa-solid fa-magnifying-glass header__search-but-icon"></i>
                        </button>
                    </div>
                    <!--Giỏ hàng------------------------------------------------------------------------------------>

                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <i class="fa-solid fa-cart-shopping header__cart-icon"></i>
                            <span class="header__cart-noti">33</span>
                            <!----------Cart empty: header__cart-empty--------------------------------------->
                            <div class="header__cart-list ">
                                <!--Here-->
                                <img src="./assets/img/cart-empty.png" alt="" class="header__cart-empty-img">
                                <span class="header__cart-empty-text">Chưa có sản phẩm</span>
                                <!------Cart item----------------------------------------------------------->
                                <h3 class="header__cart-heading">Sản phẩm đã thêm</h3>
                                <ul class="header__cart-list-item">
                                    <li class="header__cart-item">
                                        <img src="./assets/img/sanpham/seiko ssb.jpg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-top">
                                                <h5 class="header__cart-item-name">Seiko SSB - Nam</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">7.320.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-bot">
                                                <span class="header__cart-item-description">Xuất xứ: Nhật Bản</span>
                                                <span class="header__cart-item-del">Xóa</span>
                                            </div>
                                    </li>
                                </ul>
                                <a class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
