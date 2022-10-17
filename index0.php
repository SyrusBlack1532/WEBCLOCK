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
    
        
        <!------------------------------Body website-------------------------------------------------------------->
        <!------------------------------Banner-------------------------------------------------------------->
        <div class="banner">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first ">
                        <img src="./assets/img/banner-1.jpg" alt="">
                    </div>
                    <div class="slide ">
                        <img src="./assets/img/banner-2.jpg" alt="">
                    </div>
                    <div class="slide ">
                        <img src="./assets/img/banner-3.jpg" alt="">
                    </div>
                    <div class="slide ">
                        <img src="./assets/img/banner-4.jpg" alt="">
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="navigation-manual">

                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
            <div class="banner2">
                <ul>
                    <li class="banner2-list">
                        <img src="./assets/img/banner-z.jpg" alt="" class="banner2-img">
                    </li>
                    <li class="banner2-list">
                        <img src="./assets/img/banner-z.jpg" alt="" class="banner2-img">
                    </li>
                </ul>

            </div>

        </div>
        
        <div class="container">
        <div class="grid">
        <div class="grid__row grid__content">
            <div class="grid__column-2">
                <!-------Cột tên thương hiệu sản phẩm------------------------------------------------->
                <nav class="category">

                    <label for="nav-mobie-input"  class="category-heading">
                        <i  class="fa-solid fa-list category-heading-icon"></i>
                        <span class="category-name">Thương Hiệu</span>   
                    </label>
                    <input type="checkbox" hidden class="nav-input" name="" id="nav-mobie-input">
                    <label for="nav-mobie-input" class="overlay"></label>
                    <nav class="category-mobie">
                        <h1 class="category-mobie-heading">Thương hiệu <span><label for="nav-mobie-input"><i class="fa-regular fa-circle-xmark x-icon"></i></label></span></h1>                       
                        <ul class="category-mobie-list">
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Seiko</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Longines</a>
                            </li>
                            <li class="category-mobie-item">
                                <a href="" class="category-mobie-item__link">Casio</a>
                            </li>   
                            <li class="category-mobie-item">
                                <a href="" class="category-mobie-item__link">Citizen</a>
                            </li>
                            <li class="category-mobie-item">
                                <a href="" class="category-mobie-item__link">CalVin Klein</a>
                            </li>
                            <li class="category-mobie-item">
                                <a href="" class="category-mobie-item__link">Saga</a>
                            </li>
                            <li class="category-mobie-item">
                                <a href="" class="category-mobie-item__link">Fossil</a>
                            </li>
                            <li class="category-mobie-item">
                                <a href="" class="category-mobie-item__link">Tissot</a>
                            </li>
                        </ul>
                        <h1 class="category-mobie-heading">Kiểu dáng </h1>                       
                        <ul class="category-mobie-list">
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Cho Nam</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Cho Nữ</a>
                            </li>                          
                        </ul>
                        <h1 class="category-mobie-heading">Xuất xứ </h1>                       
                        <ul class="category-mobie-list">
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Việt Nam</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Nhật Bản</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Thụy Sĩ</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link"></a>
                            </li>
                        </ul>
                        <h1 class="category-mobie-heading">Xếp loại sản phẩm </h1>
                        <ul class="category-mobie-list">
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Mới nhất</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Bán chạy</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link">Giảm giá</a>
                            </li>
                            <li class="category-mobie-item ">
                                <a href="" class="category-mobie-item__link"></a>
                            </li>
                        </ul>
                        
                        <div class="select-input">
                        <span class="select-input-label">Giá</span>
                        <i class="fas fa-angle-down select-input-icon"></i>
                        <ul class="select-input-list">
                            <li class="select-input-item">
                                <a href="" class="select-input-link">Giá: Thấp đến cao</a>
                            </li>
                            <li class="select-input-item">
                                <a href="" class="select-input-link">Giá: Cao đến thấp</a>
                            </li>
                        </ul>
                    </div>
                    </nav>
                    <ul class="category-list">
                        <li class="category-item ">
                            <a href="" class="category-item__link">Seiko</a>
                        </li>
                        <li class="category-item ">
                            <a href="" class="category-item__link">Longines</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Casio</a>
                        </li>   
                        <li class="category-item">
                            <a href="" class="category-item__link">Citizen</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">CalVin Klein</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Saga</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Fossil</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Tissot</a>
                        </li>
                    </ul>
                    <h1 class="category-name">Kiểu dáng </h1>                       
                        <ul class="category-list">
                            <li class="category-item ">
                                <a href="" class="category-item__link">Cho Nam</a>
                            </li>
                            <li class="category-item ">
                                <a href="" class="category-item__link">Cho Nữ</a>
                            </li>                          
                        </ul>
                        <h1 class="category-name">Xuất xứ </h1>                       
                        <ul class="category-list">
                            <li class="category-item ">
                                <a href="" class="category-item__link">Việt Nam</a>
                            </li>
                            <li class="category-item ">
                                <a href="" class="category-item__link">Nhật Bản</a>
                            </li>
                            <li class="category-item ">
                                <a href="" class="category-item__link">Thụy Sĩ</a>
                            </li>
                            <li class="category-item ">
                                <a href="" class="category-item__link"></a>
                            </li>
                        </ul>
                        
                        <h1 class="category-name">Xếp loại sản phẩm </h1>
                        <ul class="category-list">
                            <li class="category-item ">
                                <a href="" class="category-item__link">Mới nhất</a>
                            </li>
                            <li class="category-item ">
                                <a href="" class="category-item__link">Bán chạy</a>
                            </li>
                            <li class="category-item ">
                                <a href="" class="category-item__link">Giảm giá</a>
                            </li>
                            <li class="category-item ">
                                <a href="" class="category-item__link"></a>
                            </li>
                        </ul>
                        
                        <div class="select-input">
                        <span class="select-input-label">Giá</span>
                        <i class="fas fa-angle-down select-input-icon"></i>
                        <ul class="select-input-list">
                            <li class="select-input-item">
                                <a href="" class="category-item__link">Giá: Thấp đến cao</a>
                            </li>
                            <li class="select-input-item">
                                <a href="" class="category-item__link">Giá: Cao đến thấp</a>
                            </li>
                        </ul>
                        </div>
                </nav>

            </div>
            <!-------Sắp xếp sản phẩm------------------------------------------------------------------>
            <div class="grid__column-10">
                <div class="home-filtel">
                    

                    <div class="home-filter-page">
                        <span class="home-filter-page-num">
                            <span class="home-filter-page-current">1</span>/2
                        </span>
                        <div class="home-filter-page-control">
                            <a href="" class="home-filter-page-btn home-filter-page-btn-dis">
                                <i class="fas fa-angle-left home-filter-page-icon"></i>
                            </a>
                            <a href="" class="home-filter-page-btn">
                                <i class="fas fa-angle-right home-filter-page-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="home-product">
                    <div class="grid__row">

                        <!-------Sản phẩm 1.1------------------------------------------------------------------>

                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2021/11/SRPG09J1-699x699.jpg)"></div>
                                <h4 class="home-product-item-name">SEIKO SRPG09J1 – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY VẢI – MẶT SỐ 40MM</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">16.500.000đ</span>
                                    <span class="home-product-item-price-new">12.090.000đ</span>
                                </div>
                                    <label for="icon-heart"  class="home-product-item-action">
                                    <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>   
                                    </label>
                                    <input type="checkbox" hidden class="icon_heart" name="" id="icon-heart">              
                                
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Seiko</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item-sale">
                                    <span>Sale</span>
                                </div>

                            </a>
                        </div>


                        <!-------Sản phẩm 1.2------------------------------------------------------------------>

                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2017/08/105_BEM-520BUL-1AVDF-699x699.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CASIO BEM-520BUL-1AVDF – NAM – QUARTZ (PIN) –
                                    DÂY DA</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">4.999.000đ</span>
                                    <span class="home-product-item-price-new">4.738.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Casio</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>

                                <div class="home-product-item-hot">
                                    <span>Hot</span>
                                </div>
                            </a>
                        </div>

                        <!-------Sản phẩm 1.3------------------------------------------------------------------>



                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(./assets/img/sanpham/casio\ nam\ eqs.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CASIO EQS-910D-1AVUDF – NAM – DÂY KIM LOẠI
                                </h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">6.500.000đ</span>
                                    <span class="home-product-item-price-new">6.046.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Casio</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>
                                
                                <div class="home-product-item-hot">
                                    <span>Hot</span>
                                </div>
                            </a>
                        </div>


                        <!-------Sản phẩm 1.4------------------------------------------------------------------>


                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(./assets/img/sanpham/casio\ sgw.jpg)"></div>
                                <h4 class="home-product-item-name">CASIO SGW-400H-1B2VDR – NAM – KÍNH NHỰA – QUARTZ (PIN) – DÂY CAO SU</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">3.500.000đ</span>
                                    <span class="home-product-item-price-new">3.257.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Casio</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>

                                <div class="home-product-item-sale">
                                    <span>Sale</span>
                                </div>

                            </a>
                        </div>

                        <!------------------Sản phẩm 1.5-------------------------------------------------------------------------->


                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2016/12/NH8363-14H-1.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CITIZEN NH8363-14H – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY DA</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old"> </span>
                                    <span class="home-product-item-price-new">5.780.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Citizen</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item-new">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                    
                    <!---------------------------------------------Dòng 2 trang 1----------------------------------------------->
                   

                        <!-------Sản phẩm 2.1------------------------------------------------------------------>

                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2020/10/NH8397-80H-699x699.jpg)"></div>
                                <h4 class="home-product-item-name">CITIZEN NH8397-80H – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI – MẶT SỐ 40MM</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">9.500.000đ</span>
                                    <span class="home-product-item-price-new">9.177.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Citizen</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item-hot">
                                    <span>Hot</span>
                                </div>

                            </a>
                        </div>


                        <!-------Sản phẩm 2.2------------------------------------------------------------------>

                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2018/01/NH8365-86M-699x699.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CITIZEN NH8365-86M – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">7.999.000đ</span>
                                    <span class="home-product-item-price-new">7.140.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Citizen</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>

                                <div class="home-product-item-new">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <!-------Sản phẩm 2.3------------------------------------------------------------------>



                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2019/04/58_NY0083-14X-699x699.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CITIZEN NY0083-14X – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY CAO SU</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">9.000.000đ</span>
                                    <span class="home-product-item-price-new">8.900.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Citizen</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>
                                
                                <div class="home-product-item-hot">
                                    <span>Hot</span>
                                </div>
                            </a>
                        </div>


                        <!-------Sản phẩm 2.4------------------------------------------------------------------>


                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2017/09/BI1050-56L.jpg)"></div>
                                <h4 class="home-product-item-name">CITIZEN NAM – QUARTZ (PIN) – DÂY KIM LOẠI (BI1050-56L)</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old"> </span>
                                    <span class="home-product-item-price-new">3.150.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Casio</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>

                                <div class="home-product-item-hot">
                                    <span>Hot</span>
                                </div>

                            </a>
                        </div>

                        <!------------------Sản phẩm 2.5-------------------------------------------------------------------------->


                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2019/05/37_K8M27121-699x699.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CALVIN KLEIN K8M27121 – NAM – QUARTZ (PIN) – DÂY KIM LOẠI</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">9.500.000đ</span>
                                    <span class="home-product-item-price-new">9.410.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Calvin Klein</span>
                                    <span class="home-product-item-origin-name">Thụy Sỹ</span>
                                </div>
                                <div class="home-product-item-sale">
                                    <span>Sale</span>
                                </div>   
                            </a>
                        </div>

                   

                        <!-------Sản phẩm 3.1------------------------------------------------------------------>

                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2019/05/30_K8M21126-699x699.jpg)"></div>
                                <h4 class="home-product-item-name">CALVIN KLEIN K8M21126 – NAM – QUARTZ (PIN) – DÂY KIM LOẠI</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">7.500.000đ</span>
                                    <span class="home-product-item-price-new">6.750.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Calvin Klein</span>
                                    <span class="home-product-item-origin-name">Thụy Sỹ</span>
                                </div>
                                <div class="home-product-item-sale">
                                    <span>Sale</span>
                                </div>

                            </a>
                        </div>


                        <!-------Sản phẩm 3.2------------------------------------------------------------------>

                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2018/05/71_K3M2162Y-1-699x699.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CALVIN KLEIN K3M2162Y – NAM – QUARTZ (PIN) – DÂY KIM LOẠI</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">7.999.000đ</span>
                                    <span class="home-product-item-price-new">6.750.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Calvin Klein</span>
                                    <span class="home-product-item-origin-name">Thụy Sỹ</span>
                                </div>

                                <div class="home-product-item-new">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <!-------Sản phẩm 3.3------------------------------------------------------------------>



                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2020/02/48_K5R37141-699x699.jpg)">
                                </div>
                                <h4 class="home-product-item-name">CALVIN KLEIN K5R37141 – NAM – QUARTZ (PIN) – DÂY KIM LOẠI</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">10.500.000đ</span>
                                    <span class="home-product-item-price-new">10.150.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Calvin Klein</span>
                                    <span class="home-product-item-origin-name">Thụy Sỹ</span>
                                </div>
                                
                                <div class="home-product-item-new">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>


                        <!-------Sản phẩm 3.4------------------------------------------------------------------>


                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2017/04/4_K5S34141-699x699.jpg)"></div>
                                <h4 class="home-product-item-name">CALVIN KLEIN K5S34141 – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">16.500.000đ</span>
                                    <span class="home-product-item-price-new">15.980.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Calvin Klein</span>
                                    <span class="home-product-item-origin-name">Thụy Sỹ</span>
                                </div>

                                <div class="home-product-item-hot">
                                    <span>Hot</span>
                                </div>

                            </a>
                        </div>

                        <!------------------Sản phẩm 3.5-------------------------------------------------------------------------->


                        <div class="grid__column-2-4">
                            <a class="home-product-item">
                                <div class="home-product-item-img"
                                    style="background-image: url(https://cdn3.dhht.vn/wp-content/uploads/2022/02/SSB347P1-699x699.jpg)">
                                </div>
                                <h4 class="home-product-item-name">SEIKO SSB347P1 – NAM – QUARTZ (PIN) – DÂY CAO SU – MẶT SỐ 43.9MM</h4>
                                <div class="home-product-item-price">
                                    <span class="home-product-item-price-old">6.500.000đ</span>
                                    <span class="home-product-item-price-new">6.390.000đ</span>
                                </div>
                                <div class="home-product-item-action">
                                    <span class="home-product-item-like home-product-item-like-liked">
                                        <!--<i class="fa-regular fa-heart home-product-item-like-icon-empty"></i>-->
                                        <i class="fa-solid fa-heart home-product-item-like-icon-fill"></i>
                                    </span>
                                </div>
                                <div class="home-product-item-origin">
                                    <span class="home-product-item-brand">Seiko</span>
                                    <span class="home-product-item-origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item-new">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>
    <!------------------------------Footer-------------------------------------------------------------->
    <?php include("footer.php"); ?>
  
    
    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 3000);
    </script>
</body>

</html>