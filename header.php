<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/navbar.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-head">
            <div class="box-contact">
                <div class="box-contact-phone">
                    <img class="support-image"
                        src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728932992/call_3811725_rqyu52.png" />
                    <p class="phone-data">(04) 37868904</p>
                </div>
                <div class="box-contact-phone">
                    <img class="support-image"
                        src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728933049/forward_13903174_voaxnq.png" />
                    <p class="phone-data">support@gmail.com</p>
                </div>
            </div>
            <div class="box-log">
                <button class="login-box" onClick="window.location.href='login.php'">
                    <img class="login-icon"
                        src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728967854/person_12259373_owtewa.png" />
                    <p class="login-content">Đăng Nhập</p>
                </button>
                <button class="login-box" onClick="window.location.href='signup.php'">
                    <img class="login-icon"
                        src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728967854/person_12259373_owtewa.png" />
                    <p class="login-content">Đăng Ký</p>
                </button>
            </div>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
                <img src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728918502/black_white_nature_logo_1_-Photoroom_wup7zz.png"
                    alt="Logo" class="d-inline-block align-text-top">
            </a>
            <form class="d-flex search-bar" method="GET" action="/search.php" role="search">
                <input type="text" name="query" placeholder="Nhập từ khóa tìm kiếm" aria-label="Search">
                <button type="submit">
                    <img src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728919725/search_3917132_v4msu0.png"
                        alt="Search" class="search-icon">
                </button>
            </form>
            <a class="shopping-cart " id="show-cart" href="/cart.php">
                <img class="cart-icon"
                    src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728920284/shopping-cart_6573030_hmnyev.png" />
                <p id="cart-count">0 sản phẩm <img class="down-icon"
                        src="https://res.cloudinary.com/dhjrrk4pg/image/upload/v1728920655/yield_3970374_davsb0.png" />
                </p>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php">Trang Chủ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/introduce.php">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news.php">Tin Tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="/nav/navbar.js"></script>
</body>

</html>
