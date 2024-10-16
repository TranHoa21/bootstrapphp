<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <div class="body row">
    <div class="col-md-4 sidebar">
        <div class="all-product">
            <div class="list-product">
                <img src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728931713/menu-bar_10080494_ghj1mu.png"
                    class="list-product-icon" />
                <h6 class="list-product-title">Danh Mục Sản Phẩm</h6>
            </div>
            <ul class="product-ul">
                <li class="product-item" onclick="goToProducts('featured')">Sản phẩm nổi bật</li>
                <li class="product-item" onclick="goToProducts('promotion')">Sản phẩm khuyến mãi</li>
                <li class="product-item" onclick="goToProducts('mobile')">Điện thoại di động</li>
                <li class="product-item" onclick="goToProducts('laptop')">Laptop</li>
                <li class="product-item" onclick="goToProducts('tv')">Tivi</li>
                <li class="product-item" onclick="goToProducts('headphones')">Tai nghe</li>
                <li class="product-item" onclick="goToProducts('audio')">Âm thanh</li>
                <li class="product-item" onclick="goToProducts('pc')">PC </li>
                <li class="product-item" onclick="goToProducts('computer_mouse')">Chuột</li>
                <li class="product-item" onclick="goToProducts('audio')">Bàn phím</li>
                <!-- Thêm các sản phẩm khác -->
            </ul>
        </div>
        <div class="support-box">
            <h5 class="support-title">Hỗ Trợ Trực Tuyến</h5>
            <div class="support-data">
                <img class="support-image"
                    src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728932992/call_3811725_rqyu52.png" />
                <div class="support-tt">
                    <p class="support-ctv">Tư vấn bán hàng 1</p>
                    <p class="support-name-phone">Mrs. Dung (04) 37868904</p>
                </div>
            </div>
            <div class="support-data">
                <img class="support-image"
                    src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728932992/call_3811725_rqyu52.png" />
                <div class="support-tt">
                    <p class="support-ctv">Tư vấn bán hàng 2</p>
                    <p class="support-name-phone">Mr. Tuấn (04) 37868904</p>
                </div>
            </div>
            <div class="support-data">
                <img class="support-image"
                    src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728933049/forward_13903174_voaxnq.png" />
                <div class="support-tt">
                    <p class="support-ctv">Email liên hệ </p>
                    <p class="support-name-phone">support@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="news-box">
            <div class="news-box-title">
                <h5 class="news-title">Tin Tức</h5>
                <div class="news-btn">
                    <button class="previous"><img class="previous-icon"
                            src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728934558/arrow-left_5082834_uup8uq.png" /></button>
                    <button class="next"><img class="next-icon"
                            src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728934552/arrow-right_5082848_itat8z.png" /></button>
                </div>
            </div>
            <div class="post-box">
                <img class="post-image"
                    src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728408006/html_le8svd.png" />
                <h5 class="post-title">LG ra mắt loạt tv oled 4k tích hợp hdr tại ces 2016</h5>
                <p class="post-date">08/01/2016</p>
                <p class="post-describe">LG vừa giới thiệu loạt TV OLED 4K mới tại triển lãm CES 2016, trong đó
                    tiêu
                    biểu là 2 mẫu TV LG OLED 77/65-inch 08 và 65/66-inch E6 có tích hợp tính năng HDR. Theo đó ,
                    8
                    mẫu TV OLED 2016 đều được tích hợp những...</p>
            </div>
            <div class="sale-box">
                <img class="sale-image"
                    src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728971523/4371392_vo7ny9.jpg" />
            </div>
        </div>
    </div>
        <div class="col-md-8 home-data">
            <img class="banner-home"
                src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728968024/beautiful-happy-asian-girl-showing-mobile-phone-screen-application-smartphone-gadget-standing-yellow-background_1_rdbgpa.jpg" />
            <div class="box-product">

                <h5 class="hot-products-title">
                    Sản Phẩm hot
                </h5>
                <div class="hot-products">
                    <div class="hot-products-box row">
                        <div class="col-md-3 hot-products-item" data-id="1">
                            <img class="hot-products-item-image"
                                src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728974132/iphone-16-pro-max-titan-den-1-638638962017739954-750x500_drvd5f.jpg" />
                            <h6 class="hot-products-item-title">Điện thoại iPhone 16 Pro Max 256GB</h6>
                            <p class="hot-products-item-price">34.990.000₫</p>
                            <button class="btn-hot-products-item">Chọn sản phẩm</button>

                        </div>
                        <div class="col-md-3 hot-products-item" data-id="2">
                            <img class="hot-products-item-image"
                                src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728974132/iphone-16-pro-max-titan-den-1-638638962017739954-750x500_drvd5f.jpg" />
                            <h6 class="hot-products-item-title">Điện thoại iPhone 15 Pro Max 256GB</h6>
                            <p class="hot-products-item-price">29.990.000₫</p>
                            <button class="btn-hot-products-item">Chọn sản phẩm</button>

                        </div>
                        <div class="col-md-3 hot-products-item">
                            <img class="hot-products-item-image"
                                src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728974132/iphone-16-pro-max-titan-den-1-638638962017739954-750x500_drvd5f.jpg" />
                            <h6 class="hot-products-item-title">Điện thoại iPhone 16 Pro Max 256GB</h6>
                            <p class="hot-products-item-price">34.990.000₫</p>
                            <button class="btn-hot-products-item">Chọn sản phẩm</button>
                        </div>
                        <div class="col-md-3 hot-products-item">
                            <img class="hot-products-item-image"
                                src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728974132/iphone-16-pro-max-titan-den-1-638638962017739954-750x500_drvd5f.jpg" />
                            <h6 class="hot-products-item-title">Điện thoại iPhone 16 Pro Max 256GB</h6>
                            <p class="hot-products-item-price">34.990.000₫</p>
                            <button class="btn-hot-products-item">Chọn sản phẩm</button>
                        </div>
                    </div>
                </div>
                <h5 class="new-products-title">
                    Sản phẩm mới
                </h5>
                <div class="new-products">
                    <div class="new-products-box row">
                        <div class="col-md-3 new-products-item" data-id="">
                            <img class="new-products-item-image"
                                src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728974132/iphone-16-pro-max-titan-den-1-638638962017739954-750x500_drvd5f.jpg" />
                            <h6 class="new-products-item-title">Điện thoại iPhone 16 Pro Max 256GB</h6>
                            <p class="new-products-item-price">34.990.000₫</p>
                            <button class="btn-hot-products-item">Chọn sản phẩm</button>

                        </div>
                    </div>
                    <div class="pagination">
                        <!-- Nút phân trang sẽ được tạo động tại đây -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="banner-bottom">
        <img class="banner-bottom-image"
            src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728976999/BIG_SALE_chuq8j.png" />
    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="data.js"></script>
    <script type="module" src="./pagination.js"></script>
</body>

</html>