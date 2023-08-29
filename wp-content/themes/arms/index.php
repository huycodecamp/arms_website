<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/custom-font.css" />
    <!-- Luc nao cung phai dat css cua minh o ben duoi cac thu vien thi moi overrride dc -->
    <style>
        /*Đây là đoạn text của header1 nhé */

        header div div span a {
            color: white;
        }

        .icon-contact {
            padding: 0;
        }

        .item-link {
            font-size: 14px;
            color: white;
        }

        .navbar-expand-lg {
            margin-left: 180px;
        }

        header div div span {
            margin-right: 1em;
        }

        .icon-contact {
            display: flex;
            align-items: center;
            gap: 8px;
            padding-right: 59px;
        }

        .cricle-link {
            text-decoration: none;
            border-radius: 999px;
            padding: 5px;
            background: white;
            color: #0068af;
            justify-content: center;
            display: flex;
            align-items: center;
        }

        .navbar-nav {
            align-items: center;
            padding: 0;
        }

        .container-header-1 {
            /* max-width: 70%; */
            width: 100%;
            display: flex;
            gap: 53px;
            align-items: center;
            justify-content: center;
            padding: 10px 0;
            background: #003e69;
            margin: 0 auto;
        }

        /* .carousel-indicators{
        height: 17px;
        width: 17px;
      } */

        /*header3*/

        .custom_slide img {
            width: 100%;
            height: 560px;
            object-fit: cover;
        }

        .bao {
            padding: 0;
        }

        .container {
            padding: 0;
            margin: 0;
        }

        #no_between {
            justify-content: initial;
        }

        /* cái này để css cái hình tròn nhé*/

        #rounded-circle {
            height: 14px;
            width: 14px;
            border-top: 0;
            border-bottom: 0;
            margin-bottom: 0;
        }
    </style>

    <!-- style section -->
    <link rel="stylesheet" href="./assets/css/homepage.css" />
</head>

<body>
    <header>
        <!-- header1 -->
        <div class="header1">
            <div class="container-header-1 navbar">
                <span class="d-none d-md-block"><a class="item-link" href="javascript:void(0)">Mẫu bảng điểm Tiếng Anh</a></span>
                <span class="d-none d-md-block">
                    <a class="item-link" href="javascript:void(0)">Lịch nhận hồ sơ vào lớp 6 năm học 2023 - 2024</a>
                </span>
                <span class="d-none d-md-block">
                    <a class="item-link" href="javascript:void(0)">Hà Nội công bố điểm chuẩn vào lớp 10 các trường THPT chuyên</a>
                </span>
            </div>
        </div>

        <!-- header2 -->

        <div class="header2">
            <!-- Navbar -->
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="left container-fluid" id="no_between">
                        <a class="navbar-brand kieu-van-ban" href="javascript:void(0)"><strong class="vn">VN</strong> EN</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse wrapper-page" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item d-none d-md-block">
                                    <a class="nav-link bao header2-color-white" aria-current="page" href="javascript:void(0)">
                                        <div class="icon-contact">
                                            <a class="cricle-link"><i class="fa-brands fa-facebook"></i></a>
                                            <a class="cricle-link"><i class="fa-brands fa-youtube"></i></a>
                                            <a class="cricle-link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="item-page nav-link header2-color-white" aria-current="page" href="javascript:void(0)"></a>
                                </li>

                                <li class="nav-item">
                                    <a class="item-page nav-link header2-color-white" aria-current="page" href="javascript:void(0)">GIỚI THIỆU</a>
                                </li>

                                <li class="nav-item">
                                    <a class="item-page nav-link header2-color-white" aria-current="page" href="javascript:void(0)">TIN TỨC - SỰ KIỆN</a>
                                </li>

                                <li class="nav-item">
                                    <a class="item-page nav-link header2-color-white" aria-current="page" href="javascript:void(0)">TUYỂN DỤNG</a>
                                </li>

                                <li class="nav-item">
                                    <a class="item-page nav-link header2-color-white" aria-current="page" href="javascript:void(0)">TUYỂN DỤNG</a>
                                </li>

                                <li class="nav-item">
                                    <a class="item-page nav-link header2-color-white" aria-current="page" href="javascript:void(0)">LIÊN HỆ</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <button class="btn-tuyen-sinh">Tuyển sinh</button>

        </div>

        <!-- header3 -->
        <div class="header3">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button id="rounded-circle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1"></button>
                    <button id="rounded-circle" class="rounded-circle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button id="rounded-circle" class="rounded-circle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/images/demo/imgs/block1.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/demo/imgs/block1.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/demo/imgs/block1.png" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="wrapper-linkk">
                <img src="./assets/images/demo/imgs/logo.png" />
                <div class="bao-boc">
                    <div class="bao-item-link">
                        <a href="#" class="item-linkk">
                            CHƯƠNG TRÌNH GIÁO DỤC
                        </a>
                        <a href="#" class="item-linkk">
                            TUYỂN SINH
                        </a>
                        <a href="#" class="item-linkk">
                            KẾT QUẢ HỌC TẬP
                        </a>
                        <a href="#" class="item-linkk">
                            KẾT QUẢ HỌC TẬP
                        </a>
                    </div>
                    <div class="o-nhap">
                        <input type="text" class="search" placeholder="Tìm kiếm..." />
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="block2 first">
        <div class="header-block2">
            <div class="title">
                <div>TIN NỔI BẬT</div>
            </div>
            <button class="btn">Xem tất cả</button>
        </div>
        <div class="wrapper-card">
            <div class="row mx-0">
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space_white"></div>
        </div>
    </div>
    <div class="block3">
        <div class="block2 khac-mau">
            <div class="header-block2">
                <div class="title">
                    <div>TIN NHÀ TRƯỜNG</div>
                </div>
                <button class="btn">Xem tất cả</button>
            </div>
            <div class="wrapper-card">
                <div class="row mx-0">
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space_white"></div>
            </div>
        </div>
    </div>
    <!-- block3 -->

    <div class="block2 first">
        <div class="header-block2">
            <div class="title">
                <div>GƯƠNG SÁNG</div>
            </div>
            <button class="btn">Xem tất cả</button>
        </div>
        <div class="wrapper-card">
            <div class="row mx-0">
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space_white"></div>
        </div>
    </div>
    <div class="block3">
        <div class="block2 khac-mau">
            <div class="header-block2">
                <div class="title">
                    <div>HOẠT ĐỘNG NGOẠI KHÓA</div>
                </div>
                <button class="btn">Xem tất cả</button>
            </div>
            <div class="wrapper-card">
                <div class="row mx-0">
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space_white"></div>
            </div>
        </div>
    </div>
    <!-- block hđ ngoai khóa -->

    <!-- css cho cái Chấm ở bên dưới nhé -->

    <style>
        .slick-dots {
            list-style: none;
            /* Loại bỏ chấm chỉ số mặc định */
            display: flex;
            /* Hiển thị chấm chỉ số dưới dạng dãy ngang */
            justify-content: center;
            /* Canh giữa chấm chỉ số */
            padding: 0;
            /* Loại bỏ khoảng cách nội bộ */
        }

        /* Định dạng mỗi chấm chỉ số */
        .slick-dots li {
            margin: 0 5px;
            /* Khoảng cách giữa các chấm chỉ số */
        }

        /* Ẩn phần tử button chứa số trên chấm chỉ số */
        .slick-dots li button {
            display: none;
            /* Ẩn số trên các chấm chỉ số */
        }

        /* Tạo hình tròn cho chấm chỉ số */
        .slick-dots li:before {
            content: "";
            /* Thêm nội dung trống */
            display: block;
            /* Hiển thị thành khối */
            width: 12px;
            /* Kích thước chiều rộng */
            height: 12px;
            /* Kích thước chiều cao */
            border-radius: 50%;
            /* Đổi hình dạng thành hình tròn */
            background-color: #ccc;
            /* Màu nền của chấm chỉ số */
        }

        /* Tạo màu nền khác cho chấm chỉ số hoạt động */
        .slick-dots li.slick-active:before {
            background-color: #333;
            /* Màu nền của chấm chỉ số hoạt động */
        }
    </style>

    <div class="container-student">
        <div class="student">
            <div class="header-container">
                <div class="title-student">CỰU HỌC SINH</div>
                <button class="btn hs">Xem tất cả</button>
            </div>
            <div class="slide-slick">
                <!-- slide 1 -->
                <div class="thong-tin" style="display: flex">
                    <img src="./assets/images/demo/imgs/hs.png" />
                    <div>
                        <div class="quang-ba">
                            10X là đại sứ học thuật trường Ams trúng tuyển đại học top 1
                            Canada
                        </div>
                        <div class="date-time">26/06/2023</div>
                        <div class="description-student">
                            Trúng tuyển 12 trường ở Mỹ, Nguyễn Thảo Anh chọn trường duy nhất
                            không cấp học bổng nhưng giúp em thỏa đam mê nghệ thuật. Thảo
                            Anh, cựu học sinh lớp 12 Anh 1, trường THPT chuyên Hà Nội -
                            Amsterdam, hoàn thành nộp hồ sơ ứng t uyển đại học vào đầu tháng
                            5. Nữ sinh trúng tuyển 17 trường, cả ở Anh, Mỹ và Nhật Bản.
                        </div>
                        <div class="continue-student">
                            <a href="javascript:void(0)" class="xem-them">XEM THÊM <i class="fa-solid fa-arrow-right next"></i></a>
                        </div>
                    </div>
                </div>
                <!-- slide 2 -->
                <div class="thong-tin" style="display: flex">
                    <img src="./assets/images/demo/imgs/hs.png" />
                    <div>
                        <div class="quang-ba">
                            10X là đại sứ học thuật trường Ams trúng tuyển đại học top 1
                            Canada
                        </div>
                        <div class="date-time">26/06/2023</div>
                        <div class="description-student">
                            Trúng tuyển 12 trường ở Mỹ, Nguyễn Thảo Anh chọn trường duy nhất
                            không cấp học bổng nhưng giúp em thỏa đam mê nghệ thuật. Thảo
                            Anh, cựu học sinh lớp 12 Anh 1, trường THPT chuyên Hà Nội -
                            Amsterdam, hoàn thành nộp hồ sơ ứng t uyển đại học vào đầu tháng
                            5. Nữ sinh trúng tuyển 17 trường, cả ở Anh, Mỹ và Nhật Bản.
                        </div>
                        <div class="continue-student">
                            <a href="javascript:void(0)" class="xem-them">XEM THÊM <i class="fa-solid fa-arrow-right next"></i></a>
                        </div>
                    </div>
                </div>
                <!-- slide 3 -->
                <div class="thong-tin" style="display: flex">
                    <img src="./assets/images/demo/imgs/hs.png" />
                    <div>
                        <div class="quang-ba">
                            10X là đại sứ học thuật trường Ams trúng tuyển đại học top 1
                            Canada
                        </div>
                        <div class="date-time">26/06/2023</div>
                        <div class="description-student">
                            Trúng tuyển 12 trường ở Mỹ, Nguyễn Thảo Anh chọn trường duy nhất
                            không cấp học bổng nhưng giúp em thỏa đam mê nghệ thuật. Thảo
                            Anh, cựu học sinh lớp 12 Anh 1, trường THPT chuyên Hà Nội -
                            Amsterdam, hoàn thành nộp hồ sơ ứng t uyển đại học vào đầu tháng
                            5. Nữ sinh trúng tuyển 17 trường, cả ở Anh, Mỹ và Nhật Bản.
                        </div>
                        <div class="continue-student">
                            <a href="javascript:void(0)" class="xem-them">XEM THÊM <i class="fa-solid fa-arrow-right next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- đây là cái nút chuyển trang này -->

    <div class="custom-arrows">
        <div class="custom-prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="custom-next">
            <i class="fa-solid fa-chevron-left fa-rotate-180"></i>
        </div>
    </div>

    <div class="block3">
        <div class="block2 khac-mau">
            <div class="header-block2">
                <div class="title">
                    <div>HỌC BỔNG</div>
                </div>
                <button class="btn">Xem tất cả</button>
            </div>
            <div class="wrapper-card">
                <div class="row mx-0">
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space_white"></div>
            </div>
        </div>
    </div>
    <!-- block3 -->

    <div class="block2 first">
        <div class="header-block2">
            <div class="title">
                <div>DU HỌC</div>
            </div>
            <button class="btn">Xem tất cả</button>
        </div>
        <div class="wrapper-card">
            <div class="row mx-0">
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space_white"></div>
        </div>
    </div>
    <div class="block3">
        <div class="block2 khac-mau">
            <div class="header-block2">
                <div class="title">
                    <div>BÁO CHÍ VỀ TRƯỜNG</div>
                </div>
                <button class="btn">Xem tất cả</button>
            </div>
            <div class="wrapper-card">
                <div class="row mx-0">
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-card col-lg-4 col-md-12 px-3">
                        <div class="bg-white">
                            <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                            <div class="content px-3">
                                <div class="new">Tin tức</div>
                                <div class="description">
                                    Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                    2023
                                </div>
                                <div class="date">26/06/2023</div>
                                <div class="description-two">
                                    Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                    sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                    nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                                </div>
                                <div class="continue">
                                    <a href="#"> Xem thêm </a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space_white"></div>
            </div>
        </div>
    </div>
    <!-- block3 -->

    <div class="block2 first">
        <div class="header-block2">
            <div class="title">
                <div>TUYỂN SINH</div>
            </div>
            <button class="btn">Xem tất cả</button>
        </div>
        <div class="wrapper-card">
            <div class="row mx-0">
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-card col-lg-4 col-md-12 px-3">
                    <div class="bg-white">
                        <img class="avt" src="./assets/images/demo/imgs/avt-1.png" />
                        <div class="content px-3">
                            <div class="new">Tin tức</div>
                            <div class="description">
                                Tiếp sức mùa thi Tuyển sinh lớp 6: Chiến dịch Hoa Phượng Đỏ
                                2023
                            </div>
                            <div class="date">26/06/2023</div>
                            <div class="description-two">
                                Dưới những cơn mưa hè của tháng 6, không khí kỳ thi Tuyển
                                sinh vào lớp 6 trường THPT chuyên Hà Nội - Amsterdam lại trở
                                nên nóng hơn bao giờ hết. Ngày 23/6, hai điểm thi đã ...
                            </div>
                            <div class="continue">
                                <a href="#"> Xem thêm </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space_white"></div>
        </div>
    </div>

    <!-- block4 -->

    <footer>
        <div class="footer">
            <div class="footer-small">
                <div class="row footer-dt">
                    <div class="col-6">
                        <div>
                            <strong> TRƯỜNG THPT CHUYÊN HÀ NỘI - ARMSTERDAM</strong>
                        </div>
                        <div class="address">
                            <i class="fa-solid fa-location-dot"></i> Hoàng Minh Giám, Cầu
                            Giấy, Hà Nội
                        </div>
                        <div class="address">
                            <i class="fa-solid fa-envelope"></i> c23hanoi-ams@hanoiedu.vn
                        </div>
                    </div>
                    <div class="col-6 footer-img">
                        <div class="support">Hỗ trợ &amp; phát triển bởi</div>
                        <div class="image-logo">
                            <img src="./assets/images/demo/imgs/aptech1.png" alt="" />
                            <img src="./assets/images/demo/imgs/tinhvan_1.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- hs ưu tú -->
    <style>
        .footer {
            background-color: #0075d2;
            padding: 60px 0;
            color: white;
        }
        .continue a{
            text-decoration: none;
            color: black;
            font-size: 14px;
        }

        .header3 {
            position: relative;
        }

        .wrapper-linkk {
            position: absolute;
            top: 22px;
            left: 255px;
            display: flex;
            gap: 150px;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
        }
        .search{
            color: #2f2c1e;
            font-size: 14px;
            padding: 10px 20px 10px 40px;
            border: 0;
            background: white;
            border-radius: 20px;
        }
        .o-nhap{
            position: relative;
        }
        .fa-magnifying-glass{
            position: absolute;
            top:13px;
            left: 15px;
            color: #2f2c1e;
        }
        .bao-boc {
            display: flex;
            gap: 130px;
            align-items: center;
        }

        .bao-item-link {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .item-linkk {
            text-decoration: none;
            color: white;
            font-size: 12px;
        }

        .address {
            font-size: 16px;
            padding-top: 18px;
        }

        .footer-img {
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .image-logo {
            display: flex;
            gap: 7px;
        }

        .image-logo img {
            /* width: ; */
            height: 38px;
        }

        .footer-small {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-container {
            padding: 26px 0;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid white;
            border-top: 1px solid white;
            margin-bottom: 81px;
        }

        .next {
            font-size: 10px !important;
        }

        .description-student {
            font-size: 16px;
            color: white;
            padding-bottom: 48px;
        }

        .thong-tin {
            display: flex;
            gap: 30px;
        }

        .xem-them {
            color: white;
            text-decoration: none;
            font-size: 12px;
        }

        .continue-student {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
        }

        .date-time {
            font-size: 12px;
            color: white;
            padding-bottom: 31px;
        }

        .quang-ba {
            font-size: 36px;
            color: white;
            padding-bottom: 40px;
        }

        .title-student {
            font-size: 30px;
            color: white;
        }

        .hs {
            background-color: #007fff !important;
        }


        .hs:hover {
            background-color: white !important;
        }

        /* css hs */
        .student {
            max-width: 1200px;
            background-color: #003e69;
            margin: 0 auto;
            padding: 50px 108px 20px;
        }

        .container-student {
            padding: 40px 0;
        }

        /* block1 */
        .block2 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 0 0 0;
        }

        .first {
            padding-top: 48px;
        }

        .block3 {
            width: 100%;
            height: 100%;
            background-color: #f2f2f2;
            padding-bottom: 20px;
        }

        .content {
            padding: 0 20px;
        }

        .new {
            color: #ffa33e;
            font-size: 14px;
            padding-bottom: 5px;
        }

        .continue {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;

            padding-bottom: 25px;
        }

        .item-card {
            /* box-shadow: 15px 15px 20px 0px rgba(211, 209, 216, 0.25); */
            padding-left: 0;
            padding-right: 0;
        }

        .fa-arrow-right {
            font-size: 12px;
        }

        .date {
            color: black;
            font-size: 12px;
            padding-bottom: 13px;
        }

        .description {
            color: #0068af;
            font-size: 20px;
            padding-bottom: 14px;
        }

        .description-two {
            color: black;
            font-size: 14px;
            padding-bottom: 75px;
        }

        .wrapper-card {
            display: flex;
            align-items: center;
            /* gap: 27px; */
            margin-bottom: 40px;
        }

        .avt {
            width: 100%;
            padding-bottom: 20px;
        }

        .btn {
            padding: 10px 18px;
            border: 1px solid #7f9eb4;
            border-radius: 5px;
            font-size: 12px;
            color: #003e69;
            background-color: white;
            margin-bottom: 10px;
        }

        .btn:hover {
            background-color: #5a5a80;
        }

        .header-block2 {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #0068af;
            margin-bottom: 60px;
        }

        .title {
            font-size: 25px;
            color: white;
            padding: 5px 32px;
            background-color: #0068af;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        @media (max-width: 900px) {
            .thong-tin {
                flex-direction: column;
            }
            .wrapper-linkk{
                display: none;
            }

            .navbar-expand-lg {
                margin-left: 0px;
            }

            .btn-tuyen-sinh {
                display: none;
            }

            #no_between {
                justify-content: space-between;
            }

            .support {
                font-size: 13px;
            }

            .student {
                padding: 50px 40px 20px;
            }

            .footer-dt {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .footer-img {
                padding-top: 15px;
                gap: 10px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="./assets/js/homepage.js"></script>

    <!-- Đây là phần chuyển trang của cái mình bảo bạn nhé -->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".slide-slick").slick({
                dots: true,
                speed: 300,
                slidesToShow: 1,
                prevArrow: $(".custom-prev"), //cái này là class của thằng lùi nhé
                nextArrow: $(".custom-next"), //cái này là class của thằng tiền nhé
                // nói chung hai thằng prevArrow và nextArrow ở trên nó sẽ lấy cái nội dung bên trong của cái class đó. Bạn cho nó thành hình gì nó sẽ thành hình đó nhé. <3333
            });
        });
    </script>
</body>

</html>