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
    <!-- style section -->
    <link rel="stylesheet" href="./assets/css/homepage.css" />
    <?php get_template_part('/pages/csshome'); ?>
</head>

<body>
    <?php get_template_part('/pages/header'); ?>
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


    <?php get_template_part('/pages/footer'); ?>

    <!-- hs ưu tú -->

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