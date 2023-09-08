<style>
    /* header2 */
    /*css day*/
    .header2 {
        background: #0068af;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 166px;
        position: relative;
    }

    .btn-tuyen-sinh {
        font-size: 12px;
        color: white;
        padding: 24px 47px 29px;
        background: #ffbd49;
        border: 0;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        position: absolute;
        top: 0;
        right: 200px;
        z-index: 2;

    }

    .block1 {
        width: 100%;
        height: 560px;
        background-image: url("@/assets/imgs/block1.png");
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        flex-direction: column;
        padding-bottom: 17px;
        justify-content: space-between;
    }

    .item-page {
        font-size: 12px;
        color: white;
    }

    .header-bottom {
        background: #0068af;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 166px;
        position: relative;
    }

    .kieu-van-ban {
        display: flex;
        align-items: center;
        gap: 13px;
        font-size: 14px;
        padding-right: 40px;
        color: white;
    }

    .navbar-collapse {
        flex-grow: 0;
    }

    .vn {
        padding-right: 13px;
        border-right: 2px solid white;
    }

    .icon-contact {
        display: flex;
        align-items: center;
        gap: 8px;
        padding-right: 59px;
    }

    .left {
        display: flex;
        align-items: center;
        /* padding: 19px 0; */
    }

    .cricle-link {
        border-radius: 999px;
        padding: 5px;
        background: white;
        color: #0068af;
        justify-content: center;
        display: flex;
        align-items: center;
    }

    .wrapper-page {
        display: flex;
        gap: 38px;
    }

    .footer {
        background-color: #0075d2;
        padding: 60px 0;
        color: white;
    }

    .continue a {
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

    .search {
        color: #2f2c1e;
        font-size: 14px;
        padding: 10px 20px 10px 40px;
        border: 0;
        background: white;
        border-radius: 20px;
    }

    .o-nhap {
        position: relative;
    }

    .fa-magnifying-glass {
        position: absolute;
        top: 13px;
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

        .wrapper-linkk {
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
        text-decoration: double !important;
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